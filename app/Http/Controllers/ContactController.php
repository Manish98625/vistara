<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('frontend.contact');
    }

    public function inquiry()
    {
        return view('frontend.inquiry');
    }

    public function store(Request $request)
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
            'phone' => isset($validated['phone']) ? $validated['phone'] : null,
            'subject' => isset($validated['subject']) ? $validated['subject'] : 'Contact Form Submission',
            'content' => $validated['message'],
            'type' => 'contact',
            'status' => 'new',
            'user_id' => auth()->id() ? auth()->id() : null,
        ]);

        return redirect()->route('contact')->with('success', 'Thank you! We have received your message and will get back to you soon.');
    }

    public function storeInquiry(Request $request)
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
            'phone' => isset($validated['phone']) ? $validated['phone'] : null,
            'subject' => isset($validated['subject']) ? $validated['subject'] : 'Study Abroad Inquiry',
            'content' => $validated['message'],
            'type' => 'inquiry',
            'status' => 'new',
            'user_id' => auth()->id() ? auth()->id() : null,
        ]);

        return redirect()->route('inquiry')->with('success', 'Thank you! Your inquiry has been submitted successfully. Our counsellor will contact you soon.');
    }
    public function storeNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        Contact::create([
            'name' => 'Newsletter Subscriber',
            'email' => $validated['email'],
            'phone' => null,
            'subject' => 'Newsletter Subscription',
            'content' => 'Newsletter subscription request.',
            'type' => 'newsletter',
            'status' => 'new',
            'user_id' => auth()->id() ? auth()->id() : null,
        ]);

        return back()->with('newsletter_success', 'Thank you for subscribing!');
    }
}
