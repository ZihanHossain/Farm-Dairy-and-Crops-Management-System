<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Login_info;

class CustomerProfileController extends Controller
{
    public function profile(Request $req)
    {
        $login = Login_info::where('u_id', $req->session()->get('u_id'))->first();
        $user = User::where('u_id', $req->session()->get('u_id'))->first();
        
		return response()->json($user, 200);
		
		/*return view('customer.profile')
                ->with('login', $login)
                ->with('user', $user);*/
    }

    public function deleteProfile(Request $req, $u_id)
    {
        $login = Login_info::find($u_id)->delete();
        $user = User::find($u_id)->delete();

        $req->session()->flush();
        return redirect('/login');
    }
}
