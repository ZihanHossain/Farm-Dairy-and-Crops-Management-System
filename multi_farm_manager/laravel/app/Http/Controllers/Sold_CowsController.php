<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\Sold_cow;
use App\Models\User;
use Illuminate\Http\Request;

class Sold_CowsController extends Controller
{
    function index()
    {

        $cow_info = [];
        $manager_info = [];
        $sold_cows = Sold_cow::all();

        foreach($sold_cows as $sold_cow)
        {
            $cow = Cow::where('co_id', $sold_cow['co_id'])->first();

            array_push($cow_info, $cow['image']);

            $manager = User::where('u_id', $sold_cow['u_id'])->first();

            array_push($manager_info, $manager['name']);
        }

        return view('home_farm_manager.sold_cows_details')
            ->with('sold_cows', $sold_cows)
            ->with('cow_info', $cow_info)
            ->with('manager_info', $manager_info);
    }
}
