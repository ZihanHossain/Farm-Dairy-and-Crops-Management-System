<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Crop_WorkerController extends Controller
{
    public function dashboard(){
        return view('crop_worker.dashboard');
    }
}
