<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Item;

class Selling_CropController extends Controller
{
    public function index(){

        $add = Item::all();
        return view('crop_worker.selling_crop')->with('addItem', $add);
    } 

    public function add(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'price'=>'required',
            'farm'=>'required',
        ]);

        $add = new Item;

        $add->name = $request->name;
        $add->price = $request->price;
        $add->farm = $request->farm;

        $add->save();

        return redirect('/selling/crop');
    }

    public function delete($i_id){

        Item::find($i_id)->delete();
        return redirect('/selling/crop');
    }
}
