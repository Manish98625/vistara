<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ReviewController extends Controller
{
    public function show(): View
    {
        return view('frontend.write-review');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'nullable|string|max:255',
            'university' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string|min:20',
        ]);

        Testimonial::create([
            'student_name' => $validated['name'],
            'course' => $validated['course'],
            'university' => $validated['university'],
            'rating' => $validated['rating'],
            'content' => $validated['content'],
            'is_approved' => false,
            'user_id' => auth()->id() ?? null,
        ]);

        return redirect()->route('review')->with('success', 'Thank you for your review! It will be published after verification.');
    }
}
