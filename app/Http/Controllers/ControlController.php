<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlController extends Controller
{
    // Metode index untuk menampilkan daftar kontrol
    public function index()
    {
        $title = "Control Device";
        // Logika untuk mengambil data kontrol perangkat
        // Misalnya, bisa mengambil data dari model dan mengembalikannya ke view

        return view('data.control', compact('title')); // Pastikan ada view yang sesuai
    }
}
