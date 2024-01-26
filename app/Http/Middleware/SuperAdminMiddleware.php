<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperAdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and is a super admin
        if (auth()->check() && auth()->user()->isSuperAdmin) {
            return $next($request);
        }

        // Redirect to the user dashboard if not a super admin
        return redirect()->route('user.dashboard'); // Adjust the route name if necessary
    }
}
