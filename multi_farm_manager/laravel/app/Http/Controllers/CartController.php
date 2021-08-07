<?php

namespace App\Http\Controllers;

use App\Models\Cart;
Use App\Models\Item;
Use App\Models\ProducedItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $req, $i_id)
    {
        $item = Item::find($i_id);
        $p_item = ProducedItem::find($i_id);
        
        $cart = new Cart();
        $cart->i_id = $item['i_id'];
        $cart->i_name = $item['name'];
        $cart->i_price = $item['price'];
        $cart->amount = $req->amount;
        $cart->save();
        return redirect('/customer/crops/cart');
    }
    public function cartView()
    {
        $cart_items = Cart::select('i_id','i_name','i_price','amount')->get();
        return view('customer.cart')->with('cart_items', $cart_items);
    }

    public function delete(Request $req, $i_id)
    {
        $cart_item = Cart::find($i_id)->delete();

        return redirect('/customer/dairies/cart');
    }

    public function cropIndex(Request $req, $i_id)
    {
        $item = Item::find($i_id);
        $p_item = ProducedItem::find($i_id);
        
        $cart = new Cart();
        $cart->i_id = $i_id;
        $cart->i_name = $item['name'];
        $cart->i_price = $item['price'];
        $cart->amount = $p_item['amount'];
        $cart->save();
        
        return redirect('/customer/crops/cart');
    }

    


}
