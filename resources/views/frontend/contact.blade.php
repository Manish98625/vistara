@extends('layouts.app')

@section('title', 'Contact Us | Vistara Education')
@section('meta_description', 'Get in touch with Vistara Education Pvt. Ltd. for expert study abroad counselling, university admission guidance, and visa support.')
@section('canonical', url()->current())

@section('content')
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-grid">
                <div class="contact-hero-content reveal">
                    <span class="contact-eyebrow">Contact Vistara Education</span>
                    <h1>Let’s plan your study abroad journey with confidence.</h1>
                    <p>
                        Speak with our education counsellors for university selection, scholarships, visa guidance,
                        test preparation, and complete admission support.
                    </p>
                    <div class="contact-hero-actions">
                        <a href="#contact-form" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Send Inquiry
                        </a>
                        <a href="tel:+9779712082870" class="btn btn-outline contact-hero-call">
                            <i class="fas fa-phone-alt"></i> Call Now
                        </a>
                    </div>
                </div>

                <div class="contact-hero-card reveal" style="transition-delay: 0.15s;">
                    <div class="contact-hero-card-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Fast Counselling Support</h3>
                    <p>Our team usually responds within 2 business hours.</p>
                    <div class="contact-mini-stats">
                        <div>
                            <strong>5,000+</strong>
                            <span>Students Guided</span>
                        </div>
                        <div>
                            <strong>500+</strong>
                            <span>University Partners</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-quick-section">
        <div class="container">
            <div class="contact-quick-grid">
                <a href="tel:+9779712082870" class="contact-quick-card reveal">
                    <span><i class="fas fa-phone-alt"></i></span>
                    <div>
                        <h3>Call Us</h3>
                        <p>+977 9712082870</p>
                    </div>
                </a>
                <a href="mailto:vistaraedu@gmail.com" class="contact-quick-card reveal" style="transition-delay: 0.08s;">
                    <span><i class="fas fa-envelope"></i></span>
                    <div>
                        <h3>Email Us</h3>
                        <p>vistaraedu@gmail.com</p>
                    </div>
                </a>
                <a href="https://wa.me/9779712082870" class="contact-quick-card reveal" style="transition-delay: 0.16s;">
                    <span><i class="fab fa-whatsapp"></i></span>
                    <div>
                        <h3>WhatsApp</h3>
                        <p>24/7 urgent support</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="contact-main-section" id="contact-form">
        <div class="container">
            <div class="contact-main-grid">
                <div class="contact-form-card reveal">
                    <div class="contact-section-heading">
                        <span>Send your inquiry</span>
                        <h2>Get a free consultation</h2>
                        <p>Fill out the form and our counsellor will contact you with the right next steps.</p>
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

                    <form action="{{ route('contact.store') }}" method="POST" class="premium-contact-form">
                        @csrf
                        <div style="position:absolute;left:-9999px;top:-9999px;" aria-hidden="true">
                            <label for="contact-website">Website</label>
                            <input type="text" id="contact-website" name="website" tabindex="-1" autocomplete="off">
                        </div>
                        <div class="contact-form-row">
                            <div class="contact-field">
                                <label for="contact-name">Full Name <span>*</span></label>
                                <div class="contact-input-wrap">
                                    <i class="fas fa-user"></i>
                                    <input id="contact-name" type="text" name="name" required value="{{ old('name') }}" placeholder="Your full name">
                                </div>
                            </div>
                            <div class="contact-field">
                                <label for="contact-email">Email Address <span>*</span></label>
                                <div class="contact-input-wrap">
                                    <i class="fas fa-envelope"></i>
                                    <input id="contact-email" type="email" name="email" required value="{{ old('email') }}" placeholder="you@example.com">
                                </div>
                            </div>
                        </div>

                        <div class="contact-form-row">
                            <div class="contact-field">
                                <label for="contact-phone">Phone Number</label>
                                <div class="contact-input-wrap">
                                    <i class="fas fa-phone"></i>
                                    <input id="contact-phone" type="tel" name="phone" value="{{ old('phone') }}" placeholder="+977 98XXXXXXXX">
                                </div>
                            </div>
                            <div class="contact-field">
                                <label for="contact-subject">Interested Service</label>
                                <div class="contact-input-wrap">
                                    <i class="fas fa-graduation-cap"></i>
                                    <input id="contact-subject" type="text" name="subject" value="{{ old('subject') }}" placeholder="Study abroad, visa, IELTS...">
                                </div>
                            </div>
                        </div>

                        <div class="contact-field">
                            <label for="contact-message">Message <span>*</span></label>
                            <div class="contact-input-wrap contact-textarea-wrap">
                                <i class="fas fa-comment-dots"></i>
                                <textarea id="contact-message" name="message" required rows="6" placeholder="Tell us your preferred country, course, and current academic background...">{{ old('message') }}</textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary contact-submit-btn">
                            Submit Inquiry <i class="fas fa-arrow-right"></i>
                        </button>
                    </form>
                </div>

                <aside class="contact-info-panel reveal" style="transition-delay: 0.12s;">
                    <div class="contact-info-card contact-info-gradient">
                        <span class="contact-info-icon"><i class="fas fa-map-marker-alt"></i></span>
                        <h3>Visit Our Office</h3>
                        <p>Ward No. 31, Baneshwor, Kathmandu Metropolitan City, Kathmandu</p>
                    </div>

                    <div class="contact-info-card">
                        <span class="contact-info-icon"><i class="fas fa-clock"></i></span>
                        <h3>Office Hours</h3>
                        <ul class="contact-hours-list">
                            <li><strong>Sunday - Friday</strong><span>9:00 AM - 6:00 PM</span></li>
                            <li><strong>Saturday</strong><span>10:00 AM - 4:00 PM</span></li>
                            <li><strong>Public Holidays</strong><span>Appointment Only</span></li>
                        </ul>
                    </div>

                    <div class="contact-info-card">
                        <span class="contact-info-icon"><i class="fas fa-shield-alt"></i></span>
                        <h3>Why Contact Us?</h3>
                        <ul class="contact-check-list">
                            <li><i class="fas fa-check"></i> Free initial counselling</li>
                            <li><i class="fas fa-check"></i> Scholarship and admission guidance</li>
                            <li><i class="fas fa-check"></i> Visa documentation support</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="contact-map-section">
        <div class="container">
            <div class="contact-map-card reveal">
                <div class="contact-map-content">
                    <span>Find us easily</span>
                    <h2>Located in the heart of Kathmandu</h2>
                    <p>Visit our office for one-on-one counselling and complete documentation support.</p>
                    <a href="https://www.google.com/maps/search/New+Baneshwor+Kathmandu" target="_blank" rel="noopener" class="btn btn-secondary">
                        <i class="fas fa-location-arrow"></i> Open in Google Maps
                    </a>
                </div>
                <div class="contact-map-embed" aria-label="Map location preview">
                    <iframe
                        title="Vistara Education office location"
                        src="https://www.google.com/maps?q=New%20Baneshwor%20Kathmandu&output=embed"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-cta-section">
        <div class="container">
            <div class="contact-cta-card reveal">
                <div>
                    <span>Ready to begin?</span>
                    <h2>Book your free study abroad counselling session today.</h2>
                </div>
                <a href="tel:+9779712082870" class="btn btn-primary">
                    <i class="fas fa-calendar-check"></i> Book Appointment
                </a>
            </div>
        </div>
    </section>
@endsection

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact Vistara Education",
    "description": "Get in touch with Vistara Education Pvt. Ltd. for expert study abroad counselling, university admission guidance, and visa support.",
    "url": "{{ url()->current() }}",
    "mainEntity": {
        "@type": "EducationalOrganization",
        "name": "Vistara Education Pvt. Ltd.",
        "telephone": "+977 9712082870",
        "email": "vistaraedu@gmail.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Ward No. 31, Baneshwor, Kathmandu Metropolitan City",
            "addressLocality": "Kathmandu",
            "addressCountry": "Nepal"
        },
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday"],
                "opens": "09:00",
                "closes": "18:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "10:00",
                "closes": "16:00"
            }
        ]
    }
}
</script>
