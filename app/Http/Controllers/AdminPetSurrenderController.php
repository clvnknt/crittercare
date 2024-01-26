<?php

namespace App\Http\Controllers;
use App\Models\PetSurrender;


use Illuminate\Http\Request;

class AdminPetSurrenderController extends Controller
{
    public function viewPetSurrenders()
    {
        $petSurrenders = PetSurrender::with('user')->get();

    return view('admins.pet-surrendering.view', compact('petSurrenders'));
}

    public function show(PetSurrender $petSurrender)
    {
    // Fetch the pet surrender details and any other necessary data
    // Return a view to display the details, passing the data to the view
    return view('admins.pet-surrendering.show', compact('petSurrender'));
    }

    public function approve(Request $request, PetSurrender $petSurrender)
    {
        // Add logic to approve the pet surrender request
        $petSurrender->update(['status' => 'approved']);
    
        // Redirect back to the view page with a success message
        return redirect()->route('admins.pet-surrenders.view')->with('success', 'Pet surrender request approved successfully.');
    }
    
    public function reject(Request $request, PetSurrender $petSurrender)
    {
        // Add logic to reject the pet surrender request
        $petSurrender->update(['status' => 'rejected']);
    
        // Redirect back to the view page with a success message
        return redirect()->route('admins.pet-surrenders.view')->with('success', 'Pet surrender request rejected successfully.');
    }
    

}
