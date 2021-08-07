<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home_HomeController extends Controller
{
    function index()
    {
        return view('home_farm_manager.home');
    }
}