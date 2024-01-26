<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetSurrender;


class PetSurrenderController extends Controller
{
    public function dashboard()
    {
        // Your code to fetch dashboard data
        return view('users.pet-surrendering.dashboard');
    }

    public function showForm()
    {
        return view('users.pet-surrendering.surrender-form');
    }

    public function showRequests()
    {
        // Your code to fetch surrenderer requests
        $pendingRequests = PetSurrender::where('status', 'pending')->get();
        
        return view('users.pet-surrendering.surrender-requests', compact('pendingRequests'));
    }

    public function showSurrenders()
    {
        // Your code to fetch successful surrenders
        return view('users.pet-surrendering.surrenders');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'pet_name' => 'required|string|max:255',
            'type' => 'required|in:Dog,Cat',
            'species' => 'nullable|string|max:255',
            'age_years' => 'nullable|integer|min:0',
            'age_months' => 'nullable|integer|min:0|max:11',
            'reason' => 'nullable|string', // Change 'description' to 'reason'
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed image types and size as needed
        ]);
    
        // Handle file upload (if a photo is included in the form)
        if ($request->hasFile('photo')) {
            // Generate a unique filename for each photo using timestamp
            $photoFileName = time() . '_' . $request->file('photo')->getClientOriginalName();
            
            // Save the photo in the public/images/surrendered-pets folder
            $request->file('photo')->storeAs('public/images/surrendered-pets', $photoFileName);
            
            // Set the photo path to the saved filename
            $photoPath = 'images/surrendered-pets/' . $photoFileName;
        } else {
            $photoPath = null;
        }
    
        // Create a new pet surrender record in the database
        $petSurrender = new PetSurrender([
            'pet_name' => $request->input('pet_name'),
            'type' => $request->input('type'),
            'species' => $request->input('species'),
            'age_years' => $request->input('age_years'),
            'age_months' => $request->input('age_months'),
            'reason' => $request->input('reason'), // Change 'description' to 'reason'
            'photo' => $photoPath,
            'user_id' => auth()->user()->id, // Assign the user ID of the logged-in user
        ]);
    
        $petSurrender->save();
    
        // Redirect to a success page or return a response as needed
        return redirect()->route('users.pet-surrender.dashboard')->with('success', 'Pet surrender request submitted successfully.');
    }
}

