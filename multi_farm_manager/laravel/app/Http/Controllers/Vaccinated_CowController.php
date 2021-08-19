<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\User;
use App\Models\Vaccinated;
use Illuminate\Http\Request;

class Vaccinated_CowController extends Controller
{
    function index()
    {

        $cows_info = [];
        // $dates = [];
        $cows = Cow::all();

        // foreach($cows as $cow)
        // {
        //     $info = [];
        //     $vaccinated_cow = Vaccinated::where('co_id', $cow['co_id'])
        //         ->first();

        //     array_push($info, [$cow, $vaccinated_cow]);
        //     array_push($cows_info, $info);
        // }

        return response()->json($cows, 200);
        // return view('home_farm_manager.vaccinated_cow_info')->with('cows', $cows_info);
    }

    function vaccination($co_id)
    {
        $vaccinated_cow = Vaccinated::where('co_id', $co_id)
            ->first();
        $user1 = User::where('u_id', $vaccinated_cow['vacc1_u_id'])
            ->first();
        $user2 = User::where('u_id', $vaccinated_cow['vacc2_u_id'])
            ->first();

        return response()->json([$vaccinated_cow, $user1, $user2], 200);
    }

    function vaccinate_done2(Request $req)
    {
        $vaccinated_cow = Vaccinated::where('co_id', $req->co_id)
            ->first();
        // $user = User::where('u_id', $req->u_id)
        //     ->first();

        $vaccinated_cow->co_id = (int)$req->co_id;
        $vaccinated_cow->vacc2_date = date("Y-m-d");
        $vaccinated_cow->vacc2_u_id = $req->u_id;

        $vaccinated_cow->save();

        return response()->json('success', 200);
        // return redirect('/home/vaccinated_cow_info');
    }

    function vaccinate_undone($co_id)
    {
        $vaccinated_cow = Vaccinated::where('co_id', $co_id)
            ->delete();

        return redirect('/home/vaccinated_cow_info');
    }
}