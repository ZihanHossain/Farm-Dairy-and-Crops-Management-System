<?php

namespace App\Http\Controllers;

use App\Models\Shift_details;
use Illuminate\Http\Request;

class Shift_DetailsController extends Controller
{
    function index()
    {

        $shift_details = Shift_details::all();

        return view('home_farm_manager.shift_details')->with('shift_details', $shift_details);
    }

    function add_shift(Request $req)
    {
        $validated = $req->validate([
            'name'=>'required|max:20',
            'starting_time'=>'required',
            'ending_time'=>'required',
        ]);

        $shift_detail = new Shift_details();

        $shift_detail->shift_name = $req->name;
        $shift_detail->starting_time = $req->starting_time;
        $shift_detail->ending_time = $req->ending_time;
        $shift_detail->save();

        return redirect('/home/shift_details');
    }
}
