<?php

namespace App\Http\Controllers;
use App\Models\AdoptionStatus;
use App\Models\AdoptionRequest;


use Illuminate\Http\Request;

class AdoptionRequestsController extends Controller
{
    public function viewAdoptionRequests()
    {
        $user = auth()->user();
        $adoptionRequests = $user->adoptionRequests()->with('pet', 'adoptionStatus')->get();
    
        return view('users.adoptions.adoption-requests', compact('user', 'adoptionRequests'));
    }
    
    public function cancelAdoptionRequest(AdoptionRequest $adoptionRequest)
{
    // Make sure the user owns the adoption request
    if ($adoptionRequest->user_id !== auth()->user()->id) {
        return redirect()->back()->with('error', 'You do not have permission to cancel this adoption request.');
    }

    // Delete the adoption request and related adoption status
    $adoptionRequest->adoptionStatus()->delete();
    $adoptionRequest->delete();

    // Update the pet's status to 'Available for Adoption'
    $adoptionRequest->pet->update(['up_for_adoption' => 'Yes']);

    return redirect()->route('users.adoption-requests')->with('success', 'Adoption request has been cancelled.');
}

public function viewSpecificAdoptionRequest(AdoptionRequest $adoptionRequest)
    {
        // Load the associated pet and adoption status
        $adoptionRequest->load('pet', 'adoptionStatus');

        return view('users.adoptions.view-adoption-requests', compact('adoptionRequest'));
    }
}
