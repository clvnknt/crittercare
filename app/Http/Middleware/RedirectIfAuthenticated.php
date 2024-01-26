<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // If an authenticated user tries to access the login or register page,
                // redirect them to the user dashboard instead of /home.
                if ($request->is('login', 'register')) {
                    return redirect()->route('users.user-dashboard');
                }
                
                return redirect(route('home'));
            }
        }

        return $next($request);
    }
}
