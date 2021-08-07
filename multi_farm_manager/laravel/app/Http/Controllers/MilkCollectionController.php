<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Milking_history;
use Validator;

class MilkCollectionController extends Controller
{
    public function index(){
        $collect = Milking_history::all();
        return view('dairy_worker.milk_collection')->with('milkingHistory', $collect);
    }

    public function insert(Request $request){
        
        $validated = $request->validate([
            'date'=>'required',
            'liter'=>'required',
            'co_id'=>'required'
        ]);

        $collect = new Milking_history;

        $collect->date = $request->date;
        $collect->liter = $request->liter;
        $collect->co_id = $request->co_id;

        $collect->save();

        return redirect('/collect/milk');
    }
}
