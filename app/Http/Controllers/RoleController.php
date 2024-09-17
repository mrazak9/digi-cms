<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    function index(Request $request)
    {
        $type_menu = 'user_setting';

        $roles = Role::orderBy('id', 'desc')
            ->paginate(10);

        return view('pages.admin.roles.index', compact('roles', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'user_setting';
        return view('pages.admin.roles.create', compact('type_menu'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        Role::create([
            'name' => $request['name']
        ]);

        return redirect(route('roles.index'))->with('success', 'New Role Successfully');
    }

    public function edit(Role $role)
    {
        $type_menu = 'user_setting';

        return view('pages.admin.roles.edit', compact('type_menu'))->with('role', $role);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $request->id,
        ]);

        $role = Role::findById($request->id);
        $role->name = $request->name;
        $role->save();

        return redirect()->back()->with('success', 'Role berhasil diperbaharui.');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Delete Role Successfully');
    }

    function addPermission(Request $request)
    {
        $role = Role::find($request->role);
        $type_menu = 'user_setting';

        // Ambil semua izin dari database
        $permissions = Permission::where(function ($query) {
            $query->where('name', 'not like', '%generated%')
                ->where('name', 'not like', '%password%')
                ->where('name', 'not like', '%two-factor%')
                ->where('name', 'not like', '%ignition%');
        })->get();


        // Kelompokkan izin berdasarkan nama
        $groupedPermissions = $permissions->groupBy(function ($permission) {
            // Misalnya, jika nama izin adalah "user.index", kita ambil "user" sebagai kategori
            return explode('.', $permission->name)[0];
        });

        // return $groupedPermissions;

        return view('pages.admin.roles.add_permission', compact('type_menu', 'groupedPermissions', 'role'));
    }

    function roleHasPermission(Request $request)
    {
        $role = Role::find($request->role);
        $permissions = $request->input('permissions', []);
        // return  $role;
        // Menyinkronkan izin ke peran menggunakan syncPermissions
        $role->syncPermissions($permissions);

        // Anda dapat menambahkan logika lain yang dibutuhkan di sini

        return redirect()->route('roles.index')->with('success', 'Permissions assigned to role successfully');
    }
}
