<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index()
    {
        $user = User::paginate(5);

        return view('content.akun.akun', compact('user'));
    }

    public function create()
    {
        return view('content.akun.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required|in:1,2',
        ]);

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->username . '@gmail.com',
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('content.akun.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|unique:users,username,' . $user->id,
            'name' => 'required',
            'password' => 'nullable',
            'role' => 'required|in:1,2',
        ]);

        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->username . '@gmail.com',
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'role_id' => $request->role,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
