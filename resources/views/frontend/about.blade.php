@extends('layouts.app')

@section('title', 'About Us | Vistara Education')
@section('meta_description',
    'Learn about Vistara Education Pvt. Ltd., your trusted partner for overseas education with
    12+ years of experience.')
@section('canonical', url()->current())
@section('content')
    <section class="section page-header-padding">
        <div class="container">
            <h1 class="reveal">Transforming Dreams Into Global Opportunities</h1>
            <p style="font-size: 1.1rem; color: var(--text-muted); margin-top: 15px; max-width: 700px;">
                Your trusted partner for international education consulting in Nepal, helping ambitious students access
                world-class universities across Australia, UK, USA, Canada, and Europe.
            </p>

            <div class="grid grid-responsive" style="margin-top: 50px;">
                <div class="reveal">
                    <h2>Who We Are</h2>
                    <p>We are a dedicated team of education consultants committed to making your study abroad journey
                        smooth, transparent, and successful. With years of expertise and deep institutional connections with
                        leading universities worldwide, we guide students from their first consultation to the moment they
                        step into their dream university.</p>

                    <p style="margin-top: 20px;">At our core, we believe that studying abroad is more than securing an
                        admission—it's about finding the right educational environment that aligns with your career
                        aspirations and personal growth. Our personalized approach ensures that every student receives
                        guidance tailored to their unique goals and circumstances.</p>

                    <div
                        style="margin-top: 30px; padding: 20px; background: rgba(var(--primary-rgb), 0.05); border-left: 4px solid var(--primary); border-radius: 8px;">
                        <p><strong>{{ $about->description ?? '✓ 500+ students successfully placed' }}</strong> in
                            top-ranking universities across the globe</p>
                        <p style="margin-top: 10px;"><strong>✓ Partnership with 100+ accredited universities</strong>
                            ensuring authentic placements</p>
                        <p style="margin-top: 10px;"><strong>✓ 98% visa approval rate</strong> through expert documentation
                            and interview preparation</p>
                    </div>
                </div>
                <div class="reveal">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800"
                        alt="Vistara Education - Guiding Students to Global Universities"
                        style="width: 100%; border-radius: 20px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 20px;">Comprehensive Support at Every Step</h2>
            <p
                style="text-align: center; color: var(--text-muted); margin-bottom: 50px; max-width: 700px; margin-left: auto; margin-right: auto;">
                From university selection to visa approval and beyond, we provide end-to-end guidance tailored to your
                goals.
            </p>

            <div class="grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
                <div class="card reveal" style="padding: 30px;">
                    <i class="fas fa-compass" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Personalized Counseling</h3>
                    <p>Our certified counselors understand your academic background, career aspirations, and personal
                        preferences to recommend universities and programs that truly align with your goals.</p>
                </div>

                <div class="card reveal" style="padding: 30px;">
                    <i class="fas fa-university" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>University Selection</h3>
                    <p>Access our curated database of 100+ accredited universities across Australia, UK, USA, Canada, and
                        Europe. We help you shortlist institutions that match your academic profile and budget.</p>
                </div>

                <div class="card reveal" style="padding: 30px;">
                    <i class="fas fa-file-alt" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Visa & Documentation</h3>
                    <p>Eliminate the stress of visa processes. Our expert team handles document preparation, application
                        filing, and visa interview coaching to maximize your approval chances.</p>
                </div>

                <div class="card reveal" style="padding: 30px;">
                    <i class="fas fa-graduation-cap"
                        style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Test Preparation</h3>
                    <p>IELTS, TOEFL, GRE, GMAT—we provide guidance and resources for standardized test preparation to help
                        you achieve competitive scores.</p>
                </div>

                <div class="card reveal" style="padding: 30px;">
                    <i class="fas fa-dollar-sign"
                        style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Scholarship & Funding</h3>
                    <p>We help identify scholarship opportunities and guide you through application processes to reduce your
                        financial burden and make international education more accessible.</p>
                </div>

                <div class="card reveal" style="padding: 30px;">
                    <i class="fas fa-handshake" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Career Support</h3>
                    <p>Beyond admission, we guide you on career pathways, internship opportunities, and job placement
                        strategies to ensure your investment translates into career success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 20px;">Our Core Principles</h2>
            <p
                style="text-align: center; color: var(--text-muted); margin-bottom: 50px; max-width: 700px; margin-left: auto; margin-right: auto;">
                We operate with integrity, excellence, and your success as our priority.
            </p>

            <div class="grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 30px;">
                <div class="card reveal" style="padding: 30px; text-align: center;">
                    <i class="fas fa-shield-alt" style="font-size: 3rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Transparency & Honesty</h3>
                    <p>We believe in straightforward communication. No hidden fees, no false promises—just honest guidance
                        to help you make informed decisions about your future.</p>
                </div>

                <div class="card reveal" style="padding: 30px; text-align: center;">
                    <i class="fas fa-award" style="font-size: 3rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Excellence & Quality</h3>
                    <p>Excellence is not an act but a habit. We maintain the highest standards in every consultation,
                        document, and interaction to ensure your success.</p>
                </div>

                <div class="card reveal" style="padding: 30px; text-align: center;">
                    <i class="fas fa-heart" style="font-size: 3rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Student-Centric Approach</h3>
                    <p>Your aspirations drive us. We invest time, effort, and expertise to understand your unique needs and
                        provide solutions that genuinely serve your best interests.</p>
                </div>

                <div class="card reveal" style="padding: 30px; text-align: center;">
                    <i class="fas fa-globe" style="font-size: 3rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Global Perspective</h3>
                    <p>Through our network of university partners worldwide, we provide insights into different educational
                        systems, cultures, and career opportunities across continents.</p>
                </div>

                <div class="card reveal" style="padding: 30px; text-align: center;">
                    <i class="fas fa-trophy" style="font-size: 3rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Success & Results</h3>
                    <p>We measure success by your success—visa approvals, university admissions, scholarships, and
                        ultimately, your thriving career abroad.</p>
                </div>

                <div class="card reveal" style="padding: 30px; text-align: center;">
                    <i class="fas fa-people-carry" style="font-size: 3rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3>Dedicated Support</h3>
                    <p>From your first inquiry to your graduation day, we remain your trusted partner, providing ongoing
                        support and mentorship throughout your journey.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Why Partner With Us</h2>

            <div class="grid-responsive mt-50">
                <div class="reveal">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800"
                        alt="Why Choose Vistara Education" style="width: 100%; border-radius: 15px;">
                </div>

                <div class="reveal">
                    <h3 style="margin-bottom: 20px;">Expertise You Can Trust</h3>

                    <div style="margin-bottom: 25px;">
                        <h4 style="margin-bottom: 8px;">✓ Certified Education Counselors</h4>
                        <p>Our team comprises certified professionals with in-depth knowledge of international education
                            systems and admission requirements.</p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="margin-bottom: 8px;">✓ Strong University Partnerships</h4>
                        <p>Direct relationships with 100+ universities ensure authentic placements and often early
                            application deadlines and fee waivers.</p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="margin-bottom: 8px;">✓ Proven Track Record</h4>
                        <p>500+ successfully placed students with 98% visa approval rate speaks to our commitment and
                            expertise.</p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="margin-bottom: 8px;">✓ Customized Solutions</h4>
                        <p>No two students are alike. We create personalized education pathways based on academic profile,
                            budget, and career goals.</p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="margin-bottom: 8px;">✓ End-to-End Support</h4>
                        <p>From university selection and application guidance to visa processing and post-arrival
                            support—we're with you every step.</p>
                    </div>

                    <div>
                        <h4 style="margin-bottom: 8px;">✓ Affordable & Transparent</h4>
                        <p>Clear pricing, no hidden fees, and flexible consultation packages to suit every budget.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <!-- Statistics Section -->
    <section class="section"
        style="background: linear-gradient(135deg, var(--primary), var(--secondary)); color: white; padding: 80px 0;">
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

    <!-- Emergency Contact Bar -->
 
    <section class="section">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Our Vision & Mission</h2>

            <div class="grid-responsive mt-30">
                <div class="card reveal" style="padding: 40px;">
                    <h3 style="margin-bottom: 20px;"><i class="fas fa-eye"
                            style="color: var(--primary); margin-right: 10px;"></i>Our Vision</h3>
                    <p>To be the most trusted, transparent, and results-driven education consultancy in the region,
                        empowering students from Nepal and South Asia to access world-class education and build globally
                        competitive careers.</p>
                    <p style="margin-top: 15px; font-size: 0.95rem; color: var(--text-muted);">We envision a world where
                        geography, language, or circumstances don't limit educational aspirations.</p>
                </div>

                <div class="card reveal" style="padding: 40px;">
                    <h3 style="margin-bottom: 20px;"><i class="fas fa-bullseye"
                            style="color: var(--primary); margin-right: 10px;"></i>Our Mission</h3>
                    <p>To provide comprehensive, honest, and affordable education consulting services that bridge the gap
                        between ambitious students and world-class universities. We're committed to understanding each
                        student's unique potential and guiding them toward educational and career success.</p>
                    <p style="margin-top: 15px; font-size: 0.95rem; color: var(--text-muted);">Your aspirations are our
                        mission.</p>
                </div>
            </div>
        </div>
    </section>



@endsection
