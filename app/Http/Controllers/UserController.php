<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method untuk menampilkan daftar pengguna
    public function index()
    {
        // Ambil semua data user dari database
        $users = User::all();
        $title = "Daftar Pengguna";
        // Kirim data user ke view 'users.index'
        return view('data.users', compact('users', 'title'));
    }

    public function show($id)
    {
        // Ambil data user berdasarkan ID
        $user = User::findOrFail($id);

        // Tampilkan halaman detail user
        return view('data.users', compact('user'));
    }
}
