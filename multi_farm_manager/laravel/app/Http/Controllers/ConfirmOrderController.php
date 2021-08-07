<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfirmOrder;
use App\Models\Item;
use App\Models\ProducedItem;
use App\Models\Cart;

class ConfirmOrderController extends Controller
{
    public function confirm(Request $req, $i_id)
    {
        $item = Item::find($i_id);
        $p_item = ProducedItem::find($i_id);

        $confirm = new ConfirmOrder();
        $confirm->pr_id = $i_id;
        $confirm->pr_name = $item['name'];
        $confirm->pr_price = $item['price'];
        $confirm->pr_amount = $p_item['amount'];
        $p_item->amount = $p_item['amount'] - $req->amount;
        $confirm->save();

        $cart = Cart::find($i_id)->delete();
        
        return redirect('/customer/crops/cart');
    }
}
