<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = ['nama' => "Aulia", 'foto' => 'avatar2.png'];
        return view('dashboard', Compact('data'));

    }
}
