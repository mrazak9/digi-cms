<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    function index(Request $request)
    {
        $type_menu = 'user_setting';

        $users = User::when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })
            ->select('id', 'name', 'email', 'phone')
            ->with('roles:name') // Mengambil relasi roles dengan hanya kolom 'name'
            ->orderByDesc('id')
            ->paginate(10);
        // $users = User::with('roles')->get();
        return view('pages.admin.users.index', compact('users', 'type_menu'));
    }


    public function create()
    {
        $type_menu = 'user_setting';
        return view('pages.admin.users.create', compact('type_menu'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // return $request;
        $validatedData = $request->validated();

        if ($request->hasFile('photo')) {
            $photoFileName = $request->name . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('public/uploads/users/photo', $photoFileName);
            $validatedData['photo'] = 'uploads/users/photo/' . $photoFileName;
        }
        $validatedData['password'] = Hash::make($request['password']);
        User::create($validatedData);

        return redirect(route('user.index'))->with('success', 'New User Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        $type_menu = '';

        $jumlahPosts = $user->posts()->count();
        $jumlahPages = $user->pages()->count();
        return view('pages.admin.users.profile', compact('user', 'type_menu', 'jumlahPosts', 'jumlahPages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(User $user)
    {
        $type_menu = 'user_setting';
        $userRoles = $user->getRoleNames();
        $roles = Role::all();

        return view('pages.admin.users.edit', compact('type_menu', 'roles', 'userRoles'))->with('user', $user);
    }

    public function update(UserRequest $request, User $user)
    {
        // return $request;
        $validatedData = $request->validated();

        if ($request->hasFile('photo')) {
            $photoFileName = $user->name . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('public/uploads/users/photo', $photoFileName);
            $validatedData['photo'] = 'uploads/users/photo/' . $photoFileName;

            // Hapus file lama jika berhasil mengupload file baru
            if ($user->photo) {
                Storage::delete($user->photo);
            }

            if ($request->password) {
                $validatedData['password'] = Hash::make($request['password']);
            }
        }

        $user->update($validatedData);

        // Sync roles
        if ($request->has('roles')) {
            $user->syncRoles($request->roles);
        } else {
            // Jika tidak ada roles yang dipilih, hapus semua roles yang dimiliki pengguna
            $user->syncRoles([]);
        }

        $type_menu = '';
        $jumlahPosts = $user->posts()->count();
        $jumlahPages = $user->pages()->count();
        // return view('pages.admin.users.profile', compact('user', 'type_menu', 'jumlahPosts', 'jumlahPages'));
        return redirect()->route('user.show', ['user' => $user->id])->with('success', 'Edit User Successfully')->with(compact('user', 'type_menu', 'jumlahPosts', 'jumlahPages'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Delete User Successfully');
    }
}
