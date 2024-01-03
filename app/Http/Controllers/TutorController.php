<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\tutoringsession;

class TutorController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        $tutoringsession = tutoringsession::all();
        
        return view('Tutor.index', [
        'tutoringsession' => $tutoringsession, 'users' => $users,
    ]);
    }

    public function createS(){
        return view('Tutor.createS');
    }
    

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'time' => 'required ',
            'email' => 'required'

        ]);

        $newtutoringsession= tutoringsession::create($data);

        return redirect(route('Tutor.index'));
    }

    public function edit(tutoringsession $dashboardT ){
        return view('Tutor.edit', ['dashboardT' => $dashboardT]);
    }

    public function update(tutoringsession $dashboardT, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'time' => 'required ',
            'email' => 'required'

        ]);

        $dashboardT->update($data);

        return redirect(route('Tutor.index'))->with('success', 'Session Updated Succesfully');
    }

    public function destroy(tutoringsession $dashboardT ){
        $dashboardT->delete();
        return redirect(route('Tutor.index'))->with('success', 'Session Deleted Succesfully');
    }
}
