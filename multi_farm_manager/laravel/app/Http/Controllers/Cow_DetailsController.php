<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\New_born;
use App\Models\Permanent_cow;
use App\Models\Sold_cow;
use Illuminate\Http\Request;

class Cow_DetailsController extends Controller
{
    function index()
    {

        $cows = [];
        $permanent_cows = Permanent_cow::all();

        foreach ($permanent_cows as $permanent_cow) {
            $cow = Cow::where('co_id', $permanent_cow['co_id'])->first();

            array_push($cows, $cow);
        }

        return response()->json($cows, 200);
        // return view('home_farm_manager.cow_info')->with('cows', $cows);
    }

    function add_cow(Request $req)
    {
        // $validated = $req->validate([
        //     'price' => 'required|integer',
        //     'gender' => 'required',
        //     'availability' => 'required',
        //     'date' => 'required',
        //     'image' => 'required',
        // ]);


        $cow = new Cow();
        // if ($req->hasFile('image')) {
        //     $image = $req->file('image');

        //     $image->move('images/cow_picture', $image->getClientOriginalName());
        //     $cow->image = $image->getClientOriginalName();
        // }



        $cow->gender = $req->gender;
        $cow->availability = $req->availability;
        $cow->price = (int)$req->baseprice;
        $cow->date_of_birth = $req->birtdate;

        $cow->milk = 0;

        $cow->save();

        $permanent_cow = new Permanent_cow();
        $permanent_cow->co_id = $cow['co_id'];
        $permanent_cow->save();

        return response()->json('success', 200);
        // return redirect('/home/cow_info');
    }

    function delete_cow($co_id)
    {
        Cow::where('co_id', $co_id)->delete();
        Permanent_cow::where('co_id', $co_id)->delete();

        return response()->json('success', 200);
        // return redirect('/home/cow_info');
    }

    function sell_cow(Request $req, $co_id)
    {
        $cow = Cow::where('co_id', $co_id)->first();

        $cow->availability = 'sold';

        $cow->save();

        $sold_cow = new Sold_cow();
        $sold_cow->co_id = $co_id;
        $sold_cow->date = today();
        $sold_cow->u_id = $req->session()->get('u_id');

        $sold_cow->save();

        return redirect('/home/cow_info');
    }
}