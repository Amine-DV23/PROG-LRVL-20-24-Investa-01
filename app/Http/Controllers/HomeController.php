<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // صفحة البداية
    public function index()
    {
        return view('index');
    }

}
