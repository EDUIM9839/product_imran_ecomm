<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;


class ModuleController extends Controller
{
    public function index()
    {
        return view('superadmin.add_module');
    }

    public function store(Request $request)
    {
        $request->validate([
            'module_name' => 'required|string|max:255',
            'status' => 'required|boolean'
        ]);

        $module = new Module();
        $module->name = $request->module_name;
        $module->status = $request->status;
        $module->save();

        return response()->json(['success' => true]);
    }

    public function bulkDelete(Request $request)
    {
        $moduleIds = $request->selected_module;

        if (!$moduleIds || !is_array($moduleIds)) {
            return response()->json(['message' => 'No Module selected'], 400);
        }

        Module::whereIn('id', $moduleIds)->delete();

        return response()->json(['message' => 'Selected Module deleted successfully.']);
    }

    public function list(Request $request)
    {

        $modules = Module::select(['id', 'name', 'status', 'created_at'])->orderBy('id', 'desc');
        

        return DataTables::of($modules)
            ->addColumn('checkbox', function ($row) {
                return '<div class="form-check form-check-md">
                            <input class="form-check-input role-checkbox" type="checkbox" name="selected_module[]" value="' . $row->id . '">
                        </div>';
            })
            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->format('d M Y');
            })
            ->editColumn('status', function ($row) {
                if ($row->status) {
                    return '<span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                <i class="ti ti-point-filled me-1"></i>Active
                            </span>';
                } else {
                    return '<span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                <i class="ti ti-point-filled me-1"></i>Inactive
                            </span>';
                }
            })
            ->addColumn('action', function ($row) {
                return '<div class="action-icon d-inline-flex">
                <a href="javascript:void(0);" 
                    class="me-2 d-flex align-items-center p-2 border rounded editModuleBtn" 
                    data-id="' . $row->id . '" 
                    data-name="' . $row->name . '" 
                    data-status="' . $row->status . '">
                    <i class="ti ti-edit"></i>
                </a>
                <a href="javascript:void(0);" 
                    class="d-flex align-items-center p-2 border rounded deleteModuleBtn" 
                    data-id="' . $row->id . '" 
                    data-name="' . $row->name . '">
                    <i class="ti ti-trash"></i>
                </a>
            </div>';
            })
            ->rawColumns(['checkbox', 'status', 'action'])
            ->make(true);
    }


    public function update(Request $request)
    {
        $module = Module::find($request->id);
        if ($module) {
            $module->name = $request->module_name;
            $module->status = $request->status;
            $module->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

    public function delete(Request $request)
    {
        $module = Module::find($request->id);
        if ($module) {
            $module->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
