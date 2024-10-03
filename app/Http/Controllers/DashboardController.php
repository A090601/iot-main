<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        // Ambil data terbaru dari login user
        $latestLogin = User::orderBy('created_at', 'desc')->take(5)->get();

        // Kirim data ke view
        return view('dashboard', compact('title', 'latestLogin'));
    }
}
