<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ProducedItem;
use App\Models\Cart;
use Illuminate\Http\Request;

class DairiesController extends Controller
{
    public function index()
    {
        $item = Item::where('farm', 'dairy')
        ->get();
        $p_item = ProducedItem::where('i_id', 1)
        ->get();
		
		return response()->json($item, 200);

        /*return view('customer.dairyIndex')->with('items', $item)
                                        ->with('pItems', $p_item);
		*/
    }

    public function details(Request $req, $i_id)
    {
        $p_item = ProducedItem::find($i_id)->first();
		
		return response()->json($p_item, 200);

        /*return view('customer.dairyDetails')
                    ->with('item', $item)
                    ->with('pItem', $p_item);*/
    }
}
