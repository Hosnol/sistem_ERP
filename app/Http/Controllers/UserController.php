<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $request->validate([
            'id_karyawan' => 'required|string|unique:users,id_karyawan',
            'nama' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'role' => 'required'
        ]);

        $user = User::create([
            'id_karyawan' => $request->input('id_karyawan'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);

        return response()->json([
            'user' => $user,
            'message' => 'Menambah user sukses'
        ], 201);
    }
}
