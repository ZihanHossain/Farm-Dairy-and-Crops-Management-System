<?php

namespace App\Http\Controllers;

use App\Models\Login_info;
use App\Models\User;
use Illuminate\Http\Request;

class Admin_ProfileController extends Controller
{
    function index(Request $req)
    {
        $user = User::where('u_id', $req->session()->get('u_id'))
            ->first();
        
        $login_info = Login_info::where('u_id', $req->session()->get('u_id'))
            ->first();

        return view('home_farm_manager.profile')
            ->with('user', $user)
            ->with('login_info', $login_info);
    }

    function edit_profile(Request $req)
    {
        $validated = $req->validate([
            'name'=>'required',
            'user_name'=>'required',
            'password'=>'required|min:8',
            'email'=>'required|email',
        ]);

        $user = User::where('u_id', $req->session()->get('u_id'))
            ->first();
        if($req->hasFile('image'))
        {
            $image = $req->file('image');
            if(file_exists('images/manager_profile_picture/'.$user['image']))
            {
                unlink('images/manager_profile_picture/'.$user['image']);
            }
            $image->move('images/manager_profile_picture', $image->getClientOriginalName());
            $user->image = $image->getClientOriginalName();
            $req->session()->put('image', $image->getClientOriginalName());
        }

        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();
        $req->session()->put('name', $req->name);

        return redirect('/home/profile');
    }
}
