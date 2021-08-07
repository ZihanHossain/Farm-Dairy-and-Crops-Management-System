<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\New_born;
use App\Models\Permanent_cow;
use Illuminate\Http\Request;

class New_Born_CowController extends Controller
{
    function index()
    {

        $new_borns = New_born::all();
        $cows = [];

        foreach($new_borns as $new_born)
        {
            $cow = Cow::where('co_id', $new_born['co_id'])
                ->first();
            array_push($cows, $cow);
        }
        

        return view('home_farm_manager.new_born_cow')
            ->with('cows', $cows);
    }

    function add_cow($co_id)
    {
        $new_born = New_born::where('co_id', $co_id)->delete();

        $permanent_cow = new Permanent_cow();

        $permanent_cow->co_id = $co_id;
        $permanent_cow->save();

        return redirect('/home/new_born_cow');
    }
}
