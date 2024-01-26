<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the authenticated user is a super admin
            if (Auth::user()->isSuperAdmin()) {
                return redirect()->route('super-admins.dashboard'); // Redirect to the super admin dashboard
            }
        }

        // Continue with the request for regular users
        return $next($request);
    }
}
