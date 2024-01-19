<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ScheduleSContoller extends Controller
{
    public function schedule(){
        $tutoringsession = DB::table('tutoringsession')->get();
        
        return view('student.schedule',[
            'tutoringsession' => $tutoringsession,
        ]);
    }
}
