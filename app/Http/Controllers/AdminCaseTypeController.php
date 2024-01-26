<?php

namespace App\Http\Controllers;

use App\Models\CaseType;
use Illuminate\Http\Request;

class AdminCaseTypeController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort', 'id');
        $order = $request->input('order', 'asc');

        $caseTypes = CaseType::orderBy($sort, $order)->paginate(10);

        return view('admins.case-types.index', compact('caseTypes', 'sort', 'order'));
    }

    public function create()
    {
        return view('admins.case-types.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:case_types',
            'severity' => 'required|in:Low,Medium,High',
            'type' => 'required|in:Dog,Cat,Others', // Add validation for the 'type' column
        ]);

        CaseType::create($validatedData);

        return redirect()->route('admins.case-types.index')
            ->with('success', 'Case type created successfully.');
    }

    public function edit(CaseType $caseType)
    {
        return view('admins.case-types.edit', compact('caseType'));
    }

    public function update(Request $request, CaseType $caseType)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:case_types,name,' . $caseType->id,
            'severity' => 'required|in:Low,Medium,High',
            'type' => 'required|in:Dog,Cat,Others', // Add validation for the 'type' column
        ]);

        $caseType->update($validatedData);

        return redirect()->route('admins.case-types.index')
            ->with('success', 'Case type updated successfully.');
    }

    public function destroy(CaseType $caseType)
    {
        $caseType->delete();

        return redirect()->route('admins.case-types.index')
            ->with('success', 'Case type deleted successfully.');
    }
}

