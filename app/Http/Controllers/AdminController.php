<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function showTutorApplications()
    {
        $tutorApplications = User::where('role', 'tutor')->where('is_approved', false)->get();
        return view('admin.applications', compact('tutorApplications'));
    }

    public function approveTutor($id)
    {
        $tutor = User::find($id);
        $tutor->is_approved = true;
        $tutor->save();

        return redirect()->back()->with('success', 'Tutor approved successfully.');
    }
}
