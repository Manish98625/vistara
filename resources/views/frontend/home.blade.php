@extends('layouts.app')

@section('title', 'Vistara Education | Best Education Consultancy in Nepal')
@section('meta_description',
    'Vistara Education - Leading education consultancy in Nepal with 98% visa success rate. Study in Australia, UK, USA, Canada with expert guidance, scholarships, and test preparation.')
@section('canonical', url()->current())
@section('og_title', 'Vistara Education | Best Education Consultancy in Nepal')
@section('og_description', 'Study abroad with confidence! Vistara Education offers expert counseling, 500+ university partnerships, and 98% visa success rate for Nepali students.')
@section('og_image', asset('assets/brand/vistara-og-image.jpg'))

@section('content')
    <!-- Hero Slider -->
    <section class="hero-slider">

        @foreach ($banners as $index => $banner)
            <div class="slide @if ($index === 0) active @endif"
                style="background-image: url('{{ asset('/uploads/' . $banner->image) }}');">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="reveal">{{ $banner->heading_text }}</h1>
                        <p class="reveal">{{ $banner->short_description }}</p>
                        <div class="reveal hero-btns">
                            <a href="{{ route('contact') }}" class="btn btn-primary" aria-label="Book Free Consultation">Book Free Consultation</a>
                            <a href="{{ route('contact') }}" class="btn btn-secondary" aria-label="Contact Us">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>

    <!-- About Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <div class="grid-responsive mt-50">
                <div class="reveal">
                    <h2 style="text-align: left; margin-bottom: 30px; font-size: clamp(1.8rem, 5vw, 2.5rem);">Why Choose
                        Vistara Education?</h2>

                    <div style="margin-bottom: 25px;">
                        <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">✓ 500+ Students Placed
                        </h4>
                        <p style="color: var(--text-muted); margin: 0;">In top universities worldwide with 98% visa success
                            rate.</p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">✓ Expert Guidance</h4>
                        <p style="color: var(--text-muted); margin: 0;">Certified counselors providing personalized
                            counseling from day one.</p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">✓ Complete Support</h4>
                        <p style="color: var(--text-muted); margin: 0;">University selection, visa processing, test prep,
                            scholarships—everything covered.</p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">✓ Transparent & Honest
                        </h4>
                        <p style="color: var(--text-muted); margin: 0;">No hidden fees. No false promises. Just real
                            results.</p>
                    </div>

                    <a href="{{ route('about') }}" class="btn btn-primary">Learn More About Us</a>
                </div>
                <div class="reveal">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=500"
                        alt="Vistara Education Team" loading="lazy"
                        style="width: 100%; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Services -->
    <section class="section">
        <div class="container">
            <h2 class="reveal">Our Services</h2>
            <div class="services-grid mt-50">
                @forelse($services as $service)
                    <div class="service-card reveal"
                        style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 30px; text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background: white;">
                        <div style="font-size: 3rem; color: var(--primary); margin-bottom: 15px;">
                            <i class="{{ $service->icon }}"></i>
                        </div>
                        <h3 style="margin: 15px 0; font-family: 'Playfair Display', serif;">{{ $service->title }}</h3>
                        <p style="color: #666; font-size: 0.95rem; margin-bottom: 20px;">
                            {{ Str::limit($service->description ?? 'Expert guidance', 120) }}
                        </p>
                        <a href="{{ $service->id == 2 ? route('service.test-preparation') : route('service.show', $service->id) }}"
                            class="btn btn-primary btn-sm" aria-label="Learn more about {{ $service->title }}">Learn More</a>
                    </div>
                @empty
                    <p style="text-align: center; grid-column: 1 / -1;">No services available yet.</p>
                @endforelse
            </div>
        </div>
    </section>


    <!-- Study Destinations -->
    <section class="section">
        <div class="container">
            <h2 class="reveal">Top Study Destinations</h2>
            <p style="text-align: center; max-width: 700px; margin: 0 auto 50px;">Choose from a variety of countries that
                offer world-class education and incredible career prospects.</p>
            <div class="dest-grid">
            @foreach($courses as $course)
                <a href="{{ route('study.show', $course->id) }}" class="dest-card reveal"
                    style="cursor: pointer; text-decoration: none;">
                    <img src="{{'/uploads/'.$course->image}}"
                        alt="{{ $course->title }}" loading="lazy">
                    <div class="dest-overlay">
                        <h3>{{ $course->title }}</h3>
                        <p>{{ $course->description }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="section">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 60px;">Our Complete Process</h2>
            <div class="timeline reveal auto-grid-160">

                <div style="text-align: center;">
                    <div
                        style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">
                        1</div>
                    <h4 style="margin-bottom: 8px;">Free Counseling</h4>
                    <p style="color: #666; font-size: 0.9rem;">Profile analysis & guidance</p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">
                        2</div>
                    <h4 style="margin-bottom: 8px;">University Selection</h4>
                    <p style="color: #666; font-size: 0.9rem;">Matching your preferences</p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">
                        3</div>
                    <h4 style="margin-bottom: 8px;">Documentation</h4>
                    <p style="color: #666; font-size: 0.9rem;">Complete application prep</p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">
                        4</div>
                    <h4 style="margin-bottom: 8px;">SOP/LOR Guidance</h4>
                    <p style="color: #666; font-size: 0.9rem;">Expert writing support</p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">
                        5</div>
                    <h4 style="margin-bottom: 8px;">Visa Processing</h4>
                    <p style="color: #666; font-size: 0.9rem;">Interview & approval</p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px; box-shadow: 0 8px 20px rgba(13,138,188,0.25);">
                        6</div>
                    <h4 style="margin-bottom: 8px;">Pre-Departure</h4>
                    <p style="color: #666; font-size: 0.9rem;">Orientation & support</p>
                </div>

            </div>
        </div>
    </section>





    <!-- University Partners Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal">Our University Partners</h2>
            <p style="text-align: center; max-width: 700px; margin: 0 auto 50px; color: var(--text-muted);">
                We partner with 500+ accredited universities worldwide to ensure authentic placements and diverse opportunities.
            </p>
            
            <div class="partners-grid reveal">
                <div class="partner-category">
                    <h4>Australia</h4>
                    <div class="partner-logos">
                        <div class="partner-logo">University of Melbourne</div>
                        <div class="partner-logo">Monash University</div>
                        <div class="partner-logo">UNSW Sydney</div>
                    </div>
                </div>
                <div class="partner-category">
                    <h4>United Kingdom</h4>
                    <div class="partner-logos">
                        <div class="partner-logo">University of London</div>
                        <div class="partner-logo">Manchester University</div>
                        <div class="partner-logo">University of Glasgow</div>
                    </div>
                </div>
                <div class="partner-category">
                    <h4>Canada</h4>
                    <div class="partner-logos">
                        <div class="partner-logo">University of Toronto</div>
                        <div class="partner-logo">McGill University</div>
                        <div class="partner-logo">UBC</div>
                    </div>
                </div>
                <div class="partner-category">
                    <h4>USA</h4>
                    <div class="partner-logos">
                        <div class="partner-logo">Arizona State University</div>
                        <div class="partner-logo">University of Illinois</div>
                        <div class="partner-logo">Purdue University</div>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('contact') }}" class="btn btn-primary">View All Universities</a>
            </div>
        </div>
    </section>

    <!-- Scholarship Opportunities Section -->
    <section class="section">
        <div class="container">
            <h2 class="reveal">Scholarship Opportunities</h2>
            <p style="text-align: center; max-width: 700px; margin: 0 auto 50px; color: var(--text-muted);">
                Access exclusive scholarships and financial aid opportunities to make your dream education affordable.
            </p>
            
            <div class="scholarship-grid">
                <div class="scholarship-card reveal">
                    <div class="scholarship-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Merit-Based Scholarships</h3>
                    <p>Up to 50% tuition waiver for high-achieving students with excellent academic records.</p>
                    <div class="scholarship-amount">Up to $20,000/year</div>
                </div>
                
                <div class="scholarship-card reveal" style="transition-delay: 0.1s;">
                    <div class="scholarship-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Country-Specific Awards</h3>
                    <p>Exclusive scholarships for Nepali students partnered with various governments and universities.</p>
                    <div class="scholarship-amount">Up to $15,000/year</div>
                </div>
                
                <div class="scholarship-card reveal" style="transition-delay: 0.2s;">
                    <div class="scholarship-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Need-Based Financial Aid</h3>
                    <p>Comprehensive financial support packages based on your family's financial situation.</p>
                    <div class="scholarship-amount">Varies by need</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Test Preparation Section -->
    <section class="section test-prep-section">
        <div class="container test-prep-container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 15px;">Test Preparation Excellence</h2>
            <p class="reveal"
                style="text-align: center; max-width: 700px; margin: 0 auto 60px; color: var(--text-muted); font-size: 1.05rem;">
                Achieve your target scores with our expert-led classes, comprehensive study materials, and rigorous mock
                test sessions designed for international success.
            </p>

            <div class="test-grid">

                <div class="test-card reveal">
                    <div class="test-icon-wrapper">
                        <i class="fas fa-language"></i>
                    </div>
                    <h3>IELTS</h3>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> <span>Expert coaching from certified native and non-native
                                trainers</span></li>
                        <li><i class="fas fa-check-circle"></i> <span>Weekly full mock tests with detailed feedback</span>
                        </li>
                        <li><i class="fas fa-check-circle"></i> <span>Average score improvement of 1.5 bands</span></li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-enroll">Enroll Now</a>
                </div>

                <div class="test-card reveal" style="transition-delay: 0.1s;">
                    <div class="test-icon-wrapper">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>PTE Academic</h3>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> <span>State-of-the-art computer lab for exam
                                simulation</span></li>
                        <li><i class="fas fa-check-circle"></i> <span>AI-scored practice tests for accuracy</span></li>
                        <li><i class="fas fa-check-circle"></i> <span>Fast-track templates and scoring techniques</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-enroll">Enroll Now</a>
                </div>

                <div class="test-card reveal" style="transition-delay: 0.2s;">
                    <div class="test-icon-wrapper">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3>TOEFL iBT</h3>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> <span>Section-wise targeted expert training</span></li>
                        <li><i class="fas fa-check-circle"></i> <span>Official ETS practice materials included</span></li>
                        <li><i class="fas fa-check-circle"></i> <span>Guaranteed score improvement strategies</span></li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-enroll">Enroll Now</a>
                </div>

                <div class="test-card reveal" style="transition-delay: 0.3s;">
                    <div class="test-icon-wrapper">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                    <h3>SAT</h3>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> <span>Comprehensive Math, Reading & Writing prep</span>
                        </li>
                        <li><i class="fas fa-check-circle"></i> <span>Focus on critical thinking and time management</span>
                        </li>
                        <li><i class="fas fa-check-circle"></i> <span>Extensive college admission counseling
                                included</span></li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-enroll">Enroll Now</a>
                </div>

            </div>

            <div class="view-classes-container reveal" style="transition-delay: 0.4s;">
                <a href="{{ route('courses') }}" class="btn-view-classes">
                    View Class Schedules <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>




    <!-- Statistics Section -->
    <section class="section"
        style="background: linear-gradient(135deg, var(--primary), #8B004B); color: white; padding: 80px 0; margin-bottom: 60px;">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 60px; color: white;">Our Impact & Achievement
            </h2>

            <div class="grid auto-grid-200 text-center">

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
    
    <!-- Testimonials -->
    <section class="section">
        <div class="container">
            <h2 class="reveal">What Our Students Say</h2>
            <div class="auto-grid-300 mt-50">
                @forelse($testimonials as $testimonial)
                    <div class="testimonial-card reveal"
                        style="background: #f9f9f9; border-radius: 10px; padding: 25px; text-align: center; border-left: 4px solid var(--primary);">
                        <div style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p style="color: #555; font-size: 0.95rem; margin-bottom: 20px; font-style: italic;">
                            "{{ $testimonial->content }}"
                        </p>
                        <div style="border-top: 1px solid #ddd; padding-top: 15px;">
                            <h4 style="margin: 0 0 5px 0; color: #333;">{{ $testimonial->student_name }}</h4>
                            <p style="margin: 0; color: #999; font-size: 0.85rem;">
                                {{ $testimonial->course ?? '' }}
                                @if ($testimonial->university)
                                    • {{ $testimonial->university }}
                                @endif
                            </p>
                            @if ($testimonial->rating)
                                <div style="margin-top: 8px; color: #ffc107;">
                                    @for ($i = 0; $i < $testimonial->rating; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <p style="grid-column: 1 / -1; text-align: center;">No testimonials yet.</p>
                @endforelse
            </div>
        </div>
    </section>

  

   

    <!-- Blog Preview -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal">Latest from Our Blog</h2>
            <div style="text-align: center; margin-bottom: 40px;">
                <a href="{{ route('blog') }}" class="btn btn-primary">View All Articles</a>
            </div>
            <div class="grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                @forelse($blogs ?? [] as $blog)
                    <article class="card glass reveal" style="padding: 0; border-radius: 15px; overflow: hidden;">
                        @if ($blog->featured_image)
                            <img src="{{ $blog->featured_image }}" alt="{{ $blog->title }}"
                                style="width: 100%; height: 200px; object-fit: cover;">
                        @else
                            <div
                                style="width: 100%; height: 200px; background: linear-gradient(135deg, var(--primary), var(--secondary));">
                            </div>
                        @endif
                        <div style="padding: 25px;">
                            <h3 style="margin-bottom: 10px; font-size: 1.2rem;">{{ Str::limit($blog->title, 50) }}</h3>
                            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 15px;">
                                {{ Str::limit($blog->excerpt ?? $blog->content, 100) }}</p>
                            <small style="color: #999;">{{ $blog->published_at->format('M d, Y') }}</small><br>
                            <a href="{{ route('blog.show', $blog->slug) }}"
                                style="color: var(--primary); text-decoration: none; font-weight: 600; margin-top: 10px; display: inline-block;">Read
                                More →</a>
                        </div>
                    </article>
                @empty
                    <p style="grid-column: 1 / -1; text-align: center;">No blog posts yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Frequently Asked Questions</h2>

            <div style="max-width: 800px; margin: 0 auto;">
                @foreach ($faqs as $faq)
                    <div class="card glass reveal" style="margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.1);">
                        <details style="cursor: pointer; padding: 25px;">
                            <summary
                                style="font-weight: 600; font-size: 1.05rem; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                                <span>{{ $faq->title }}</span>
                                <i class="fas fa-chevron-down" style="transition: transform 0.3s ease;"></i>
                            </summary>
                            <p style="margin-top: 15px; color: var(--text-muted); line-height: 1.6;">
                                {{ $faq->description }}</p>
                        </details>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "Vistara Education Pvt. Ltd.",
        "url": "{{ url()->current() }}",
        "logo": "{{ asset('assets/brand/vistara-logo-main.svg') }}",
        "description": "Leading education consultancy in Nepal offering expert counseling for studying abroad in Australia, UK, USA, Canada, and other countries.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Global Plaza, New Baneshwor",
            "addressLocality": "Kathmandu",
            "addressCountry": "Nepal"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+977 1 4445556",
            "contactType": "customer service"
        },
        "sameAs": [
            "https://www.facebook.com/vistaraeducation",
            "https://www.instagram.com/vistaraeducation"
        ]
    }
    </script>
@endsection
