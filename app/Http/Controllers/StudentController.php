<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $tutoringsession = DB::table('tutoringsession')->get();
        
        return view('student.index',[
            'tutoringsession' => $tutoringsession,
        ]);
    }
}
