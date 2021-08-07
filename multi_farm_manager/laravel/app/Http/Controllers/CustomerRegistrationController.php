<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Login_info;

class CustomerRegistrationController extends Controller
{
    public function index()
    {
        return view('home.signup_form');
    }

    public function registration(Request $req)
    {
        $user = new User();

        $user->email = $req['email'];
        $user->name = $req['name'];
        $user->type = "customer";
        $user->save();

        $user = User::where('email', $req['email'])
            ->first();

        $login = new Login_info();

        $login->u_id = $user->u_id;
        $login->user_name = $req['uname'];
        $login->password = $req['password'];
        $login->password = $req->password;
        $login->save();
        
        return redirect('/login');
    }
}
