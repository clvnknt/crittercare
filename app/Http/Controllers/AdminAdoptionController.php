<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;

class AdminAdoptionController extends Controller
{
    public function index()
    {
        // Fetch a list of adoption requests (pending ones) for admin review
        $adoptions = Adoption::with('pet', 'user')->where('status', 'pending')->get();
        return view('admins.adoptions.index', compact('adoptions'));
    }

    public function view(Adoption $adoption)
    {
        // Show details of a specific adoption request
        return view('admins.adoptions.view', compact('adoption'));
    }

    public function approve(Adoption $adoption)
    {
        // Approve an adoption request
        $adoption->update(['status' => 'approved']);
        // You can also send a notification to the user here
        return redirect()->route('admin-adoptions.index')->with('success', 'Adoption request approved.');
    }

    public function decline(Adoption $adoption)
    {
        // Decline an adoption request
        $adoption->update(['status' => 'declined']);
        // You can also send a notification to the user here
        return redirect()->route('admin-adoptions.index')->with('success', 'Adoption request declined.');
    }
}
