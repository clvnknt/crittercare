<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|min:10',
        ]);

        Feedback::create([
            'user_id' => auth()->id(), // If you want to associate feedback with users
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
