@extends('layouts.app')

@section('title', 'Sign Up | Vistara Education')
@section('meta_description', 'Create your account at Vistara Education Pvt. Ltd. - Best education consultancy in Nepal')
@section('canonical', url()->current())
@section('content')
<section class="section registration-page">
    <div class="container">
        <div class="registration-container">
            
            <!-- Left Side - Welcome Content -->
            <div class="reveal registration-welcome">
                <div style="margin-bottom: 30px;">
                    <img src="{{ asset('assets/brand/vistara-logo-custom.svg') }}" alt="Vistara Education Logo" style="height: 80px; width: auto; margin-bottom: 20px;">
                </div>
                
                <h1 style="font-size: 2.5rem; margin-bottom: 20px; font-family: 'Playfair Display', serif; color: var(--primary);">
                    Start Your Study Abroad Journey
                </h1>
                
                <p style="font-size: 1.1rem; color: var(--text-muted); margin-bottom: 30px; line-height: 1.6;">
                    Join over 5,000+ successful students who trusted Vistara Education for their international education dreams. Get personalized guidance, visa assistance, and university placement services.
                </p>
                
                <!-- Trust Indicators -->
                <div class="registration-trust-grid">
                    <div class="trust-indicator">
                        <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">98% Visa Success Rate</h4>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Expert guidance for visa applications</p>
                    </div>
                    <div class="trust-indicator">
                        <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">500+ Universities</h4>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Global partnerships worldwide</p>
                    </div>
                </div>
                
                <!-- Services List -->
                <div class="services-list">
                    <h4 style="color: var(--primary); margin-bottom: 15px; font-size: 1.1rem;">What You Get:</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 10px; color: var(--text-muted);"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Free Career Counseling</li>
                        <li style="margin-bottom: 10px; color: var(--text-muted);"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> University Selection Assistance</li>
                        <li style="margin-bottom: 10px; color: var(--text-muted);"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Scholarship Guidance</li>
                        <li style="margin-bottom: 10px; color: var(--text-muted);"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Visa Processing Support</li>
                        <li style="color: var(--text-muted);"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Pre-departure Orientation</li>
                    </ul>
                </div>
            </div>
            
            <!-- Right Side - Registration Form -->
            <div class="reveal" style="transition-delay: 0.2s;">
                <div class="registration-form-container">
                    <h2 style="text-align: center; margin-bottom: 30px; font-family: 'Playfair Display', serif; color: var(--primary);">Create Your Account</h2>
                    
                    @if ($errors->any())
                        <div style="background: #fee; border: 1px solid #fcc; color: #c00; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                            <strong>Please fix the following errors:</strong>
                            @foreach ($errors->all() as $error)
                                <p style="margin: 5px 0;">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    
                    <form action="{{ route('register.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Personal Information -->
                        <div class="form-section">
                            <h4 style="color: var(--primary); margin-bottom: 15px; font-size: 1rem;">Personal Information</h4>
                            
                            <div class="registration-field-grid">
                                <div>
                                    <label style="display: block; margin-bottom: 5px; font-weight: 600; color: var(--text-heading); font-size: 0.9rem;">First Name *</label>
                                    <input type="text" name="first_name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95rem;" value="{{ old('first_name') }}">
                                </div>
                                <div>
                                    <label style="display: block; margin-bottom: 5px; font-weight: 600; color: var(--text-heading); font-size: 0.9rem;">Last Name *</label>
                                    <input type="text" name="last_name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95rem;" value="{{ old('last_name') }}">
                                </div>
                            </div>
                            
                            <div style="margin-bottom: 15px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 600; color: var(--text-heading); font-size: 0.9rem;">Email Address *</label>
                                <input type="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95rem;" value="{{ old('email') }}">
                            </div>
                            
                            <div style="margin-bottom: 15px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 600; color: var(--text-heading); font-size: 0.9rem;">Phone Number *</label>
                                <input type="tel" name="phone" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95rem;" value="{{ old('phone') }}">
                            </div>

                            <div class="registration-upload-field">
                                <span class="registration-upload-title">Profile Image</span>
                                <label class="registration-upload-box">
                                    <input type="file" name="profile_image" accept="image/jpeg,image/png,image/webp">
                                    <span class="registration-upload-icon"><i class="fas fa-cloud-upload-alt"></i></span>
                                    <span class="registration-upload-text">Upload your photo</span>
                                    <span class="registration-upload-help">JPG, PNG, or WEBP up to 2MB</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Study Preferences -->
                        <div class="form-section">
                            <h4 style="color: var(--primary); margin-bottom: 15px; font-size: 1rem;">Study Preferences</h4>
                            
                            <div style="margin-bottom: 15px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 600; color: var(--text-heading); font-size: 0.9rem;">Preferred Study Destination *</label>
                                <select name="study_destination" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95rem;">
                                    <option value="">Select Destination</option>
                                    <option value="australia" {{ old('study_destination') == 'australia' ? 'selected' : '' }}>Australia</option>
                                    <option value="canada" {{ old('study_destination') == 'canada' ? 'selected' : '' }}>Canada</option>
                                    <option value="uk" {{ old('study_destination') == 'uk' ? 'selected' : '' }}>United Kingdom</option>
                                    <option value="usa" {{ old('study_destination') == 'usa' ? 'selected' : '' }}>United States</option>
                                    <option value="new_zealand" {{ old('study_destination') == 'new_zealand' ? 'selected' : '' }}>New Zealand</option>
                                    <option value="other" {{ old('study_destination') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            
                            <div style="margin-bottom: 15px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 600; color: var(--text-heading); font-size: 0.9rem;">Education Level *</label>
                                <select name="education_level" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95rem;">
                                    <option value="">Select Level</option>
                                    <option value="undergraduate" {{ old('education_level') == 'undergraduate' ? 'selected' : '' }}>Undergraduate (Bachelor's)</option>
                                    <option value="graduate" {{ old('education_level') == 'graduate' ? 'selected' : '' }}>Graduate (Master's)</option>
                                    <option value="phd" {{ old('education_level') == 'phd' ? 'selected' : '' }}>PhD/Doctorate</option>
                                    <option value="diploma" {{ old('education_level') == 'diploma' ? 'selected' : '' }}>Diploma/Certificate</option>
                                </select>
                            </div>
                            
                            <div style="margin-bottom: 15px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 600; color: var(--text-heading); font-size: 0.9rem;">Field of Study</label>
                                <input type="text" name="field_of_study" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95rem;" value="{{ old('field_of_study') }}" placeholder="e.g., Engineering, Business, IT">
                            </div>
                        </div>
                        
                        <!-- Account Security -->
                        <div class="form-section">
                            <h4 style="color: var(--primary); margin-bottom: 15px; font-size: 1rem;">Account Security</h4>
                            
                            <div style="margin-bottom: 15px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 600; color: var(--text-heading); font-size: 0.9rem;">Password *</label>
                                <input type="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95rem;">
                                <small style="color: var(--text-muted); font-size: 0.8rem;">Minimum 8 characters with letters and numbers</small>
                            </div>
                            
                            <div style="margin-bottom: 15px;">
                                <label style="display: block; margin-bottom: 5px; font-weight: 600; color: var(--text-heading); font-size: 0.9rem;">Confirm Password *</label>
                                <input type="password" name="password_confirmation" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95rem;">
                            </div>
                        </div>
                        
                        <!-- Terms and Conditions -->
                        <div style="margin-bottom: 25px;">
                            <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
                                <input type="checkbox" name="terms" required style="margin-top: 3px;">
                                <span style="font-size: 0.9rem; color: var(--text-muted);">
                                    I agree to the <a href="{{ route('terms') }}" style="color: var(--primary); font-weight: 600;">Terms and Conditions</a> and <a href="{{ route('privacy-policy') }}" style="color: var(--primary); font-weight: 600;">Privacy Policy</a>
                                </span>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 1.1rem; font-weight: 600;">
                            Create Account & Start Journey
                        </button>
                    </form>
                    
                    <p style="text-align: center; margin-top: 20px; color: var(--text-muted);">
                        Already have an account? <a href="{{ route('login') }}" style="color: var(--primary); font-weight: 600;">Sign In</a>
                    </p>
                    
                    <!-- Trust Badges -->
                    <div class="trust-badges">
                        <p style="color: var(--text-muted); font-size: 0.8rem; margin-bottom: 10px;">Government Registered & ISO Certified</p>
                        <div class="trust-badges-list">
                            <div class="trust-badge-item">NAAER</div>
                            <div class="trust-badge-item">IERIN</div>
                            <div class="trust-badge-item">ISO</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

