<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    // Account settings page
    public function accountSettings()
    {
        // Get the authenticated user
        $user = Auth::user();

        return view('users.user-details.account-settings', compact('user'));
    }

public function editAccountDetails()
{
    $user = Auth::user();

    return view('users.user-details.edit-account-details', compact('user'));
}

public function updateAccountDetails(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
        'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        'phone_number' => ['required', 'numeric', 'digits:11'], // Ensure it contains 11 numeric digits
        'birthday' => ['nullable', 'date', 'before_or_equal:' . now()->subYears(13)->format('Y-m-d')],
        'gender' => ['required', 'in:Male,Female,Other'],
    ]);

    $user->update([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'phone_number' => $request->input('phone_number'),
        'birthday' => $request->input('birthday'),
        'gender' => $request->input('gender'),
    ]);

    return redirect()->route('users.account-settings')->with('success', 'Account details updated successfully.');
}

public function viewChangePasswordForm()
    {
        return view('users.user-details.change-password');
    }

    // Handle changing the password
    public function changePassword(Request $request)
    {
    // Validate the input
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Check if the current password is correct
    if (!Hash::check($request->current_password, $user->password)) {
        return redirect()->route('users.change-password.form')->with('error', 'Current password is incorrect.');
    }

    // Update the user's password
    $user->update([
        'password' => Hash::make($request->new_password),
    ]);

    return redirect()->route('users.account-settings')->with('success', 'Password changed successfully.');
    }

    //Change Valid ID
    public function changeValidId(Request $request)
    {
    $user = Auth::user();

    // Validate the uploaded file
    $request->validate([
        'valid_id' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size as needed
    ]);

    // Store the new valid ID file
    if ($request->hasFile('valid_id')) {
        $validIdPath = $request->file('valid_id')->store('public/valid-ids');
        $user->additionalDetails->update([
            'valid_id' => $validIdPath,
        ]);
    }

    return redirect()->route('users.account-settings')->with('success', 'Valid ID updated successfully.');
    }


}
