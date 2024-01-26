<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetMonitoring;
use Illuminate\Support\Facades\Auth;
use PDF;

class AdminPetMonitoringController extends Controller
{
    public function index(Request $request)
    {
        // Get the sort and order parameters from the query string
        $sort = $request->input('sort', 'id');
        $order = $request->input('order', 'asc');

        // Query your pet monitoring records and order them based on the sort and order
        $petMonitoring = PetMonitoring::orderBy($sort, $order)->paginate(10); // Paginate the data

        return view('admins.pet-monitoring.index', [
            'petMonitoring' => $petMonitoring,
            'sort' => $sort,
            'order' => $order,
        ]);
    }

    public function changeStatus(Request $request, PetMonitoring $monitoring)
    {
        $request->validate([
            'new_condition' => 'required|in:Good,Fair,Poor',
        ]);

        $monitoring->update(['condition' => $request->input('new_condition')]);

        return redirect()->route('admins.pet-monitoring.index')
            ->with('success', 'Condition updated successfully.');
    }

    public function updateNotes(Request $request, PetMonitoring $monitoring)
    {
        $request->validate([
            'new_notes' => 'required|string',
        ]);

        $monitoring->update(['notes' => $request->input('new_notes')]);

        return redirect()->route('admins.pet-monitoring.index')
            ->with('success', 'Notes updated successfully.');
    }

    public function stopMonitoring(PetMonitoring $monitoring)
{
    // Check if the monitoring status is 'Monitoring'
    if ($monitoring->status === 'Monitoring') {
        // Update the status to 'Stopped'
        $monitoring->update(['status' => 'Stopped']);

        return redirect()->route('admins.pet-monitoring.index')
            ->with('success', 'Monitoring stopped successfully.');
    } else {
        return redirect()->route('admins.pet-monitoring.index')
            ->with('error', 'Monitoring is not currently active.');
    }
}


public function reEnableMonitoring(PetMonitoring $monitoring)
{
    // Check if the monitoring status is 'Stopped'
    if ($monitoring->status === 'Stopped') {
        // Update the status to 'Monitoring' or whatever your status code is
        $monitoring->update(['status' => 'Monitoring']);

        return redirect()->route('admins.pet-monitoring.index')
            ->with('success', 'Monitoring re-enabled successfully.');
    } else {
        return redirect()->route('admins.pet-monitoring.index')
            ->with('error', 'Monitoring is already active or has not been stopped.');
    }
}

public function exportPetMonitoringPDF()
{
    $petMonitoring = PetMonitoring::with(['pet'])->orderBy('id', 'asc')->paginate(10);

    $data = [
        'petMonitoring' => $petMonitoring,
    ];

    $pdf = PDF::loadView('admins.pet-monitoring.generate-pet-monitoring-reports', $data);

    return $pdf->download('pet_monitoring_report.pdf');
}

}
