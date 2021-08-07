<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Sold_item;
use Illuminate\Http\Request;

class Sold_Dairy_ItemsController extends Controller
{
    function index()
    {
        $sold_amount_per = [];
        $items = Item::where('farm', "dairy")
        ->get();

        // echo count($items);
        foreach($items as $item)
        {
            $sold_amount = 0;
            $sold_item = Sold_item::where('i_id', $item['i_id'])
            ->where('date', date("Y-m-d"))
                ->get();

            // echo $item['name'];
            // echo count($sold_item);
            foreach($sold_item as $amount)
            {
                $sold_amount += $amount['amount'];
                // echo $sold_amount;
                // echo '<br>';
            } 
            // echo $sold_amount;
            if($sold_item)
            {
                // array_push($sold_items, $sold_item);
                array_push($sold_amount_per, $sold_amount);
            }
        }
        // echo $sold_amount_per[1];

        return view('home_farm_manager.sold_dairy_items')
            ->with('sold_items', $items)
            ->with('sold_amount', $sold_amount_per);
    }
}
