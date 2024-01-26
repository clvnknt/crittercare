<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Models\MissingPet;

class MissingPetsController extends Controller
{
    public function showMissingPetsPage(Request $request)
{
    // Get the filter and sort values from the request
    $filter = $request->input('filter', 'all');
    $sort = $request->input('sort', 'oldest');

    // Create a query for open missing pets
    $missingPetsQuery = MissingPet::where('status', 'open');

    // Apply filtering based on the user's choice
    if ($filter !== 'all') {
        $missingPetsQuery->where('type', $filter);
    }

    // Apply sorting based on the user's choice
    if ($sort === 'oldest') {
        $missingPetsQuery->orderBy('missing_since', 'asc');
    } elseif ($sort === 'longest') {
        $missingPetsQuery->orderBy('missing_since', 'desc');
    }

    // Paginate the results
    $missingPets = $missingPetsQuery->paginate(8);

    // Return the filtered, sorted, and paginated results
    return view('users.missing-pets.index', compact('missingPets', 'filter', 'sort'));
}


    public function create()
    {
        return view('users.missing-pets.create');
    }

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'pet_name' => 'required|string|max:255',
        'type' => 'required|in:Dog,Cat',
        'gender' => 'required',
        'species' => 'nullable|string|max:255',
        'age_years' => 'nullable|integer|min:0',
        'age_months' => 'nullable|integer|min:0|max:11',
        'pictures' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size if needed
        'notable_features' => 'nullable|string|max:255',
        'last_seen_location' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'contact_social_media' => 'nullable|string|max:255',
        'contact_phone' => 'nullable|string|max:20',
        'contact_email' => 'nullable|email|max:255',
        'missing_since' => 'required|date_format:Y-m-d', // Remove \TH:i to accept only the date
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $picturePath = null;

    // Handle picture upload
    if ($request->hasFile('pictures')) {
        $picturePath = $request->file('pictures')->store('media/report/images', 'public');
        // The 'public' disk is used here to store the file in the 'public' directory
        $picturePath = str_replace('public/', 'media/', $picturePath);
    }

    MissingPet::create([
        'user_id' => auth()->user() ? auth()->user()->id : null,
        'pet_name' => $request->input('pet_name'),
        'type' => $request->input('type'),
        'species' => $request->input('species'),
        'gender' => $request->input('gender'),
        'age_years' => $request->input('age_years'),
        'age_months' => $request->input('age_months'),
        'pictures' => $picturePath,
        'notable_features' => $request->input('notable_features'),
        'last_seen_location' => $request->input('last_seen_location'),
        'description' => $request->input('description'),
        'contact_social_media' => $request->input('contact_social_media'),
        'contact_phone' => $request->input('contact_phone'),
        'contact_email' => $request->input('contact_email'),
        'missing_since' => $request->input('missing_since'),
    ]);

    return redirect()->route('users.missing-pets')
        ->with('success', 'Missing pet report submitted successfully.');
}

    public function show(MissingPet $missingPet)
    {
        return view('users.missing-pets.show', compact('missingPet'));
    }

    public function ownMissingPetReports()
    {
        $user = Auth::user();
        $userReports = MissingPet::where('user_id', $user->id)->get();

        return view('users.missing-pets.user-reports', compact('userReports'));
    }

    public function updateStatus(Request $request, MissingPet $missingPet)
{
    // Check if the logged-in user is the one who reported the missing pet
    if (auth()->user()->id !== $missingPet->user_id) {
        abort(403); // Forbidden
    }

    $request->validate([
        'status' => 'required|in:pending,open,solved,cancelled',
        'date_found' => 'nullable|date_format:Y-m-d', // Remove \TH:i to accept only the date
    ]);

    $missingPet->status = $request->input('status');

    // Only update date_found if the status is "solved"
    if ($request->input('status') === 'solved') {
        $missingPet->date_found = $request->input('date_found');
    } else {
        $missingPet->date_found = null; // Clear date_found if not "solved"
    }

    $missingPet->save();

    return redirect()->route('users.missing-pets.show', ['missingPet' => $missingPet])
        ->with('success', 'Status and Date Found updated successfully.');
}

}
