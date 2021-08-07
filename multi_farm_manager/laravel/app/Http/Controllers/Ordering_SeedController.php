<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordering_item;

class Ordering_SeedController extends Controller
{
    public function index(){


        $order = Ordering_item::all();
        return view('crop_worker.ordering_seed')->with('OrderingItem', $order);
    }

    public function order(Request $request){

        $validated = $request->validate([
            'items'=>'required',
            'quantity'=>'required',
        ]);

        $order1 = Ordering_item::where('items', $request->items)
                                ->select('quantity')                        
                                ->first()->quantity;
                        
        
        $n = $order1 - (int)($request->quantity);
        Ordering_item::where('items', $request->items)
                            ->update(['quantity'=> $n]);
        
        $order = Ordering_item::all();
        return view('crop_worker.ordering_seed')->with('OrderingItem', $order);
    }
}

