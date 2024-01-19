<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutoringsession;

class SessionController extends Controller
{
    public function index(){
        $tutoringsession = tutoringsession::all();
        return view('sessions.index', ['tutoringsession' => $tutoringsession]);
    }

    public function createS(){
        return view('sessions.createS');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'time' => 'required ',
            'email' => 'required'

        ]);

        $newtutoringsession= tutoringsession::create($data);

        return redirect(route('admin.home'));
    }

    public function edit(tutoringsession $session ){
        return view('sessions.edit', ['session' => $session]);
    }

    public function update(tutoringsession $session, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'time' => 'required ',
            'email' => 'required'

        ]);

        $session->update($data);

        return redirect(route('admin.home'))->with('success', 'Session Updated Succesfully');
    }

    public function destroy(tutoringsession $session ){
        $session->delete();
        return redirect(route('admin.home'))->with('success', 'Session Deleted Succesfully');
    }

}
