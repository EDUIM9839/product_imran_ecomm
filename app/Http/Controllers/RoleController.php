<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Module;
use App\Models\ModulePermission;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string|max:255',
        ]);

        $status = $request->has('status') ? 1 : 0;

        Role::create([
            'name' => $request->role_name,
            'status' => $status,
        ]);

        return redirect()->route('roles-permissions')->with('success', 'Role Created Successfully!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'role_name' => 'required|string|max:255',
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->role_name;
        $role->status = $request->has('status') ? 1 : 0;
        $role->save();

        return redirect()->back()->with('success', 'Role Updated Successfully!');
    }
    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->back()->with('success', 'Role Deleted Successfully!');
    }

    public function bulkDelete(Request $request)
    {
        $roleIds = $request->selected_roles;

        if (!$roleIds || !is_array($roleIds)) {
            return response()->json(['message' => 'No roles selected'], 400);
        }

        Role::whereIn('id', $roleIds)->delete();

        return response()->json(['message' => 'Selected roles deleted successfully.']);
    }
    public function filter(Request $request)
    {
        $status = $request->status;
        $roles = Role::where('status', $status)->get();

        $html = view('superadmin.roles_table_rows', compact('roles'))->render();

        return response()->json(['html' => $html]);
    }
    public function search(Request $request)
    {
        $query = $request->query;

        $roles = Role::where('name', 'LIKE', '%' . $query . '%')->get();

        $html = view('superadmin.roles_table_rows', compact('roles'))->render();

        return response()->json(['html' => $html]);
    }

    public function permissions()
    {
        return view('superadmin.permissions');
    }
    public function rolePermissions($roleId)
    {
        $modules = Module::all();
        $permissions = ModulePermission::where('role_id', $roleId)->get()->keyBy('module_id');

        return view('superadmin.permissions', compact('modules', 'permissions', 'roleId'));
    }
    public function savePermissions(Request $request, $roleId)
    {
        foreach ($request->permissions as $moduleId => $permissionTypes) {
            ModulePermission::updateOrCreate(
                ['role_id' => $roleId, 'module_id' => $moduleId],
                [
                    'allow_all' => isset($permissionTypes['allow_all']),
                    'read' => isset($permissionTypes['read']),
                    'write' => isset($permissionTypes['write']),
                    'create' => isset($permissionTypes['create']),
                    'delete' => isset($permissionTypes['delete']),
                    'import' => isset($permissionTypes['import']),
                    'export' => isset($permissionTypes['export']),
                ]
            );
        }

        return redirect()->back()->with('success', 'Permissions updated successfully!');
    }

   public function PermissionsUpdate(Request $request)
{
    $moduleId = $request->module_id;
    $role_id = $request->role_id;
    $permissions = $request->permissions;

    // Ensure only valid fields are passed
    $allowedFields = ['allow_all', 'read', 'write', 'create', 'delete', 'import', 'export'];
    $filteredPermissions = array_intersect_key($permissions, array_flip($allowedFields));

    $permission = ModulePermission::updateOrCreate(
        [
            'module_id' => $moduleId,
            'role_id' => $role_id
        ],
        $filteredPermissions
    );

    return response()->json(['success' => true, 'data' => $permission]);
}

}
