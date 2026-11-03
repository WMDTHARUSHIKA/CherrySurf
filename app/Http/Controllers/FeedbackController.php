<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        $feedbacks = Feedback::latest()
            ->take(5)
            ->get();

        return view('pages.contact', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
            'rating' => ['required', 'integer', 'between:1,5'],
        ]);

        Feedback::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you! Your feedback has been submitted.');
    }
}
