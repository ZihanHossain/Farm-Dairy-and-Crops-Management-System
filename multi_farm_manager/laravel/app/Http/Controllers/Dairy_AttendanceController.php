<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login_detail;

class Dairy_AttendanceController extends Controller
{
    

    public function index(){

        $detail=Login_detail::all();
        // return view ('dairy_worker.attendance')->with('loginDetails', $detail);  
        return response()->json($detail,200);                  
        $user=Login_detail::all();
        // return view ('dairy_worker.attendance')->with('Login_Details', $user);  
        return response()->json([$user],200);                  
    }
}

