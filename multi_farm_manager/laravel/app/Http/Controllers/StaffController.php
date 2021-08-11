<?php

namespace App\Http\Controllers;

use App\Models\Login_info;
use App\Models\Shift_details;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    function index()
    {
        $users = $user = User::where('type', 'dairy')
            ->get();

        $shift_details = Shift_details::all();

        return response()->json($users, 200);
        // echo count($users);
        // return view('home_farm_manager.staff')
        //     ->with('users', $users)
        //     ->with('shift_details', $shift_details);
    }

    function register_staff(Request $req)
    {
        // $validated = $req->validate([
        //     'name' => 'required',
        //     'user_name' => 'required',
        //     'password' => 'required|min:8',
        //     'email' => 'required|min:8|email',
        //     'salary' => 'integer',
        //     'gender' => 'required',
        //     'type' => 'required',
        //     'shift_id' => 'required',
        // ]);

        // if ($req->hasFile('image')) {
        //     $image = $req->file('image');

        //     $image->move('images/staff_profile_picture', $image->getClientOriginalName());
        // }

        $user = new User();

        $user->name = $req->name;
        $user->email = $req->email;
        $user->type = $req->type;
        $user->gender = $req->gender;
        $user->salary = (int)$req->salary;
        $user->sh_id = (int)$req->shift_id;
        // $user->image = $image->getClientOriginalName();
        $user->save();

        $user = User::where('email', $req->email)
            ->first();

        $login_info = new Login_info();

        $login_info->u_id = $user->u_id;
        $login_info->user_name = $req->username;
        $login_info->password = $req->password;

        $login_info->save();

        return response()->json("success", 200);

        // return redirect('home/dairyfarm/staff');
    }

    function edit_staff(Request $req, $u_id)
    {

        // $validated = $req->validate([
        //     'name' => 'required',
        //     'user_name' => 'required',
        //     'password' => 'required|min:8',
        //     'email' => 'required|min:8|email',
        //     'salary' => 'integer',
        //     'gender' => 'required',
        //     'type' => 'required',
        //     'sh_id' => 'required',
        // ]);

        $user = User::find($u_id);

        // if (file_exists('images/staff_profile_picture' . $req->image)) {
        // } else {
        //     if ($req->hasFile('image')) {
        //         $image = $req->file('image');

        //         $user->image = $image->getClientOriginalName();
        //         $image->move('images/staff_profile_picture', $image->getClientOriginalName());
        //     }
        // }



        // $user->u_id = $u_id;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->type = $req->type;
        $user->gender = $req->gender;
        $user->salary = (int)$req->salary;
        $user->sh_id = (int)$req->shift_id;

        $user->save();

        $login_info = Login_info::find($u_id);

        $login_info->user_name = $req->username;
        $login_info->password = $req->password;

        $login_info->save();

        return response()->json('success', 200);
        // return redirect('home/dairyfarm/staff');
    }

    function get_shift_details()
    {
        $shift_details = Shift_details::all();

        return response()->json($shift_details, 200);
    }

    function staff_details($u_id)
    {
        $user = User::where('u_id', $u_id)
            ->get();
        $login_info = Login_info::where('u_id', $u_id)
            ->get();
        $shift_details = Shift_details::all();

        // echo count($user);

        return response()->json([$user, $login_info, $shift_details], 200);

        // return view('home_farm_manager.edit_staff')->with('user', $user[0])
        //     ->with('login_info', $login_info[0])
        //     ->with('shift_details', $shift_details);
    }

    function delete_staff(Request $req, $u_id)
    {
        $user = User::find($u_id);
        $login_info = Login_info::find($u_id);
        // unlink('images/staff_profile_picture/' . $user['image']);

        $user->delete();
        $login_info->delete();

        return response()->json('success', 200);
    }
}