<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/users/user-dashboard';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:50', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'numeric', 'digits:11'], // Ensure it contains 11 numeric digits
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'birthday' => ['required', 'date', 'before_or_equal:'.now()->subYears(13)->format('Y-m-d')], // Minimum age of 13
            'gender' => ['required', 'in:Male,Female,Other'],
        ]);
    }
    


 // Define the method to show the registration form
 public function viewRegistrationForm()
 {
     return view('auth.register'); // Replace with the actual view name
 }


protected function create(array $data)
{
    return User::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'username' => $data['username'], // Include the username field
        'email' => $data['email'],
        'phone_number' => $data['phone_number'],
        'password' => Hash::make($data['password']),
        'birthday' => $data['birthday'], // Add the birthday field
        'gender' => $data['gender'], // Add the gender field
    ]);
}



    protected function registered(Request $request, $user)
    {
        // Handle any additional logic after successful registration, if needed
        return redirect()->route('users.user-dashboard');
    }
}

