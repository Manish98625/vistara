<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactSubmissionMail;
use App\Mail\ContactAdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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
        if (!empty($request->input('website'))) {
            return redirect()->route('contact')->with('success', 'Thank you! We have received your message and will get back to you soon.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:10',
            'subject' => 'nullable|string|max:255',
        ]);

        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => isset($validated['phone']) ? $validated['phone'] : null,
            'subject' => isset($validated['subject']) ? $validated['subject'] : 'Contact Form Submission',
            'content' => $validated['message'],
            'type' => 'contact',
            'status' => 'new',
            'user_id' => auth()->id() ? auth()->id() : null,
        ]);

        $this->dispatchSubmissionEmails($contact);

        return redirect()->route('contact')->with('success', 'Thank you! We have received your message and will get back to you soon.');
    }

    public function storeInquiry(Request $request)
    {
        if (!empty($request->input('website'))) {
            return redirect()->route('inquiry')->with('success', 'Thank you! Your inquiry has been submitted successfully. Our counsellor will contact you soon.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:10',
            'subject' => 'nullable|string|max:255',
        ]);

        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => isset($validated['phone']) ? $validated['phone'] : null,
            'subject' => isset($validated['subject']) ? $validated['subject'] : 'Study Abroad Inquiry',
            'content' => $validated['message'],
            'type' => 'inquiry',
            'status' => 'new',
            'user_id' => auth()->id() ? auth()->id() : null,
        ]);

        $this->dispatchSubmissionEmails($contact);

        return redirect()->route('inquiry')->with('success', 'Thank you! Your inquiry has been submitted successfully. Our counsellor will contact you soon.');
    }
    public function storeNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $contact = Contact::create([
            'name' => 'Newsletter Subscriber',
            'email' => $validated['email'],
            'phone' => null,
            'subject' => 'Newsletter Subscription',
            'content' => 'Newsletter subscription request.',
            'type' => 'newsletter',
            'status' => 'new',
            'user_id' => auth()->id() ? auth()->id() : null,
        ]);

        $this->dispatchSubmissionEmails($contact);

        return back()->with('newsletter_success', 'Thank you for subscribing!');
    }

    protected function dispatchSubmissionEmails(Contact $contact)
    {
        try {
            Mail::to($contact->email)->queue(new ContactSubmissionMail($contact));

            $adminEmail = config('mail.admin_email');
            if (!empty($adminEmail)) {
                Mail::to($adminEmail)->queue(new ContactAdminMail($contact));
            }
        } catch (\Throwable $e) {
            Log::error('Failed to queue contact emails: ' . $e->getMessage(), [
                'contact_id' => $contact->id,
            ]);
        }
    }
}
