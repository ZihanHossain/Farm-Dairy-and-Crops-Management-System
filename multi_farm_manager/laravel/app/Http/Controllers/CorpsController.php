<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ProducedItem;

class CorpsController extends Controller
{
    public function index()
    {
        $item = Item::where('farm', 'crops')
        ->get();
        $p_item = ProducedItem::where('i_id', 2)
        ->get();
		
		return response()->json($item, 200);

        
		/*return view('customer.corpsIndex')->with('items', $item)
                                        ->with('pItems', $p_item);
		*/
    }
}
