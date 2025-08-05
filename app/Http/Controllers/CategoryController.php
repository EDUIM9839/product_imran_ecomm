<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{


    public function category_list()
    {
        return view('superadmin.category-list');
    }

    public function categories_list(Request $request)
    {
        $categories = Category::orderBy('id', 'asc')->get();
        return datatables()->of($categories)
            ->addColumn('checkbox', function ($row) {
                return '<div class="form-check form-check-md">
                <input class="form-check-input category-checkbox" type="checkbox" value="' . $row->id . '">
            </div>';
            })
            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->format('d M Y');
            })
            ->editColumn('status', function ($row) {
                if ($row->status === 'Active') {
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
                
                    class="me-2 d-flex align-items-center p-2 border rounded edit-category" 
                    data-id="' . $row->id . '" 
                    data-name="' . $row->name . '" 
                    data-status="' . $row->status . '">
                    <i class="ti ti-edit"></i>
                </a>
                <a href="javascript:void(0);" class="d-flex align-items-center p-2 border rounded delete-category" 
                    data-id="' . $row->id . '" 
                    data-name="' . $row->name . '">
                    <i class="ti ti-trash"></i>
                </a>
            </div>';
            })

            ->rawColumns(['checkbox', 'status', 'action'])
            ->make(true);
    }

    public function categories_store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories,name',
        ]);
        $name = $request->name;
        $status = $request->status;
        $slag = Str::lower($request->name);

        Category::create(['name' => $name, 'slug' => $slag, 'status' => $status]);

        return response()->json(['success' => 'Category added successfully']);
    }

    public function categories_update(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $name = $request->name;
        $status = $request->status;
        $slag = Str::lower($request->name);
        $validated = $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        $category->update(['name' => $name, 'slug' => $slag, 'status' => $status]);

        return response()->json(['success' => 'Category updated successfully']);
    }

    public function categories_delete(Request $request)
    {
        Category::findOrFail($request->id)->delete();
        return response()->json(['success' => 'Category deleted successfully']);
    }
    public function categories_bulkDelete(Request $request)
    {
        $ids = $request->ids;
        Category::whereIn('id', $ids)->delete();

        return response()->json(['success' => 'Selected categories deleted successfully']);
    }
}
