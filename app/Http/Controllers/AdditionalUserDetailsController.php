<?php

namespace App\Http\Controllers;

use App\Models\AdditionalUserDetails;
use Illuminate\Http\Request;

class AdditionalUserDetailsController extends Controller
{
    public function create()
{
    $user = auth()->user();

    if ($user->additionalDetails) {
        return redirect()->route('users.account-settings')->with('error', 'Additional details have already been added.');
    }

    return view('users.user-details.add-additional-details');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'province' => 'required|string',
        'city' => 'required|string',
        'postal_code' => 'required|string',
        'street' => 'required|string',
        'citizenship' => 'required|string',
        'occupation' => 'required|string',
        'spouse' => 'nullable|string',
        'children_names' => 'nullable|string',
        'current_household_pets' => 'required|string',
        'visit_veterinarian' => 'required|boolean',
        'valid_id' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:25600',
    ]);

    // Handle valid ID picture upload if provided
    if ($request->hasFile('valid_id')) {
        // Store the uploaded valid ID picture in the public storage under the 'media/valid-ids' directory
        $validIdPicturePath = $request->file('valid_id')->store('media/valid-ids', 'public');

        // Create the additional details record, including the valid ID picture path
        $user = auth()->user();
        $additionalDetails = new AdditionalUserDetails(array_merge($validatedData, ['valid_id' => $validIdPicturePath]));
        $user->additionalDetails()->save($additionalDetails);
    } else {
        // Create the additional details record without a valid ID picture
        $user = auth()->user();
        $additionalDetails = new AdditionalUserDetails($validatedData);
        $user->additionalDetails()->save($additionalDetails);
    }

    return redirect()->route('users.account-settings')->with('success', 'Additional details added successfully.');
}

public function edit()
{
    $user = auth()->user();

    if (!$user->additionalDetails) {
        return redirect()->route('users.add-additional-details');
    }

    return view('users.user-details.edit-additional-details', ['user' => $user]);
}

public function update(Request $request)
{
    $user = auth()->user();

    if (!$user->additionalDetails) {
        return redirect()->route('users.add-additional-details');
    }

    // Validation rules for the additional details fields during update
    $validatedData = $request->validate([
        'province' => 'nullable|string',
        'city' => 'nullable|string',
        'citizenship' => 'nullable|string',
        'postal_code' => 'required|string',
        'street' => 'required|string',
        'occupation' => 'required|string',
        'spouse' => 'nullable|string',
        'children_names' => 'nullable|string',
        'current_household_pets' => 'required|string',
        'visit_veterinarian' => 'required|boolean',
        'valid_id' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:25600',
    ]);

    // Handle valid ID picture update if provided
    if ($request->hasFile('valid_id')) {
        // Validate and store the uploaded valid ID picture in the public storage under the 'media/valid-ids' directory
        $validatedData['valid_id'] = $request->file('valid_id')->store('media/valid-ids', 'public');
    }

    // Update the additional details
    $user->additionalDetails->update($validatedData);

    return redirect()->route('users.account-settings')->with('success', 'Additional details updated successfully.');
}
}