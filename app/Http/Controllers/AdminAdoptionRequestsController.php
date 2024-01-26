<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\AdoptionRequest;
use App\Models\User;
use App\Models\Pet;
use App\Models\AdoptionStatus;
use App\Models\PetMonitoring;
use PDF;

class AdminAdoptionRequestsController extends Controller
{
    public function viewAdoptionRequests()
    {
    $adoptionRequests = AdoptionRequest::with(['user', 'pet', 'adoptionStatus'])
        ->paginate(10); // You can adjust the number of records per page

    return view('admins.adoptions.adoption-requests.view-adoption-requests', compact('adoptionRequests'));
    }


   // app/Http/Controllers/AdminAdoptionRequestsController.php

   public function viewSpecificAdoptionRequest($adoptionRequest)
   {
       $adoptionRequest = AdoptionRequest::with(['user', 'pet', 'adoptionStatus'])->findOrFail($adoptionRequest);
   
       $approvalStatus = $adoptionRequest->adoptionStatus->status;
   
       return view('admins.adoptions.adoption-requests.view-specific-adoption-request', compact('adoptionRequest', 'approvalStatus'));
   }
   
   public function viewAddNotesForm(AdoptionRequest $adoptionRequest)
   {
       return view('admins.adoptions.adoption-requests.add-notes', compact('adoptionRequest'));
   }

   public function addNotes(Request $request, AdoptionRequest $adoptionRequest)
   {
       // Validate the input
       $request->validate([
           'notes' => 'required|string',
       ]);

       // Update the adoption request with the provided notes
       $adoptionRequest->update([
           'notes' => $request->input('notes'),
       ]);

       return redirect()->route('admins.adoption-requests.view-specific-adoption-request', ['adoptionRequest' => $adoptionRequest->id])
           ->with('success', 'Notes added successfully.');
   }

   public function viewEditNotesForm(AdoptionRequest $adoptionRequest)
   {
       return view('admins.adoptions.adoption-requests.edit-notes', compact('adoptionRequest'));
   }

   public function updateNotes(Request $request, AdoptionRequest $adoptionRequest)
{
    // Validate the input
    $request->validate([
        'notes' => 'required|string',
    ]);

    // Update the adoption request with the provided notes
    $adoptionRequest->update([
        'notes' => $request->input('notes'),
    ]);

    return redirect()->route('admins.adoption-requests.view-specific-adoption-request', ['adoptionRequest' => $adoptionRequest->id])
        ->with('success', 'Notes updated successfully.');
}

public function approveAdoptionRequest(AdoptionRequest $adoptionRequest)
{
    // Update the pet's status to "Adopted"
    $pet = Pet::find($adoptionRequest->pet_id);
    $pet->up_for_adoption = 'Adopted';
    $pet->save();

    // Update the adoption status to "Approved"
    $adoptionStatus = AdoptionStatus::where('adoption_request_id', $adoptionRequest->id)->first();
    $adoptionStatus->status = 'approved';
    $adoptionStatus->save();

    // Create a PetMonitoring record for the adopted pet
    PetMonitoring::create([
        'pet_id' => $pet->id,
        'condition' => 'Good', // You can set a default condition here
        'status' => 'Monitoring', // You can set a default status here
        'monitoring_user_id' => auth()->user()->id, // Assuming you want to associate with the logged-in admin
        'notes' => 'Adoption approved', // You can add additional notes here
        'note_added_at' => now(),
    ]);

    return redirect()->route('admins.adoption-requests.view')->with('success', 'Adoption request approved successfully.');
}

    public function declineAdoptionRequest(AdoptionRequest $adoptionRequest)
    {
        // Update the adoption status to "Declined"
        $adoptionStatus = AdoptionStatus::where('adoption_request_id', $adoptionRequest->id)->first();
        $adoptionStatus->status = 'declined';
        $adoptionStatus->save();
    
        // Get the associated pet
        $pet = Pet::find($adoptionRequest->pet_id);
    
        // Update the up_for_adoption status to "Yes"
        $pet->up_for_adoption = 'Yes';
        $pet->save();
    
        // Delete associated records (you'll need to define the relationships in models)
        $adoptionRequest->delete(); // Delete the adoption request
        // Delete any additional user details, if applicable
        // Delete the adoption status record
    
        return redirect()->route('admins.adoption-requests.view')->with('success', 'Adoption request declined successfully.');
    }

    public function exportAdoptionRequestsPDF()
    {
        $adoptionRequests = AdoptionRequest::with(['user', 'pet', 'adoptionStatus'])
            ->get(); // Fetch all adoption requests

        // Pass the adoption requests data to the PDF view
        $data = [
            'adoptionRequests' => $adoptionRequests,
        ];

        // Generate the PDF using the adoption requests data
        $pdf = PDF::loadView('admins.adoptions.adoption-requests.generate-adoption-requests-reports', $data);

        // Download the PDF
        return $pdf->download('adoption_requests_report.pdf');
    }
}
