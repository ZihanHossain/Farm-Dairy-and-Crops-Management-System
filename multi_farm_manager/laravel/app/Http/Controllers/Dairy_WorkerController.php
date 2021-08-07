<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dairy_WorkerController extends Controller
{
    public function dashboard(){
        return view('dairy_worker.dashboard');
    }
    
}
