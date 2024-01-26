<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\CaseType;
use App\Models\Report;

class ReportsController extends Controller
{
    public function index()
    {
    $reportedCases = Report::where('user_id', Auth::user()->id)->paginate(10); // Adjust the number of records per page as needed

    return view('users.reports.index', ['reportedCases' => $reportedCases]);
    }

    public function create()
    {
        $caseTypes = CaseType::all();

        return view('users.reports.create', ['caseTypes' => $caseTypes]);
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'case_type_id' => 'required|exists:case_types,id',
        'description' => 'required|string',
        'picture' => 'nullable|image|max:25000', // 25MB limit for images
        'video' => 'nullable|mimetypes:video/mp4,video/3gpp,video/x-msvideo,video/x-ms-wmv|max:50000', // 50MB limit for videos
    ]);

    $picturePath = null;
    if ($request->hasFile('picture')) {
        $picturePath = $request->file('picture')->store('media/report/images', 'public');
        $picturePath = 'media/report/images/' . basename($picturePath);
    }

    $videoPath = null;
    if ($request->hasFile('video')) {
        $videoPath = $request->file('video')->store('media/report/videos', 'public');
        $videoPath = 'media/report/videos/' . basename($videoPath);
    }

    Report::create([
        'user_id' => Auth::user()->id,
        'case_type_id' => $validatedData['case_type_id'],
        'description' => $validatedData['description'],
        'picture' => $picturePath,
        'video' => $videoPath,
    ]);

    return redirect()->route('users.reports.index')
        ->with('success', 'Report submitted successfully.');
}

    public function showReport(Report $report)
    {
    $report->load(['user', 'caseType']); // Load user and case type relationships

    return view('users.reports.show', compact('report'));
    }

}

