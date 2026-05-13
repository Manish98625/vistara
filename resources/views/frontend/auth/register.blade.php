@extends('layouts.app')

@section('title', 'Sign Up | Vistara Education')
@section('meta_description', 'Create your account at Vistara Education Pvt. Ltd. - Best education consultancy in Nepal')

@section('content')
<section class="section" style="min-height: 100vh; background: linear-gradient(135deg, #f8f9fa, #e9ecef); display: flex; align-items: center; padding: 40px 0;">
    <div class="container">
        <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            
            <!-- Left Side - Welcome Content -->
            <div class="reveal">
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
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;">
                    <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid var(--primary);">
                        <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">98% Visa Success Rate</h4>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Expert guidance for visa applications</p>
                    </div>
                    <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid var(--primary);">
                        <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">500+ Universities</h4>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Global partnerships worldwide</p>
                    </div>
                </div>
                
                <!-- Services List -->
                <div style="background: white; padding: 25px; border-radius: 10px;">
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
                <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    <h2 style="text-align: center; margin-bottom: 30px; font-family: 'Playfair Display', serif; color: var(--primary);">Create Your Account</h2>
                    
                    @if ($errors->any())
                        <div style="background: #fee; border: 1px solid #fcc; color: #c00; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                            <strong>Please fix the following errors:</strong>
                            @foreach ($errors->all() as $error)
                                <p style="margin: 5px 0;">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    
                    <form action="{{ route('register.post') }}" method="POST">
                        @csrf
                        
                        <!-- Personal Information -->
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; margin-bottom: 25px;">
                            <h4 style="color: var(--primary); margin-bottom: 15px; font-size: 1rem;">Personal Information</h4>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
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
                        </div>
                        
                        <!-- Study Preferences -->
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; margin-bottom: 25px;">
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
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 10px; margin-bottom: 25px;">
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
                                    I agree to the <a href="#" style="color: var(--primary); font-weight: 600;">Terms and Conditions</a> and <a href="#" style="color: var(--primary); font-weight: 600;">Privacy Policy</a>
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
                    <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">
                        <p style="color: var(--text-muted); font-size: 0.8rem; margin-bottom: 10px;">Government Registered & ISO Certified</p>
                        <div style="display: flex; justify-content: center; gap: 20px;">
                            <div style="width: 60px; height: 40px; background: #f0f0f0; border-radius: 5px; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; color: #666;">NAAER</div>
                            <div style="width: 60px; height: 40px; background: #f0f0f0; border-radius: 5px; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; color: #666;">IERIN</div>
                            <div style="width: 60px; height: 40px; background: #f0f0f0; border-radius: 5px; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; color: #666;">ISO</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
