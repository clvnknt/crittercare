<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\AdoptionStatus;
use App\Models\User;
use App\Models\AdditionalUserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminPetController extends Controller
{
    private function getAdoptedPetsDataByMonth()
{
    // Get the adopted pets count for each month from the database
    $adoptedPetsData = Pet::select(DB::raw('COUNT(id) as count'))
        ->where('up_for_adoption', 'Adopted')
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->orderBy(DB::raw('MONTH(created_at)'))
        ->pluck('count')
        ->toArray();

    return $adoptedPetsData;
}

    // Function to get pet distribution data for the pie chart
    private function getPetDistributionData()
    {
        // Replace this with your actual logic to fetch pet distribution data
        // For demonstration, we're using placeholder data
        $dogCount = Pet::where('type', 'Dog')->count();
        $catCount = Pet::where('type', 'Cat')->count();

        return [$dogCount, $catCount];
    }

  // Display a listing of the pets for adoption.
public function index(Request $request)
{
    // Get the search query from the request
    $search = $request->input('search');
    
    // Default sorting options
    $sort = $request->input('sort', 'id');
    $order = $request->input('order', 'asc');
    
    // Query to retrieve pets based on search query
    $query = Pet::query();
    
    if (!empty($search)) {
        // Apply a search filter if a search query is provided
        $query->where('pet_name', 'LIKE', '%' . $search . '%')
            ->orWhere('species', 'LIKE', '%' . $search . '%')
            ->orWhere('description', 'LIKE', '%' . $search . '%');
    }
    
    // Modify the sorting query to use the correct column name "age_years"
    $columnToSort = $sort === 'year' ? 'age_years' : $sort;
    
    // Apply sorting and paginate the results
    $pets = $query->orderBy($columnToSort, $order)->paginate(10);
    
    // Retrieve data for the charts
    $adoptedDogsData = $this->getAdoptedPetsDataByMonth('Dog');
    $adoptedCatsData = $this->getAdoptedPetsDataByMonth('Cat');
    $petDistributionData = $this->getPetDistributionData();

    return view('admins.pets.index', compact('pets', 'sort', 'order', 'search', 'adoptedDogsData', 'adoptedCatsData', 'petDistributionData'));
}

    // Show the form for creating a new pet.
    public function create()
    {
        return view('admins.pets.create');
    }

    // Store a newly created pet in the database.
    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'pet_name' => 'required',
            'type' => 'required|in:Dog,Cat',
            'gender' => 'required',
            'species' => 'required',
            'age_years' => 'integer|nullable',
            'age_months' => 'integer|nullable',
            'description' => 'required',
            'up_for_adoption' => 'required|in:No,Yes,Processing,Adopted',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            if ($request->hasFile('photo')) {
                // Handle photo upload and store file details
                $uploadedPhoto = $request->file('photo');
                $photoFileName = sha1(time() . $uploadedPhoto->getClientOriginalName()) . '.' . $uploadedPhoto->getClientOriginalExtension();
                $uploadedPhoto->storeAs('public/media/adoption', $photoFileName);
                $validatedData['photo'] = $photoFileName;
            }

            // Create a new pet record with the validated data
            Pet::create($validatedData);

            return redirect()->route('admins.pets.index')->with('success', 'Pet added successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admins.pets.create')->with('error', 'An error occurred while adding the pet.');
        }
    }
    
// Show the specified pet for adoption.
public function view(Pet $pet)
{
    $adoptionStatus = $pet->adoptionRequest->status; // Assuming there's a 'status' attribute in AdoptionRequest

    if ($adoptionStatus === 'pending' || $adoptionStatus === 'approved') {
        // Load user and additional user details
        $user = $pet->adoptionRequest->user;
        $additionalUserDetails = $user->additionalDetails;
        return view('admins.pets.view', compact('pet', 'user', 'additionalUserDetails'));
    }

    return view('admins.pets.view', compact('pet'));
}


    public function showValidId($userId)
    {
    // Load the user and additional user details
    $user = User::findOrFail($userId);
    $additionalUserDetails = $user->additionalDetails;

    if ($additionalUserDetails && $additionalUserDetails->valid_id) {
        $validIdPath = 'valid-ids/' . $additionalUserDetails->valid_id;
        // Pass $additionalUserDetails to the view
        return view('admins.pets.showValidId', compact('validIdPath', 'additionalUserDetails'));
    } else {
        return 'No valid ID available.';
    }
    }

    // Show the form for editing the specified pet.
    public function edit(Pet $pet)
    {
        return view('admins.pets.edit', compact('pet'));
    }

    // Update the specified pet in the database.
    public function update(Request $request, Pet $pet)
    {
        // Validate the incoming data for updating the pet
        $validatedData = $request->validate([
            'pet_name' => 'required',
            'type' => 'required',
            'gender' => 'required',
            'species' => 'required',
            'age_years' => 'integer|nullable',
            'age_months' => 'integer|nullable',
            'description' => 'required',
            'up_for_adoption' => 'string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the pet record with the validated data
        $pet->update($validatedData);

        if ($request->hasFile('photo')) {
            if ($pet->photo) {
                // Delete the old photo file if it exists
                Storage::delete('public/media/adoption/' . $pet->photo);
            }

            // Handle photo upload and store file details
            $uploadedPhoto = $request->file('photo');
            $photoFileName = sha1(time() . $uploadedPhoto->getClientOriginalName()) . '.' . $uploadedPhoto->getClientOriginalExtension();
            $uploadedPhoto->storeAs('public/media/adoption', $photoFileName);

            // Update the pet's photo file reference
            $pet->update(['photo' => $photoFileName]);
        }

        return redirect()->route('admins.pets.index')->with('success', 'Pet updated successfully.');
    }

    // Delete the specified pet.
    public function delete(Pet $pet)
    {
        // Delete the pet record
        $pet->delete();
        return redirect()->route('admins.pets.index')->with('success', 'Pet deleted successfully.');
    }
}