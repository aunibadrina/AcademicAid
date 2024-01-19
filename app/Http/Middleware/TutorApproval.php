<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TutorApproval
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'tutor' && !Auth::user()->is_approved) {
            // Redirect or display a message as per your requirement
            return redirect('/tutor-not-approved')->with('warning', 'Your tutor account is awaiting approval.');
        }

        return $next($request);
    }
}
