<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'email';
    }

    public function viewLoginForm()
    {
        return view('auth.login');
    }

    protected function attemptLogin(Request $request)
    {
        $field = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return $this->guard()->attempt(
            [$field => $request->input('email'), 'password' => $request->input('password')],
            $request->filled('remember')
        );
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->isAdmin) {
            if ($user->isSuperAdmin) {
                return redirect()->route('super-admins.dashboard');
            } else {
                return redirect()->route('admins.admin-dashboard');
            }
        } else {
            return redirect()->route('users.user-dashboard');
        }
    }

    // Override the default loggedOut method for custom logout redirection
    protected function loggedOut(Request $request)
    {
        return redirect('/'); // Redirect to the landing page after logout
    }
}





