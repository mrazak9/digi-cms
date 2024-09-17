<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $type_menu = 'user_setting';
        $permissions = Permission::all();
        return view('pages.admin.permissions.index', compact('permissions', 'type_menu'));
    }

    public function create()
    {
        return view('pages.admin.permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
        ]);

        Permission::create(['name' => $request->name]);

        return redirect()->route('permissions.index')
            ->with('success', 'Permission created successfully');
    }


    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:permissions,name,' . $request->id,
        ]);

        $permission = Permission::findById($request->id);
        $permission->name = $request->name;
        $permission->save();

        return redirect()->back()->with('success', 'Permission berhasil diperbaharui.');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('permissions.index')
            ->with('success', 'Permission deleted successfully');
    }
}
