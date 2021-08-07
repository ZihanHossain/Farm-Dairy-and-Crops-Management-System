<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ProducedItem;
use App\Models\Cart;

class CropsController extends Controller
{
    public function details(Request $req, $i_id)
    {
        $item = Item::find($i_id);
        $p_item = ProducedItem::find($i_id);

        return view('customer.cropsDetails')
                    ->with('item', $item)
                    ->with('pItem', $p_item);
    }
}
