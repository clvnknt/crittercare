<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pet;
use App\Models\Adoption;
use App\Models\PetMonitoring;
use Illuminate\Support\Facades\DB;

class UserPetController extends Controller
{
    public function viewAvailablePets(Request $request)
    {
        $selectedType = $request->input('pet-filter', 'all'); // Get the selected pet type from the dropdown; default to 'all' if not provided.
    
        // Retrieve the pets with the "Not Adopted" status
        $availablePetsQuery = Pet::where('up_for_adoption', 'Yes');
    
        // Apply filtering based on the selected pet type
        if ($selectedType !== 'all') {
            $availablePetsQuery->where('type', $selectedType);
        }
    
        // Paginate the results
        $availablePets = $availablePetsQuery->paginate(8);
    
        // Pass the available pets and the selected type to the view
        return view('users.available-pets.index', compact('availablePets', 'selectedType'));
    }
    


    public function view(Pet $pet)
    {
        // Retrieve the pet monitoring status
        $petMonitoringStatus = PetMonitoring::where('pet_id', $pet->id)->value('status');

        if ($petMonitoringStatus === 'Monitoring') {
            // Pet is being monitored, so you can handle this case as needed.
            // You can display a message or redirect the user to another page.
            // For now, I'll return a view without the "Adopt Now" button.
            return view('users.available-pets.view-monitoring', compact('pet', 'petMonitoringStatus'));
        } else {
            // Pet is not being monitored, so proceed to display the "Adopt Now" button and recommended pets.
            $recommendedPets = Pet::where('id', '!=', $pet->id)
                ->where('up_for_adoption', 'Yes')
                ->inRandomOrder()
                ->limit(4) // Adjust the number of recommended pets to display
                ->get();

            return view('users.available-pets.view', compact('pet', 'petMonitoringStatus', 'recommendedPets'));
        }
    }

    public function viewAdoptedPets()
    {
    // Get the currently authenticated user
    $user = Auth::user();

    // Query adopted pets for the current user
    $adoptedPets = Pet::join('adoption_requests', 'pets.id', '=', 'adoption_requests.pet_id')
        ->join('adoption_status', 'adoption_requests.id', '=', 'adoption_status.adoption_request_id')
        ->where('adoption_status.status', 'approved')
        ->where('adoption_requests.user_id', $user->id)
        ->get();

    // Pass the results to the view
    return view('users.adoptions.approved-adoptions.show-approved', compact('adoptedPets'));
    }
}

