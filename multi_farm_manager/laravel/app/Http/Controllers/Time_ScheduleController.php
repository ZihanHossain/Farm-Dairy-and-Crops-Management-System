<?php

namespace App\Http\Controllers;
use App\Models\Season_timing;

use Illuminate\Http\Request;

class Time_ScheduleController extends Controller
{
    public function schedule(){

        $timing = Season_timing::all();
        return view('crop_worker.schedule')->with('seasonTiming', $timing);
    }

    public function process($s_id){
        
        $process = Season_timing::find($s_id);
        //echo $process;
        $process->action = 'Inactive';
        $process->save();

        // $process = Season_timing::where('s_id', $s_id)
        //                         ->update(['i_id'=> 1]);
        //             echo $process;
                
        
        $process = Season_timing::where('s_id',$s_id)
                    ->get();
                    
         return view('crop_worker.to_do_list')->with('OnProcessing', $process);  

    }


}