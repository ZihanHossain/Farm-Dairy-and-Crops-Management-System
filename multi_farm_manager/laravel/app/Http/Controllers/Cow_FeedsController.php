<?php

namespace App\Http\Controllers;

use App\Models\Cow_feed;
use App\Models\Item;
use Illuminate\Http\Request;

class Cow_FeedsController extends Controller
{
    function index()
    {

        $cow_feeds = Cow_feed::all();

        return view('home_farm_manager.cow_feeds')->with('cow_feeds', $cow_feeds);
    }

    function add_feed(Request $req)
    {
        $validated = $req->validate([
            'name'=>'required',
            'amount'=>'integer|required',
            'price'=>'integer|required',
        ]);

        $cow_feed = new Cow_feed();

        $cow_feed->name = $req->name;
        $cow_feed->quality = $req->quality;
        if($req->amount == null)
        {
            $cow_feed->amount = 0;
        }
        $cow_feed->amount = $req->amount;
        $cow_feed->price = $req->price;

        $cow_feed->save();

        return redirect('/home/cow_feeds');
    }
}
