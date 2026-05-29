<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Testimonial;
use App\Mail\ContactSubmissionMail;
use App\Mail\ContactAdminMail;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function show(): View
    {
        return view('frontend.write-review');
    }

    public function store(Request $request): RedirectResponse
    {
        if (!empty($request->input('website'))) {
            return redirect()->route('review')->with('success', 'Thank you for your review! It will be published after verification.');
        }

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

        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => auth()->user()->email ?? 'review@vistaraedu.com.np',
            'phone' => null,
            'subject' => 'Review Submission - ' . $validated['rating'] . ' Stars',
            'content' => "Rating: {$validated['rating']}/5\nCourse: " . ($validated['course'] ?? 'N/A') . "\nUniversity: " . ($validated['university'] ?? 'N/A') . "\n\n" . $validated['content'],
            'type' => 'review',
            'status' => 'new',
            'user_id' => auth()->id() ?? null,
        ]);

        $this->dispatchSubmissionEmails($contact);

        return redirect()->route('review')->with('success', 'Thank you for your review! It will be published after verification.');
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
            Log::error('Failed to queue review emails: ' . $e->getMessage(), [
                'contact_id' => $contact->id,
            ]);
        }
    }
}
