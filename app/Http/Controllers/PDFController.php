<?php
  
namespace App\Http\Controllers;

  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pet;
use App\Models\Adoption;
use App\Models\PetMonitoring;
use App\Models\AdoptionRequest;
use Illuminate\Support\Carbon;
use PDF;
  
class PDFController extends Controller
{

    public function exportPdf()
{
    // Fetch adopted pets during the last 12 months
    $adoptedPets = Pet::where('up_for_adoption', 'Adopted')
        ->whereBetween('created_at', [Carbon::now()->subMonths(12), Carbon::now()])
        ->get();

    // Fetch pets available for adoption
    $petsForAdoption = Pet::where('up_for_adoption', 'Yes')->get();

    // Fetch total number of dogs and cats
    $totalDogs = Pet::where('type', 'Dog')->count();
    $totalCats = Pet::where('type', 'Cat')->count();

    $pdf = \PDF::loadView('admins.pets.generate-pet-reports', compact('adoptedPets', 'petsForAdoption', 'totalDogs', 'totalCats'));

    return $pdf->download('pets_report.pdf');
}

}