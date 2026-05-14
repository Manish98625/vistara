@extends('layouts.app')

@section('title', 'Inquiry | Vistara Education')
@section('meta_description', 'Submit your study abroad inquiry to Vistara Education for free counselling, university admission guidance, scholarship help, and visa support.')
@section('canonical', url()->current())

@section('content')
    <section class="inquiry-hero">
        <div class="container">
            <div class="inquiry-hero-content reveal">
                <span class="contact-eyebrow">Start Your Application</span>
                <h1>Send an inquiry and get expert study abroad guidance.</h1>
                <p>
                    Tell us your preferred country, course, academic background, and timeline. Our counsellor will contact you with the best pathway.
                </p>
            </div>
        </div>
    </section>

    <section class="inquiry-main-section">
        <div class="container">
            <div class="inquiry-grid">
                <div class="contact-form-card reveal">
                    <div class="contact-section-heading">
                        <span>Student inquiry form</span>
                        <h2>Request free counselling</h2>
                        <p>Complete this short form and our team will follow up as soon as possible.</p>
                    </div>

                    @if ($errors->any())
                        <div class="contact-alert contact-alert-error" role="alert">
                            <strong>Please fix the following errors:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="contact-alert contact-alert-success" role="status">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('inquiry.store') }}" method="POST" class="premium-contact-form">
                        @csrf
                        <div class="contact-form-row">
                            <div class="contact-field">
                                <label for="inquiry-name">Full Name <span>*</span></label>
                                <div class="contact-input-wrap">
                                    <i class="fas fa-user"></i>
                                    <input id="inquiry-name" type="text" name="name" required value="{{ old('name') }}" placeholder="Your full name">
                                </div>
                            </div>
                            <div class="contact-field">
                                <label for="inquiry-phone">Phone Number</label>
                                <div class="contact-input-wrap">
                                    <i class="fas fa-phone"></i>
                                    <input id="inquiry-phone" type="tel" name="phone" value="{{ old('phone') }}" placeholder="+977 98XXXXXXXX">
                                </div>
                            </div>
                        </div>

                        <div class="contact-form-row">
                            <div class="contact-field">
                                <label for="inquiry-email">Email Address <span>*</span></label>
                                <div class="contact-input-wrap">
                                    <i class="fas fa-envelope"></i>
                                    <input id="inquiry-email" type="email" name="email" required value="{{ old('email') }}" placeholder="you@example.com">
                                </div>
                            </div>
                            <div class="contact-field">
                                <label for="inquiry-subject">Preferred Destination</label>
                                <div class="contact-input-wrap">
                                    <i class="fas fa-globe-asia"></i>
                                    <input id="inquiry-subject" type="text" name="subject" value="{{ old('subject') }}" placeholder="Australia, Canada, UK...">
                                </div>
                            </div>
                        </div>

                        <div class="contact-field">
                            <label for="inquiry-message">Your Study Plan <span>*</span></label>
                            <div class="contact-input-wrap contact-textarea-wrap">
                                <i class="fas fa-pen"></i>
                                <textarea id="inquiry-message" name="message" required rows="7" placeholder="Mention your course interest, latest qualification, preferred intake, test score, and any questions...">{{ old('message') }}</textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary contact-submit-btn">
                            Submit Inquiry <i class="fas fa-arrow-right"></i>
                        </button>
                    </form>
                </div>

                <aside class="inquiry-side-panel reveal" style="transition-delay: 0.12s;">
                    <div class="contact-info-card contact-info-gradient">
                        <span class="contact-info-icon"><i class="fas fa-user-graduate"></i></span>
                        <h3>What happens next?</h3>
                        <p>Our counsellor reviews your inquiry and contacts you with clear next steps.</p>
                    </div>
                    <div class="contact-info-card">
                        <span class="contact-info-icon"><i class="fas fa-list-check"></i></span>
                        <h3>We can help with</h3>
                        <ul class="contact-check-list">
                            <li><i class="fas fa-check"></i> Country and university selection</li>
                            <li><i class="fas fa-check"></i> Scholarship opportunities</li>
                            <li><i class="fas fa-check"></i> Visa and documentation guidance</li>
                            <li><i class="fas fa-check"></i> IELTS/PTE preparation advice</li>
                        </ul>
                    </div>
                    <div class="contact-info-card">
                        <span class="contact-info-icon"><i class="fab fa-whatsapp"></i></span>
                        <h3>Need urgent help?</h3>
                        <p>Message us on WhatsApp for quick counselling support.</p>
                        <a href="https://wa.me/9779801234568" class="btn btn-outline inquiry-whatsapp-btn">Chat on WhatsApp</a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

