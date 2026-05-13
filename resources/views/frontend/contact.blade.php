@extends('layouts.app')

@section('title', 'Contact Us | Vistara Education')
@section('meta_description', 'Get in touch with Vistara Education Pvt. Ltd. for your overseas study journey.')

@section('content')
<section class="section page-header-padding">
    <div class="container">
        <h1 class="reveal">Get In Touch With Us</h1>
        <p style="text-align: center; max-width: 700px; margin: 0 auto 50px; color: var(--text-muted); font-size: 1.05rem;">Have questions? We're here to help. Send us a message and we'll respond as soon as possible.</p>


    <!-- Emergency Contact Bar -->
   

    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 60px;">Office Locations & Hours</h2>
            
            <div class="grid-responsive" style="margin-top: 50px;">
                <div class="reveal">
                    <h3 style="color: var(--primary); margin-bottom: 20px; font-size: 1.4rem;"><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>Head Office</h3>
                    <div style="background: white; padding: 25px; border-radius: 15px; box-shadow: var(--shadow); border-left: 4px solid var(--primary);">
                        <p style="margin-bottom: 10px;"><strong>Address:</strong> 123 Global Plaza, New Baneshwor, Kathmandu</p>
                        <p style="margin-bottom: 10px;"><strong>Phone:</strong> +977 1 4445556</p>
                        <p style="margin-bottom: 10px;"><strong>Email:</strong> info@vistara.edu.np</p>
                        <p><strong>Office Hours:</strong> Sunday - Friday: 9:00 AM - 6:00 PM</p>
                    </div>
                </div>
                
                <div class="reveal" style="transition-delay: 0.1s;">
                    <h3 style="color: var(--primary); margin-bottom: 20px; font-size: 1.4rem;"><i class="fas fa-clock" style="margin-right: 10px;"></i>Quick Response Time</h3>
                    <div style="background: white; padding: 25px; border-radius: 15px; box-shadow: var(--shadow); border-left: 4px solid var(--primary);">
                        <p style="margin-bottom: 10px;"><strong>Average Response:</strong> Within 2 hours during business days</p>
                        <p style="margin-bottom: 10px;"><strong>WhatsApp Support:</strong> Available 24/7 for urgent queries</p>
                        <p><strong>Consultation Booking:</strong> Schedule free counseling session online or by phone</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <!-- Contact Form -->
            <div class="reveal" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border: 1px solid #e8e8e8;">
                @if ($errors->any())
                    <div style="background: #fee; border: 1px solid #fcc; color: #c00; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        <strong>Please fix the following errors:</strong>
                        <ul style="margin: 10px 0 0 20px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div style="background: #efe; border: 1px solid #cfc; color: #0a0; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 22px;">
                        <label style="display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-heading); font-size: 0.95rem;">Full Name <span style="color: var(--primary);">*</span></label>
                        <input type="text" name="name" required style="width: 100%; padding: 13px 15px; border: 1.5px solid #ddd; border-radius: 8px; font-size: 1rem; font-family: inherit; transition: var(--transition);" value="{{ old('name') }}" onFocus="this.style.borderColor='var(--primary)'" onBlur="this.style.borderColor='#ddd'">
                    </div>

                    <div style="margin-bottom: 22px;">
                        <label style="display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-heading); font-size: 0.95rem;">Email Address <span style="color: var(--primary);">*</span></label>
                        <input type="email" name="email" required style="width: 100%; padding: 13px 15px; border: 1.5px solid #ddd; border-radius: 8px; font-size: 1rem; font-family: inherit; transition: var(--transition);" value="{{ old('email') }}" onFocus="this.style.borderColor='var(--primary)'" onBlur="this.style.borderColor='#ddd'">
                    </div>

                    <div style="margin-bottom: 22px;">
                        <label style="display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-heading); font-size: 0.95rem;">Phone Number</label>
                        <input type="tel" name="phone" style="width: 100%; padding: 13px 15px; border: 1.5px solid #ddd; border-radius: 8px; font-size: 1rem; font-family: inherit; transition: var(--transition);" value="{{ old('phone') }}" onFocus="this.style.borderColor='var(--primary)'" onBlur="this.style.borderColor='#ddd'">
                    </div>

                    <div style="margin-bottom: 22px;">
                        <label style="display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-heading); font-size: 0.95rem;">Subject</label>
                        <input type="text" name="subject" style="width: 100%; padding: 13px 15px; border: 1.5px solid #ddd; border-radius: 8px; font-size: 1rem; font-family: inherit; transition: var(--transition);" value="{{ old('subject') }}" onFocus="this.style.borderColor='var(--primary)'" onBlur="this.style.borderColor='#ddd'">
                    </div>

                    <div style="margin-bottom: 22px;">
                        <label style="display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-heading); font-size: 0.95rem;">Message <span style="color: var(--primary);">*</span></label>
                        <textarea name="message" required rows="6" style="width: 100%; padding: 13px 15px; border: 1.5px solid #ddd; border-radius: 8px; font-size: 1rem; font-family: inherit; resize: vertical; transition: var(--transition);" onFocus="this.style.borderColor='var(--primary)'" onBlur="this.style.borderColor='#ddd'">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 1rem; font-weight: 600;">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="reveal contact-sidebar">
                <div style="background: linear-gradient(135deg, var(--primary), #8B004B); color: white; padding: 35px; border-radius: 15px; margin-bottom: 30px; box-shadow: 0 10px 30px rgba(165,0,0,0.2);">
                    <h3 style="margin-top: 0; margin-bottom: 25px; font-size: 1.3rem;">Contact Information</h3>
                    <div style="margin: 20px 0;">
                        <h4 style="margin-bottom: 8px; font-size: 1rem; display: flex; align-items: center; gap: 12px;"><i class="fas fa-map-marker-alt" style="color: #fff; font-size: 1.2rem;"></i> Address</h4>
                        <p style="margin: 0; margin-left: 32px; font-size: 0.95rem; opacity: 0.95;">123 Global Plaza, New Baneshwor, Kathmandu, Nepal</p>
                    </div>
                    <div style="margin: 20px 0;">
                        <h4 style="margin-bottom: 8px; font-size: 1rem; display: flex; align-items: center; gap: 12px;"><i class="fas fa-phone" style="color: #fff; font-size: 1.2rem;"></i> Phone</h4>
                        <p style="margin: 0; margin-left: 32px; font-size: 0.95rem; opacity: 0.95;">+977 1 4445556</p>
                    </div>
                    <div style="margin: 20px 0;">
                        <h4 style="margin-bottom: 8px; font-size: 1rem; display: flex; align-items: center; gap: 12px;"><i class="fas fa-envelope" style="color: #fff; font-size: 1.2rem;"></i> Email</h4>
                        <p style="margin: 0; margin-left: 32px; font-size: 0.95rem; opacity: 0.95;">info@vistara.edu.np</p>
                    </div>
                </div>

                <div style="background: #f8f9fa; padding: 35px; border-radius: 15px; border: 1px solid #e8e8e8;">
                    <h3 style="margin-top: 0; margin-bottom: 20px; font-size: 1.3rem;">Business Hours</h3>
                    <div style="space: 15px;">
                        <p style="margin: 12px 0; font-size: 0.95rem;"><strong style="color: var(--text-heading);">Monday - Friday:</strong> <span style="color: var(--text-muted);">10:00 AM - 6:00 PM</span></p>
                        <p style="margin: 12px 0; font-size: 0.95rem;"><strong style="color: var(--text-heading);">Saturday:</strong> <span style="color: var(--text-muted);">10:00 AM - 4:00 PM</span></p>
                        <p style="margin: 12px 0; font-size: 0.95rem;"><strong style="color: var(--text-heading);">Sunday:</strong> <span style="color: var(--text-muted);">Closed</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
