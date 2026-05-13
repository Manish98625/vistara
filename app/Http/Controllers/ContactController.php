<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('frontend.contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:10',
            'subject' => 'nullable|string|max:255',
        ]);

        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'subject' => $validated['subject'] ?? 'Contact Form Submission',
            'content' => $validated['message'],
            'status' => 'new',
            'user_id' => auth()->id() ?? null,
        ]);

        return redirect()->route('contact')->with('success', 'Thank you! We have received your message and will get back to you soon.');
    }
}
