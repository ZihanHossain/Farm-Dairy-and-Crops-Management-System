<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerIndex()
    {
        return view('customer.customerIndex');
    }
}
