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




    public function showApplicationForm()
{
    return view('tutor.apply');
}

public function submitApplication(Request $request)
{
   
    
    
    // Add validation as needed
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'resume' => 'required|mimes:pdf|max:2048'
        // Add other fields as needed
    ]);


    // Upload the PDF file
    $resumePath = $request->file('resume')->store('resumes', 'public');

    // Create a new tutor (pending approval)
    $user = new \App\Models\User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->resume_path = $resumePath;
    $user->role = 'tutor';
    $user->save();

    // Additional logic like sending a confirmation email or storing additional tutor information can be added here

    return redirect('/')->with('success', 'Tutor application submitted. Wait for admin approval.');
}

}
