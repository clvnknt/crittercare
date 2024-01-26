<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MissingPet;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminMissingPetsController extends Controller
{
    public function showAllMissingPets()
    {
        $missingPets = MissingPet::paginate(10);

        // Add code to generate missing pets per year chart
        $missingPetsPerYear = MissingPet::select(DB::raw('YEAR(created_at) as year'), DB::raw('count(*) as count'))
            ->groupBy('year')
            ->get();

        $years = $missingPetsPerYear->pluck('year');
        $counts = $missingPetsPerYear->pluck('count');

        // Add code to generate missing dogs per year chart
        $missingDogsPerYear = MissingPet::where('type', 'Dog')
            ->select(DB::raw('YEAR(created_at) as year'), DB::raw('count(*) as count'))
            ->groupBy('year')
            ->get();

        $dogsYears = $missingDogsPerYear->pluck('year');
        $dogsCounts = $missingDogsPerYear->pluck('count');

        // Add code to generate missing cats per year chart
        $missingCatsPerYear = MissingPet::where('type', 'Cat')
            ->select(DB::raw('YEAR(created_at) as year'), DB::raw('count(*) as count'))
            ->groupBy('year')
            ->get();

        $catsYears = $missingCatsPerYear->pluck('year');
        $catsCounts = $missingCatsPerYear->pluck('count');

        return view('admins.missing-pets.index', compact('missingPets', 'years', 'counts', 'dogsYears', 'dogsCounts', 'catsYears', 'catsCounts'));
    }

public function show(MissingPet $missingPet)
{
    return view('admins.missing-pets.show', compact('missingPet'));
}

public function changeStatus(MissingPet $missingPet)
{
    return view('admins.missing-pets.change-status', compact('missingPet'));
}

public function updateStatus(Request $request, MissingPet $missingPet)
{
    // Validate the request data
    $request->validate([
        'status' => 'required|in:open,closed,solved,cancelled',
    ]);

    // Update the missing pet's status
    $missingPet->status = $request->input('status');
    $missingPet->save();

    return redirect()->route('admins.missing-pets.index')
        ->with('success', 'Missing pet status updated successfully.');
}

public function exportMissingPetsPDF()
{
    // Retrieve all missing pets excluding 'open' status
    $missingPets = MissingPet::with(['user'])
        ->where('status', '<>', 'open')
        ->get(); // Fetch all missing pets with status other than 'open'

    // Separate missing dogs and missing cats
    $missingDogs = $missingPets->where('type', 'Dog');
    $missingCats = $missingPets->where('type', 'Cat');

    // Total missing pets metrics
    $totalMissingPets = $missingPets->count();

    // General metrics
    $statusCounts = $missingPets->groupBy('status')->map->count();
    $ageDistribution = $missingPets->groupBy('age_years')->map->count();
    $speciesDistribution = $missingPets->groupBy('species')->map->count();
    $contactDistribution = $missingPets->groupBy('contact_type')->map->count();

    // Metrics for missing dogs
    $totalMissingDogs = $missingDogs->count();
    $statusCountsDogs = $missingDogs->groupBy('status')->map->count();
    $ageDistributionDogs = $missingDogs->groupBy('age_years')->map->count();

    // Metrics for missing cats
    $totalMissingCats = $missingCats->count();
    $statusCountsCats = $missingCats->groupBy('status')->map->count();
    $ageDistributionCats = $missingCats->groupBy('age_years')->map->count();

    // Pass the metrics and missing pets data to the PDF view
    $data = compact(
        'totalMissingPets',
        'statusCounts',
        'ageDistribution',
        'speciesDistribution',
        'contactDistribution',
        'totalMissingDogs',
        'statusCountsDogs',
        'ageDistributionDogs',
        'totalMissingCats',
        'statusCountsCats',
        'ageDistributionCats'
    );

    $pdf = PDF::loadView('admins.missing-pets.generate-missing-pets-reports', $data)->setPaper('folio', 'portrait');

    return $pdf->download('missing_pets_report.pdf');
}



}
