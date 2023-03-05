<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin/users/index', compact('users'));
    }

    public function create()
    {
        return view('admin/users/create');
    }

    // save data in database 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role_as' => ['required', 'integer'],
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_as' => $request->role_as
        ]);
        return redirect('/admin/users')->with('message', 'User Add Successfully');
    }

    public function edit(int $user_id)
    {
        $users = User::findOrFail($user_id);
        return view('admin.users/edit', compact('users'));
    }

    // updata data in database and save a new data
    public function update(Request $request, int $user_id)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'role_as' => ['required', 'integer'],
        ]);
        User::findOrFail($user_id)->update([
            'name' => $request->name,
            'password' => Hash::make($request['password']),
            'role_as' => $request->role_as
        ]);
        return redirect('/admin/users')->with('message', 'User updated Successfully');
    }

    // function use for the deleted
    public function destroy(int $userid)
    {

        $users = User::findOrFail($userid);
        $users->delete();
        return redirect('/admin/users')->with('message', 'User Deleted Successfully');
    }
}
