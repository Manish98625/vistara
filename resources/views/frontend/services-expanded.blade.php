@extends('layouts.app')

@section('title', 'Services | Vistara Education')
@section('meta_description',
    'Explore our comprehensive range of educational services designed to support your journey towards overseas study. We offer counseling, visa guidance, test preparation, and more.')

@section('content')

    <!-- Services Header Section -->
    <section class="section page-header-padding">
        <div class="container">
            <h1 class="reveal" style="text-align: center;">Our Services</h1>
            <p class="reveal" style="text-align: center; max-width: 800px; margin: 0 auto 50px; color: var(--text-muted);">
                From the moment you decide to study abroad to the day you land in your dream destination, our expert team
                provides comprehensive support every step of the way.</p>

            <div class="auto-grid-300">

                @forelse($services as $service)
                    <div class="card glass reveal"
                        style="padding: 40px; text-align: center; display: flex; flex-direction: column; cursor: pointer;"
                        onclick="location.href='{{ route('service.show', $service->id) }}'">
                        <i class="{{ $service->icon ?? 'fas fa-star' }}"
                            style="font-size: 3rem; color: var(--primary); margin-bottom: 20px;"></i>
                        <h3 style="margin-bottom: 15px;">{{ $service->title }}</h3>
                        <p style="color: var(--text-muted); flex-grow: 1; margin-bottom: 20px;">
                            {{ isset($service->short_description) && $service->short_description ? $service->short_description : substr($service->description, 0, 100) . '...' }}
                        </p>
                        <a href="{{ route('service.show', $service->id) }}" class="btn btn-outline btn-sm">Learn More</a>
                    </div>
                @empty
                    <p style="grid-column: 1 / -1; text-align: center; color: var(--text-muted);">No services available at
                        the moment.</p>
                @endforelse

            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Why Choose Vistara?</h2>
            <p class="reveal" style="text-align: center; max-width: 700px; margin: 0 auto 60px; color: var(--text-muted);">
                We are the trusted partner of thousands of students who have achieved their dreams of studying abroad.</p>
            
            <div class="auto-grid-300 mt-50">
                
                <div class="card glass reveal" style="padding: 35px; text-align: center; display: flex; flex-direction: column; align-items: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-user-tie" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 12px;">Expert Counselors</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">Certified and experienced counselors with in-depth knowledge of international education systems and university requirements.</p>
                </div>

                <div class="card glass reveal" style="padding: 35px; text-align: center; display: flex; flex-direction: column; align-items: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-passport" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 12px;">Visa Success</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">98% visa success rate with comprehensive guidance on documentation, interview preparation, and application strategies.</p>
                </div>

                <div class="card glass reveal" style="padding: 35px; text-align: center; display: flex; flex-direction: column; align-items: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-graduation-cap" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 12px;">Scholarship Assistance</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">Access to exclusive scholarship opportunities at our partner universities worldwide to reduce your financial burden.</p>
                </div>

                <div class="card glass reveal" style="padding: 35px; text-align: center; display: flex; flex-direction: column; align-items: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-globe" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 12px;">Global Network</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">Partner with 500+ universities across 15 countries, giving you endless educational opportunities and choices.</p>
                </div>

                <div class="card glass reveal" style="padding: 35px; text-align: center; display: flex; flex-direction: column; align-items: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-comments" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 12px;">Career Guidance</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">Personalized career counseling and industry insights to help you choose courses aligned with your professional goals.</p>
                </div>

                <div class="card glass reveal" style="padding: 35px; text-align: center; display: flex; flex-direction: column; align-items: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-handshake" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 12px;">Student Support</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">24/7 support including accommodation, airport pickup, and guidance even after you arrive at your destination.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="section">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 60px;">Our Complete Process</h2>
            <div class="timeline reveal auto-grid-160">
                
                <div style="text-align: center;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">1</div>
                    <h4 style="margin-bottom: 8px;">Free Counseling</h4>
                    <p style="color: #666; font-size: 0.9rem;">Profile analysis & guidance</p>
                </div>

                <div style="text-align: center;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">2</div>
                    <h4 style="margin-bottom: 8px;">University Selection</h4>
                    <p style="color: #666; font-size: 0.9rem;">Matching your preferences</p>
                </div>

                <div style="text-align: center;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">3</div>
                    <h4 style="margin-bottom: 8px;">Documentation</h4>
                    <p style="color: #666; font-size: 0.9rem;">Complete application prep</p>
                </div>

                <div style="text-align: center;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">4</div>
                    <h4 style="margin-bottom: 8px;">SOP/LOR Guidance</h4>
                    <p style="color: #666; font-size: 0.9rem;">Expert writing support</p>
                </div>

                <div style="text-align: center;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">5</div>
                    <h4 style="margin-bottom: 8px;">Visa Processing</h4>
                    <p style="color: #666; font-size: 0.9rem;">Interview & approval</p>
                </div>

                <div style="text-align: center;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">6</div>
                    <h4 style="margin-bottom: 8px;">Pre-Departure</h4>
                    <p style="color: #666; font-size: 0.9rem;">Orientation & support</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Test Preparation Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Test Preparation Services</h2>
            
            <div class="auto-grid-280">
                
                <div class="card glass reveal" style="padding: 40px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-language" style="font-size: 2.8rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px;">IELTS Preparation</h3>
                    <ul style="list-style: none; text-align: left; margin: 20px 0;">
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Expert coaching from certified trainers</span>
                        </li>
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Full mock tests with feedback</span>
                        </li>
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Average score improvement: 1.5 bands</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline btn-sm" style="margin-top: 15px;">Learn More</a>
                </div>

                <div class="card glass reveal" style="padding: 40px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-comment-dots" style="font-size: 2.8rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px;">PTE Preparation</h3>
                    <ul style="list-style: none; text-align: left; margin: 20px 0;">
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Computer-based exam training</span>
                        </li>
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Personalized study plans</span>
                        </li>
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Fast-track scoring techniques</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline btn-sm" style="margin-top: 15px;">Learn More</a>
                </div>

                <div class="card glass reveal" style="padding: 40px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-book-open" style="font-size: 2.8rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px;">TOEFL Preparation</h3>
                    <ul style="list-style: none; text-align: left; margin: 20px 0;">
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Section-wise expert training</span>
                        </li>
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Official practice tests included</span>
                        </li>
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Guaranteed score improvement</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline btn-sm" style="margin-top: 15px;">Learn More</a>
                </div>

                <div class="card glass reveal" style="padding: 40px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-microphone-alt" style="font-size: 2.8rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px;">Interview Preparation</h3>
                    <ul style="list-style: none; text-align: left; margin: 20px 0;">
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Visa & university interview coaching</span>
                        </li>
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Mock interviews with feedback</span>
                        </li>
                        <li style="margin-bottom: 10px; display: flex; gap: 10px;">
                            <i class="fas fa-check" style="color: var(--primary); flex-shrink: 0;"></i>
                            <span style="font-size: 0.95rem;">Q&A database and common questions</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-outline btn-sm" style="margin-top: 15px;">Learn More</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Study Destinations -->
    <section class="section">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Popular Study Destinations</h2>
            <div class="dest-grid">
                <a href="{{ route('study.show', 'australia') }}" class="dest-card reveal" style="cursor: pointer; text-decoration: none;">
                    <img src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?auto=format&fit=crop&q=80&w=800" alt="Australia">
                    <div class="dest-overlay">
                        <h3>Australia</h3>
                        <p>World-class education & PR pathways</p>
                    </div>
                </a>
                <a href="{{ route('study.show', 'canada') }}" class="dest-card reveal" style="cursor: pointer; text-decoration: none;">
                    <img src="https://images.unsplash.com/photo-1517090504586-fde19ea6066f?auto=format&fit=crop&q=80&w=800" alt="Canada">
                    <div class="dest-overlay">
                        <h3>Canada</h3>
                        <p>Safe & welcoming with work options</p>
                    </div>
                </a>
                <a href="{{ route('study.show', 'uk') }}" class="dest-card reveal" style="cursor: pointer; text-decoration: none;">
                    <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&q=80&w=800" alt="UK">
                    <div class="dest-overlay">
                        <h3>United Kingdom</h3>
                        <p>Historic universities & research</p>
                    </div>
                </a>
                <a href="{{ route('study.show', 'usa') }}" class="dest-card reveal" style="cursor: pointer; text-decoration: none;">
                    <img src="https://images.unsplash.com/photo-1550721444-f87899a43e60?auto=format&fit=crop&q=80&w=800" alt="USA">
                    <div class="dest-overlay">
                        <h3>United States</h3>
                        <p>Ivy League & OPT opportunities</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Student Support Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Comprehensive Student Support</h2>
            
            <div class="auto-grid-240">
                
                <div class="card glass reveal" style="padding: 30px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-home" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 12px;"></i>
                    <h4 style="margin-bottom: 10px;">Accommodation Support</h4>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.5;">Help finding verified, safe, and affordable housing near your university campus.</p>
                </div>

                <div class="card glass reveal" style="padding: 30px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-plane" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 12px;"></i>
                    <h4 style="margin-bottom: 10px;">Airport Pickup</h4>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.5;">Arrange safe airport transportation and initial orientation on arrival.</p>
                </div>

                <div class="card glass reveal" style="padding: 30px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-briefcase" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 12px;"></i>
                    <h4 style="margin-bottom: 10px;">Career Guidance</h4>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.5;">Internship and job placement assistance to boost your career prospects.</p>
                </div>

                <div class="card glass reveal" style="padding: 30px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">
                    <i class="fas fa-phone-alt" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 12px;"></i>
                    <h4 style="margin-bottom: 10px;">24/7 Support</h4>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.5;">Round-the-clock assistance for any queries or emergencies during your stay.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; padding: 80px 0;">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 60px; color: white;">Our Impact & Achievement</h2>
            
            <div class="auto-grid-200 text-center">
                
                <div class="reveal">
                    <h2 style="font-size: 3.5rem; margin-bottom: 10px; font-weight: bold;">5000+</h2>
                    <p style="font-size: 1.1rem; opacity: 0.95;">Students Successfully Guided</p>
                </div>

                <div class="reveal">
                    <h2 style="font-size: 3.5rem; margin-bottom: 10px; font-weight: bold;">98%</h2>
                    <p style="font-size: 1.1rem; opacity: 0.95;">Visa Success Rate</p>
                </div>

                <div class="reveal">
                    <h2 style="font-size: 3.5rem; margin-bottom: 10px; font-weight: bold;">500+</h2>
                    <p style="font-size: 1.1rem; opacity: 0.95;">Partner Universities Worldwide</p>
                </div>

                <div class="reveal">
                    <h2 style="font-size: 3.5rem; margin-bottom: 10px; font-weight: bold;">15+</h2>
                    <p style="font-size: 1.1rem; opacity: 0.95;">Countries Covered</p>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Frequently Asked Questions</h2>
            
            <div style="max-width: 800px; margin: 0 auto;">
                
                <div class="card glass reveal" style="margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.1);">
                    <details style="cursor: pointer; padding: 25px;">
                        <summary style="font-weight: 600; font-size: 1.05rem; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                            <span>What is the visa success rate?</span>
                            <i class="fas fa-chevron-down" style="transition: transform 0.3s ease;"></i>
                        </summary>
                        <p style="margin-top: 15px; color: var(--text-muted); line-height: 1.6;">Our visa success rate is 98%, backed by our expert team's comprehensive guidance on documentation, interview preparation, and strategic application planning.</p>
                    </details>
                </div>

                <div class="card glass reveal" style="margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.1);">
                    <details style="cursor: pointer; padding: 25px;">
                        <summary style="font-weight: 600; font-size: 1.05rem; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                            <span>How much does counseling cost?</span>
                            <i class="fas fa-chevron-down" style="transition: transform 0.3s ease;"></i>
                        </summary>
                        <p style="margin-top: 15px; color: var(--text-muted); line-height: 1.6;">Initial counseling is completely FREE! We charge only after you decide to move forward with our services, ensuring no hidden costs.</p>
                    </details>
                </div>

                <div class="card glass reveal" style="margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.1);">
                    <details style="cursor: pointer; padding: 25px;">
                        <summary style="font-weight: 600; font-size: 1.05rem; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                            <span>Which countries do you support?</span>
                            <i class="fas fa-chevron-down" style="transition: transform 0.3s ease;"></i>
                        </summary>
                        <p style="margin-top: 15px; color: var(--text-muted); line-height: 1.6;">We provide guidance for studying in Australia, Canada, UK, USA, New Zealand, Europe, and several other countries with 500+ partner universities.</p>
                    </details>
                </div>

                <div class="card glass reveal" style="margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.1);">
                    <details style="cursor: pointer; padding: 25px;">
                        <summary style="font-weight: 600; font-size: 1.05rem; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                            <span>What IELTS score do I need?</span>
                            <i class="fas fa-chevron-down" style="transition: transform 0.3s ease;"></i>
                        </summary>
                        <p style="margin-top: 15px; color: var(--text-muted); line-height: 1.6;">Most universities require IELTS 6.0-6.5 for bachelor's and 6.5-7.0 for master's programs. Our expert counselors will guide you based on your university choices.</p>
                    </details>
                </div>

                <div class="card glass reveal" style="margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.1);">
                    <details style="cursor: pointer; padding: 25px;">
                        <summary style="font-weight: 600; font-size: 1.05rem; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                            <span>How long is the entire process?</span>
                            <i class="fas fa-chevron-down" style="transition: transform 0.3s ease;"></i>
                        </summary>
                        <p style="margin-top: 15px; color: var(--text-muted); line-height: 1.6;">From initial counseling to visa approval typically takes 6-9 months, depending on your chosen destination and application timeline.</p>
                    </details>
                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    @include('components.cta-section', [
        'title' => 'Ready to Start Your Study Abroad Journey?',
        'description' => 'Take the first step towards your dream education. Book a free consultation with our expert counselors today and explore your unlimited possibilities.',
        'button_text' => 'Book Free Consultation',
        'button_link' => route('contact')
    ])

@endsection
