<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\Vaccinated;
use Illuminate\Http\Request;

class Vaccinated_CowController extends Controller
{
    function index()
    {

        $cows_info = [];
        // $dates = [];
        $cows = Cow::all();

        foreach($cows as $cow)
        {
            $info = [];
            $vaccinated_cow = Vaccinated::where('co_id', $cow['co_id'])
                ->first();
            
            array_push($info, [$cow, $vaccinated_cow]);
            array_push($cows_info, $info);
        }

        return view('home_farm_manager.vaccinated_cow_info')->with('cows', $cows_info);
    }

    function vaccinate_done($co_id)
    {
        $vaccinated_cow = new Vaccinated();

        $vaccinated_cow->co_id = $co_id;
        $vaccinated_cow->date = date("Y-m-d");

        $vaccinated_cow->save();

        return redirect('/home/vaccinated_cow_info');
    }

    function vaccinate_undone($co_id)
    {
        $vaccinated_cow = Vaccinated::where('co_id', $co_id)
            ->delete();

        return redirect('/home/vaccinated_cow_info');
    }
}
