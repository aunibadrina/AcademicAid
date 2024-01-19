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

    public function schedule(){
        $tutoringsession = DB::table('tutoringsession')->get();
        
        return view('student.schedule',[
            'tutoringsession' => $tutoringsession,
        ]);
    }





    public function showRegistrationForm()
    {
        return view('student.register');
    }

    public function processRegistration(Request $request)
{
    // Add validation as needed
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'dob' => 'required|date',
        'course' => 'required|string',
        // Add more fields as needed
    ]);

    // Create a new student
    $user = new \App\Models\User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->save();

    // Additional fields
    $student = new \App\Models\Student();
    $student->user_id = $user->id; // Assuming there is a relationship between User and Student
    $student->dob = $request->input('dob');
    $student->course = $request->input('course');
    // Add more fields as needed
    $student->save();

    // You can add additional logic like sending a confirmation email

    return redirect('/')->with('success', 'Registration successful. Please log in.');
}

}
