<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email|unique:users,user_email',
            'user_fullname' => 'required',
            'password' => 'required|min:6',
        ]);

        User::create([
            'user_email' => $request->user_email,
            'user_fullname' => $request->user_fullname,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        $request->validate([
            // 'user_email' => 'required|email|unique:users,user_email,' . $user_id,
            'user_email' => 'required|email|unique:users,user_email,' . $user_id . ',user_id',
            'user_fullname' => 'required',
        ]);

        $user = User::findOrFail($user_id);
        $user->update([
            'user_email' => $request->user_email,
            'user_fullname' => $request->user_fullname,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        return redirect()->route('users.index')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function destroy($user_id)
    {
        User::findOrFail($user_id)->delete();
        return redirect()->route('users.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}

