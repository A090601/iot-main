<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintDataController extends Controller
{
    public function index()
    {
        $title = "Cetak Data";
        return view('data.print', compact('title'));
    }
}
