<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Device',
        ];

        return view('data.device', $data);
    }
}
