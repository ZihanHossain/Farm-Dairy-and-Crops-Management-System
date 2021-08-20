<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Login_info;

use App\Models\Login_detail;

use DateTime;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function verify(Request $request)
    {


        // $validated = $request->validate([
        //              'uname'=>'required',
        //              'password'=>'required|min:8',
        // ]);


        //return view('crop_worker.dashboard');

        $login = Login_info::where('user_name', $request->username)
            ->where('password', $request->password)
            ->first();

        if ($login) {
            // $request->session()->put('u_id', $user['u_id']);
            // $request->session()->put('name', $user['name']);
            // $request->session()->put('type', $user['type']);
            // $request->session()->put('image', $user['image']);
            $user = User::where('u_id', $login['u_id'])
                ->first();

            $cows = Cow::all();

            foreach ($cows as $cow) {
                $dob = new DateTime($cow['date_of_birth']);
                $now = new DateTime();
                $diff = $now->diff($dob);
                if ($diff->y < 1) {
                    $diff->y = 1;
                }
                // echo $diff->y;
                $cow['price'] = $cow['base_price'] * ($diff->y);
                $cow->save();
            }

            if ($user->type == 'customer') {

                return response()->json($user, 200);
                // return redirect('/customer');
            }
            if ($user->type == 'manager') {
                return response()->json($user, 200);
            }
            if ($user->type == 'worker') {
                $log = Login_detail::insert(['u_id' => $user['u_id'], 'login_time' => date("h:i:s")]);
                return response()->json([$log, $user], 200);
            }
            // if ($user->type == 'dairy') {

            //     $log = Login_detail::insert(['u_id' => $user['u_id'], 'login_time' => date("h:i:s")]);

            //     return response()->json($user, 200);
            // }
        } else {

            return response()->json('error', 200);
            // return redirect('/login');
        }
    }

    public function socialLogin(Request $req)
    {
        if (($user = User::where('email', $req->email))) {
            $user = User::where('email', $req->email)->first();
            return response()->json($user, 200);
        } else {
            $user = new User();

            $user->name = $req->name;
            $user->email = $req->email;
            $user->type = "customer";

            $user->save();

            $user = User::where('email', $req->email);

            $login = new Login_info();

            $login->u_id = $user->u_id;
            $login->user_name = $req->email;
            $login->password = $req->email;

            $login->save();

            return response()->json($user, 200);
        }
    }


    public function signdex2(Request $request)
    {

        $results = User::all();

        return redirect('login');
    }
}