<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    // Metode index untuk menampilkan daftar monitoring
    public function index()
    {
        $title = "Daftar Monitoring";
        // Logika untuk mengambil data monitoring
        // Misalnya, bisa mengambil data dari model dan mengembalikannya ke view
        return view('data.monitoring', compact('title')); // Pastikan ada view yang sesuai
    }
}
