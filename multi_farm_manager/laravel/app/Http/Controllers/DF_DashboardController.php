<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\Milking_history;
use App\Models\New_born;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class DF_DashboardController extends Controller
{
    function index()
    {

        $userss = User::where('type', ['dairy', 'crop'])
            ->get();

        $cowss = Cow::all();
        $new_born_cowss = New_born::all();
        $total_milking_amount = 0;
        $milking_historys = Milking_history::all();
        foreach ($milking_historys as $milking_history) {
            $total_milking_amount += $milking_history['liter_amount'];
        }

        $users = count($userss);
        $cows = count($cowss);
        $new_born_cows = count($new_born_cowss);
        return response()->json([$users, $cows, $new_born_cows, $total_milking_amount], 200);

        // return view('home_farm_manager.home')
        //     ->with('users', $users)
        //     ->with('new_born_cows', $new_born_cows)
        //     ->with('cows', $cows)
        //     ->with('total_milking_amount', $total_milking_amount);
    }
}