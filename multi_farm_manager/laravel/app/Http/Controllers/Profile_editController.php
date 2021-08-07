<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class Profile_editController extends Controller
{
    public function edit(){
        return view('crop_worker.profile_edit');
    }

    public function update(Request $request){

        $validated = $request->validate([
            'name'=>'required',
            'email'=>'required|min:8',
        ]);

        $id = session('u_id');
        
        User::where('u_id',$id)
            ->update(['name'=>$request->name, 'email'=>$request->email]);
        return redirect('/edit/profile');
    
    }
}
