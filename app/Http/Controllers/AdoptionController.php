<?php

namespace App\Http\Controllers;

// app/Http/Controllers/AdoptionController.php

use App\Models\AdoptionRequest;
use App\Models\Pet;
use Illuminate\Http\Request;
use App\Models\AdoptionStatus;

class AdoptionController extends Controller
{

    //User Adoption Methods
    public function viewAdoptionForm(Pet $pet)
    {
        return view('users.adoptions.adoption-form', ['pet' => $pet]);
    }

    public function submitAdoptionForm(Request $request, Pet $pet)
{
    // Validate the form submission
    $request->validate([
        'reason' => 'required|string',
        // Add more validation rules as needed
    ]);

    // Update the pet's status to 'Processing'
    $pet->update([
        'up_for_adoption' => 'Processing'
    ]);

    // Create a new adoption request
    $adoptionRequest = new AdoptionRequest([
        'user_id' => auth()->user()->id,
        'pet_id' => $pet->id,
        'reason' => $request->input('reason'),
        // Add more fields to the adoption request as needed
    ]);
    $adoptionRequest->save();

    // Create a new adoption status
    $adoptionStatus = new AdoptionStatus([
        'adoption_request_id' => $adoptionRequest->id,
        'status' => 'pending', // Set the initial status to 'pending'
    ]);
    $adoptionStatus->save();

    // Redirect back with a success message
    return redirect()->route('users.user-dashboard')->with('success', 'Adoption request submitted successfully.');
}

}

