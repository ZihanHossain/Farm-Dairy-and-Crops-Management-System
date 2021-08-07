<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Login_info;

class EditProfileController extends Controller
{
    function index(Request $req)
    {
        $login = Login_info::where('user_name', $req->session()->get('name'))->first();
        $user = User::where('u_id', $req->session()->get('u_id'))->first();

        return view('customer.profileEdit')
                ->with('login', $login)
                ->with('user', $user);
    }

    public function modify(Request $req)
    {
        $user = User::where('u_id', $req->session()->get('u_id'))
            ->first();
        $login = Login_info::where('u_id', $req->session()->get('u_id'))
            ->first();


        $user->name = $req->name;
        $user->email = $req->email;
        $user->gender = $req->gender;
        $user->save();
        //$req->session()->put('name', $req->name);

        return redirect('/customer/profile/edit');
    }
}
