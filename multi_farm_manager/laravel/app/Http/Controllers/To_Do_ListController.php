<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class To_Do_ListController extends Controller
{
    public function index(){
        
        $process=null;
        return view('crop_worker.to_do_list')->with('OnProcessing', $process);
    }
}
