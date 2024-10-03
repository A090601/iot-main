<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $title = "Role User";
        return view('data.role', compact('title'));
    }
}
