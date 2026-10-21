<?php

namespace App\Http\Controllers;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('landing.Home');
    }
}
