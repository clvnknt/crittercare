<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CaseType;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminReportsController extends Controller
{
    private function getReportsDataByMonth()
    {
        $reportsData = [];

        // Fetch real data from your database
        for ($month = 1; $month <= 12; $month++) {
            $reportCount = Report::whereMonth('created_at', $month)->count();
            $reportsData[] = $reportCount;
        }

        return $reportsData;
    }

    private function getReportsStatusData()
    {
        // Fetch real data from your database
        $ongoingCount = Report::where('status', 'acknowledged')->count();
        $solvedCount = Report::where('status', 'solved')->count();

        return [$ongoingCount, $solvedCount];
    }

    public function viewReports()
{
    $reports = Report::orderBy('created_at', 'desc')->paginate(10); // You can adjust the pagination as needed

    // Count reports by type
    $reportsByType = $reports->groupBy('caseType.type')->map->count();

    $reportsData = $this->getReportsDataByMonth();
    $reportsStatusData = $this->getReportsStatusData();

    return view('admins.reports.view', compact('reportsData', 'reportsStatusData', 'reports', 'reportsByType'));
}


    public function showReports(Report $report)
    {
    return view('admins.reports.show', ['report' => $report]);
    }

    public function exportReportsPDF()
    {
        $reports = Report::all();
        $totalReports = $reports->count();
        $statusCounts = $reports->groupBy('status')->map->count();
        $averageAge = $reports->avg(fn ($report) => now()->diffInDays($report->created_at));
        $caseTypeCounts = CaseType::withCount('reports')->pluck('reports_count', 'name');
        $reportsWithDescriptions = $reports->whereNotNull('description')->count();

        $data = compact(
            'totalReports',
            'statusCounts',
            'averageAge',
            'caseTypeCounts',
            'reportsWithDescriptions'
        );

        $pdf = PDF::loadView('admins.reports.generate-reports-pdf', $data);

        return $pdf->download('reports.pdf');
    }


    public function updateStatus(Request $request, Report $report)
    {
        $request->validate([
            'newStatus' => 'required|in:acknowledged,solved,cancelled',
        ]);

        $report->update(['status' => $request->input('newStatus')]);

        return redirect()->back()->with('success', 'Status updated successfully.');
    }

}