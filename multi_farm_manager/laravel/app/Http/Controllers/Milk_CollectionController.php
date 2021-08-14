<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\Cow_feed;
use App\Models\Feed;
use App\Models\Item;
use App\Models\Milking_history;
use App\Models\Vaccinated;
use Illuminate\Http\Request;

class Milk_CollectionController extends Controller
{
    function index()
    {

        $today_milking_amount = [];
        $total_milking_amount = [];

        $cows = Cow::all();

        foreach ($cows as $cow) {
            $milkinng_history_today = Milking_history::where('co_id', $cow['co_id'])
                ->where('date', date("Y-m-d"))
                ->first();
            array_push($today_milking_amount, $milkinng_history_today['liter_amount']);

            $milkinng_history = Milking_history::where('co_id', $cow['co_id'])
                ->get();

            $total_amount = 0;
            foreach ($milkinng_history as $history) {
                $total_amount += $history['liter_amount'];
            }
            array_push($total_milking_amount, $total_amount);
        }

        return response()->json([$cows, $today_milking_amount, $total_milking_amount], 200);

        // return view('home_farm_manager.milk_collection')
        //         ->with('cows', $cows)
        //         ->with('today_milking_amount', $today_milking_amount)
        //         ->with('total_milking_amount', $total_milking_amount);
    }

    function details(Request $req, $co_id)
    {

        $milkinng_historys = Milking_history::where('co_id', $co_id)
            ->get();

        $feeds = Feed::where('co_id', $co_id)
            ->get();

        $cow = Cow::where('co_id', $co_id)
            ->first();

        $vaccinated = Vaccinated::where('co_id', $co_id)
            ->first();

        $feeds = Feed::where('co_id', $co_id)
            ->get();
        $total_feed_price = 0;
        foreach ($feeds as $feed) {
            $cow_feed = Cow_feed::where('cf_id', $feed['cf_id'])
                ->first();
            $total_feed_price += $feed['amount'] * $cow_feed['price'];
        }

        $item = Item::where('name', 'Milk')
            ->first();
        $total_milk_price = $cow['milk'] * $item['price'];

        return view('home_farm_manager.cow_milking_details')->with('milking_historys', $milkinng_historys)
            ->with('feeds', $feeds)
            ->with('cow', $cow)
            ->with('vaccinated', $vaccinated)
            ->with('total_feed_price', $total_feed_price)
            ->with('total_milk_price', $total_milk_price);
    }

    function add_comment(Request $req, $co_id)
    {
        $cow = Cow::where('co_id', $co_id)
            ->first();

        $cow->comment = $req->comment;
        $cow->save();

        return redirect('/home/milk_collection');
    }
}