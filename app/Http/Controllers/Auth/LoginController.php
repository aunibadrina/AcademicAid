<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/auth/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'tutor') {
            if ($user->is_approved) {
                // Redirect tutors with approved accounts to DashboardT
                return redirect()->route('Tutor.index');
            } else {
                // Tutor account is not approved, redirect to not-approved page
                auth()->logout();
                return redirect('/tutor-not-approved')->with('warning', 'Your tutor account is awaiting approval.');
            }
        }

        // Redirect other roles to their respective pages
        return redirect()->intended($this->redirectPath());
    }

    // app/Http/Controllers/Auth/LoginController.php

    public function showTutorNotApproved()
    {
        return view('auth.tutor-not-approved');
    }

}
