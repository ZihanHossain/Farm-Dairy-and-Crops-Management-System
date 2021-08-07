<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ViewCropDetailsController extends Controller
{
    public function index(){

        $detail = Item::all();
        return view('crop_worker.view_cropdetails')->with('Details', $detail);
    }
}
