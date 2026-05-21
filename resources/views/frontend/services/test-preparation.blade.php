@extends('layouts.app')

@section('title', $service->title . ' | Vistara Education')
@section('meta_description', Str::limit($service->description ?? '', 160))
@section('canonical', url()->current())
@section('og_title', $service->title)
@section('og_description', Str::limit($service->description ?? '', 160))
@section('og_image', asset($service->og_image ?? 'assets/brand/vistara-logo-main.svg'))

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(165, 0, 0, 0.65), rgba(75, 54, 124, 0.65)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1920') center/cover; min-height: 500px; display: flex; align-items: center;">
        <div class="container">
            <div style="max-width: 700px; color: white;">
                <h1 class="reveal" style="font-size: clamp(2rem, 8vw, 3.5rem); margin-bottom: 20px;">{{ $service->title }}</h1>
                <p class="reveal" style="font-size: 1.1rem; margin-bottom: 40px; line-height: 1.8; color: rgba(255,255,255,0.95);">{{ $service->description }}</p>
                <div class="reveal" style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="btn btn-primary" style="background: white; color: var(--primary); border: none;" aria-label="Book Free Counseling">Book Free Counseling</a>
                    <a href="{{route('services')}}" class="btn btn-secondary" style="background: transparent; border: 2px solid white; color: white;" aria-label="Explore Services">Explore Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Test Preparation Services Section -->
    <section class="section" id="services">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 class="reveal">Our Test Preparation Programs</h2>
                <p class="reveal" style="color: var(--text-muted); max-width: 600px; margin: 20px auto 0;">Comprehensive courses designed to help you excel in your target exam. Choose from our range of expert-led programs.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
                <!-- IELTS Card -->
                <div class="reveal" style="background: white; border: 1px solid #e0e0e0; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow)';">
                    <div style="background: linear-gradient(135deg, var(--primary), var(--accent)); padding: 40px 20px; text-align: center; color: white;">
                        <i class="fas fa-language" style="font-size: 3rem; margin-bottom: 15px;"></i>
                        <h3 style="color: white; margin: 0;">IELTS Preparation</h3>
                    </div>
                    <div style="padding: 30px;">
                        <p style="color: var(--text-muted); margin-bottom: 20px; line-height: 1.7;">
                            Master the International English Language Testing System with our comprehensive IELTS coaching program.
                        </p>
                        <ul style="list-style: none; margin-bottom: 25px; color: #555;">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: var(--primary);"></i>
                                Proven strategies for all 4 sections
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: var(--primary);"></i>
                                40+ Practice tests & materials
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: var(--primary);"></i>
                                One-on-one speaking practice
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-block" style="width: 100%; text-align: center; padding: 10px; border-radius: 8px; display: block;" aria-label="Learn more about IELTS Preparation">Learn More</a>
                    </div>
                </div>

                <!-- PTE Card -->
                <div class="reveal" style="background: white; border: 1px solid #e0e0e0; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow)';">
                    <div style="background: linear-gradient(135deg, #7B68EE, #6A5ACD); padding: 40px 20px; text-align: center; color: white;">
                        <i class="fas fa-microphone" style="font-size: 3rem; margin-bottom: 15px;"></i>
                        <h3 style="color: white; margin: 0;">PTE Preparation</h3>
                    </div>
                    <div style="padding: 30px;">
                        <p style="color: var(--text-muted); margin-bottom: 20px; line-height: 1.7;">
                            Ace the Pearson Test of English with our specialized coaching and computer-based practice.
                        </p>
                        <ul style="list-style: none; margin-bottom: 25px; color: #555;">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #7B68EE;"></i>
                                Computer-delivered practice tests
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #7B68EE;"></i>
                                Latest exam format training
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #7B68EE;"></i>
                                Integrated skills coaching
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-block" style="width: 100%; text-align: center; padding: 10px; border-radius: 8px; display: block; background: #7B68EE; color: white;" aria-label="Learn more about PTE Preparation">Learn More</a>
                    </div>
                </div>

                <!-- TOEFL Card -->
                <div class="reveal" style="background: white; border: 1px solid #e0e0e0; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow)';">
                    <div style="background: linear-gradient(135deg, #FF6B6B, #FF5252); padding: 40px 20px; text-align: center; color: white;">
                        <i class="fas fa-graduation-cap" style="font-size: 3rem; margin-bottom: 15px;"></i>
                        <h3 style="color: white; margin: 0;">TOEFL Preparation</h3>
                    </div>
                    <div style="padding: 30px;">
                        <p style="color: var(--text-muted); margin-bottom: 20px; line-height: 1.7;">
                            Prepare for the Test of English as a Foreign Language with expert guidance and resources.
                        </p>
                        <ul style="list-style: none; margin-bottom: 25px; color: #555;">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #FF6B6B;"></i>
                                iBT format expertise
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #FF6B6B;"></i>
                                Academic writing focus
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #FF6B6B;"></i>
                                Comprehensive section training
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-block" style="width: 100%; text-align: center; padding: 10px; border-radius: 8px; display: block; background: #FF6B6B; color: white;" aria-label="Learn more about TOEFL Preparation">Learn More</a>
                    </div>
                </div>

                <!-- SAT Card -->
                <div class="reveal" style="background: white; border: 1px solid #e0e0e0; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow)';">
                    <div style="background: linear-gradient(135deg, #4ECDC4, #44A08D); padding: 40px 20px; text-align: center; color: white;">
                        <i class="fas fa-chart-line" style="font-size: 3rem; margin-bottom: 15px;"></i>
                        <h3 style="color: white; margin: 0;">SAT Preparation</h3>
                    </div>
                    <div style="padding: 30px;">
                        <p style="color: var(--text-muted); margin-bottom: 20px; line-height: 1.7;">
                            Master the Scholastic Assessment Test for university admission with data-driven strategies.
                        </p>
                        <ul style="list-style: none; margin-bottom: 25px; color: #555;">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #4ECDC4;"></i>
                                Math & Reading mastery
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #4ECDC4;"></i>
                                100+ practice tests
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #4ECDC4;"></i>
                                Score improvement guarantee
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-block" style="width: 100%; text-align: center; padding: 10px; border-radius: 8px; display: block; background: #4ECDC4; color: white;" aria-label="Learn more about SAT Preparation">Learn More</a>
                    </div>
                </div>

                <!-- GRE Card -->
                <div class="reveal" style="background: white; border: 1px solid #e0e0e0; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow)';">
                    <div style="background: linear-gradient(135deg, #95E1D3, #7DD3C0); padding: 40px 20px; text-align: center; color: white;">
                        <i class="fas fa-brain" style="font-size: 3rem; margin-bottom: 15px;"></i>
                        <h3 style="color: white; margin: 0;">GRE Preparation</h3>
                    </div>
                    <div style="padding: 30px;">
                        <p style="color: var(--text-muted); margin-bottom: 20px; line-height: 1.7;">
                            Excel in the Graduate Record Exam with our advanced curriculum for graduate programs.
                        </p>
                        <ul style="list-style: none; margin-bottom: 25px; color: #555;">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #95E1D3;"></i>
                                Verbal, Quant & AWA training
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #95E1D3;"></i>
                                Advanced strategy sessions
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #95E1D3;"></i>
                                Practice tests & solutions
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-block" style="width: 100%; text-align: center; padding: 10px; border-radius: 8px; display: block; background: #95E1D3; color: white;" aria-label="Learn more about GRE Preparation">Learn More</a>
                    </div>
                </div>

                <!-- GMAT Card -->
                <div class="reveal" style="background: white; border: 1px solid #e0e0e0; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow)';">
                    <div style="background: linear-gradient(135deg, #FFA07A, #FF8C69); padding: 40px 20px; text-align: center; color: white;">
                        <i class="fas fa-calculator" style="font-size: 3rem; margin-bottom: 15px;"></i>
                        <h3 style="color: white; margin: 0;">GMAT Preparation</h3>
                    </div>
                    <div style="padding: 30px;">
                        <p style="color: var(--text-muted); margin-bottom: 20px; line-height: 1.7;">
                            Prepare for the Graduate Management Admission Test with MBA-focused coaching.
                        </p>
                        <ul style="list-style: none; margin-bottom: 25px; color: #555;">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #FFA07A;"></i>
                                Quant, Verbal & IR focus
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #FFA07A;"></i>
                                MBA admission strategy
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; color: #FFA07A;"></i>
                                Personalized learning path
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-block" style="width: 100%; text-align: center; padding: 10px; border-radius: 8px; display: block; background: #FFA07A; color: white;" aria-label="Learn more about GMAT Preparation">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 class="reveal">Why Choose Vistara for Test Preparation?</h2>
                <p class="reveal" style="color: var(--text-muted); max-width: 600px; margin: 20px auto 0;">We go beyond test preparation. Our holistic approach ensures your success both in exams and your academic journey.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div class="reveal card glass" style="padding: 30px; border-left: 4px solid var(--primary); border-radius: 10px;">
                    <i class="fas fa-user-tie" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px;">Experienced Instructors</h3>
                    <p style="color: var(--text-muted); line-height: 1.7;">10+ certified instructors with 5+ years of teaching experience and strong track records in test preparation.</p>
                </div>

                <div class="reveal card glass" style="padding: 30px; border-left: 4px solid var(--primary); border-radius: 10px;">
                    <i class="fas fa-book" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px;">Updated Study Materials</h3>
                    <p style="color: var(--text-muted); line-height: 1.7;">Latest exam patterns and official practice materials updated regularly to match current test formats.</p>
                </div>

                <div class="reveal card glass" style="padding: 30px; border-left: 4px solid var(--primary); border-radius: 10px;">
                    <i class="fas fa-vial" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px;">Mock Tests</h3>
                    <p style="color: var(--text-muted); line-height: 1.7;">50+ full-length practice tests with detailed analysis to track your progress and identify weak areas.</p>
                </div>

                <div class="reveal card glass" style="padding: 30px; border-left: 4px solid var(--primary); border-radius: 10px;">
                    <i class="fas fa-clock" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px;">Flexible Schedules</h3>
                    <p style="color: var(--text-muted); line-height: 1.7;">Morning, evening, and weekend batches. Online and in-person classes to fit your lifestyle.</p>
                </div>

                <div class="reveal card glass" style="padding: 30px; border-left: 4px solid var(--primary); border-radius: 10px;">
                    <i class="fas fa-chart-bar" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px;">High Success Rate</h3>
                    <p style="color: var(--text-muted); line-height: 1.7;">90%+ of our students achieve their target scores on the first attempt with consistent performance.</p>
                </div>

                <div class="reveal card glass" style="padding: 30px; border-left: 4px solid var(--primary); border-radius: 10px;">
                    <i class="fas fa-handshake" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px;">Personalized Guidance</h3>
                    <p style="color: var(--text-muted); line-height: 1.7;">One-on-one mentoring and customized learning plans tailored to your strengths and weaknesses.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Preparation Process Section -->
    <section class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 class="reveal">Our Preparation Process</h2>
                <p class="reveal" style="color: var(--text-muted); max-width: 600px; margin: 20px auto 0;">A structured approach to help you achieve your target score in a systematic and stress-free manner.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">
                <div class="reveal" style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; margin: 0 auto 20px;">1</div>
                    <h3 style="margin-bottom: 10px;">Counseling</h3>
                    <p style="color: var(--text-muted);">Initial consultation to understand your goals, current level, and timeline for exam preparation.</p>
                </div>

                <div class="reveal" style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; margin: 0 auto 20px;">2</div>
                    <h3 style="margin-bottom: 10px;">Skill Assessment</h3>
                    <p style="color: var(--text-muted);">Comprehensive diagnostic test to identify your baseline level and areas needing improvement.</p>
                </div>

                <div class="reveal" style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; margin: 0 auto 20px;">3</div>
                    <h3 style="margin-bottom: 10px;">Course Enrollment</h3>
                    <p style="color: var(--text-muted);">Enroll in the appropriate batch with customized curriculum based on your assessment results.</p>
                </div>

                <div class="reveal" style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; margin: 0 auto 20px;">4</div>
                    <h3 style="margin-bottom: 10px;">Interactive Classes</h3>
                    <p style="color: var(--text-muted);">Attend sessions covering exam strategies, techniques, and comprehensive topic-wise preparation.</p>
                </div>

                <div class="reveal" style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; margin: 0 auto 20px;">5</div>
                    <h3 style="margin-bottom: 10px;">Mock Tests</h3>
                    <p style="color: var(--text-muted);">Regular full-length practice tests simulating actual exam conditions with detailed feedback.</p>
                </div>

                <div class="reveal" style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; margin: 0 auto 20px;">6</div>
                    <h3 style="margin-bottom: 10px;">Exam Booking</h3>
                    <p style="color: var(--text-muted);">Guidance in selecting exam date and registration assistance to ensure you're fully prepared.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 class="reveal">Premium Features</h2>
                <p class="reveal" style="color: var(--text-muted); max-width: 600px; margin: 20px auto 0;">Comprehensive learning environment with cutting-edge tools and support.</p>
            </div>

            <div class="grid-2col-responsive">
                <div class="reveal">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
                        <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid var(--primary);">
                            <i class="fas fa-video" style="font-size: 2rem; color: var(--primary); margin-bottom: 12px;"></i>
                            <h4 style="margin-bottom: 8px;">Interactive Classes</h4>
                            <p style="color: #666; font-size: 0.9rem;">Real-time sessions with Q&A, discussions, and live problem-solving for better engagement.</p>
                        </div>

                        <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid var(--primary);">
                            <i class="fas fa-desktop" style="font-size: 2rem; color: var(--primary); margin-bottom: 12px;"></i>
                            <h4 style="margin-bottom: 8px;">Online & Physical Classes</h4>
                            <p style="color: #666; font-size: 0.9rem;">Flexible learning with options for both online live classes and in-person center-based sessions.</p>
                        </div>

                        <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid var(--primary);">
                            <i class="fas fa-check-double" style="font-size: 2rem; color: var(--primary); margin-bottom: 12px;"></i>
                            <h4 style="margin-bottom: 8px;">Weekly Mock Tests</h4>
                            <p style="color: #666; font-size: 0.9rem;">Every week you get full-length tests following the exact exam pattern to track progress.</p>
                        </div>

                        <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid var(--primary);">
                            <i class="fas fa-star" style="font-size: 2rem; color: var(--primary); margin-bottom: 12px;"></i>
                            <h4 style="margin-bottom: 8px;">Individual Feedback</h4>
                            <p style="color: #666; font-size: 0.9rem;">Detailed performance analysis and personalized recommendations for every test and assignment.</p>
                        </div>

                        <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid var(--primary);">
                            <i class="fas fa-users" style="font-size: 2rem; color: var(--primary); margin-bottom: 12px;"></i>
                            <h4 style="margin-bottom: 8px;">Small Batch Size</h4>
                            <p style="color: #666; font-size: 0.9rem;">Maximum 15 students per batch ensuring personalized attention and better interaction.</p>
                        </div>

                        <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid var(--primary);">
                            <i class="fas fa-trophy" style="font-size: 2rem; color: var(--primary); margin-bottom: 12px;"></i>
                            <h4 style="margin-bottom: 8px;">Success Guarantee</h4>
                            <p style="color: #666; font-size: 0.9rem;">Free re-classes and additional sessions if you don't achieve your target score.</p>
                        </div>
                    </div>
                </div>

                <div class="reveal">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&q=80&w=500" alt="Test Preparation Classes" loading="lazy" style="width: 100%; border-radius: 15px; box-shadow: var(--shadow);">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 class="reveal">What Our Students Say</h2>
                <p class="reveal" style="color: var(--text-muted); max-width: 600px; margin: 20px auto 0;">Real success stories from students who achieved their target scores and secured admissions.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <!-- Testimonial 1 -->
                <div class="reveal" style="background: white; border-radius: 10px; padding: 30px; border-left: 4px solid var(--primary); box-shadow: var(--shadow);">
                    <div style="display: flex; gap: 5px; margin-bottom: 15px; color: #ffc107;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p style="color: #555; font-style: italic; margin-bottom: 20px; line-height: 1.7;">
                        "Vistara's IELTS preparation was incredible! The instructors broke down complex concepts into simple, understandable parts. I scored 7.5 in my first attempt!"
                    </p>
                    <div style="border-top: 1px solid #eee; padding-top: 15px;">
                        <h4 style="margin: 0 0 5px 0; color: var(--text-heading);">Priya Sharma</h4>
                        <p style="margin: 0; color: var(--text-muted); font-size: 0.85rem;">IELTS 7.5 • Melbourne University</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="reveal" style="background: white; border-radius: 10px; padding: 30px; border-left: 4px solid var(--primary); box-shadow: var(--shadow);">
                    <div style="display: flex; gap: 5px; margin-bottom: 15px; color: #ffc107;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p style="color: #555; font-style: italic; margin-bottom: 20px; line-height: 1.7;">
                        "The PTE coaching at Vistara is outstanding! Mock tests helped me understand the exam pattern perfectly. Scored 76 overall in my first try!"
                    </p>
                    <div style="border-top: 1px solid #eee; padding-top: 15px;">
                        <h4 style="margin: 0 0 5px 0; color: var(--text-heading);">Rohit Subedi</h4>
                        <p style="margin: 0; color: var(--text-muted); font-size: 0.85rem;">PTE 76 • University of Sydney</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="reveal" style="background: white; border-radius: 10px; padding: 30px; border-left: 4px solid var(--primary); box-shadow: var(--shadow);">
                    <div style="display: flex; gap: 5px; margin-bottom: 15px; color: #ffc107;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p style="color: #555; font-style: italic; margin-bottom: 20px; line-height: 1.7;">
                        "I was weak in SAT Math, but the personalized guidance made all the difference. My score improved from 670 to 750 in just 3 months!"
                    </p>
                    <div style="border-top: 1px solid #eee; padding-top: 15px;">
                        <h4 style="margin: 0 0 5px 0; color: var(--text-heading);">Anita Paudel</h4>
                        <p style="margin: 0; color: var(--text-muted); font-size: 0.85rem;">SAT 1460 • Boston University</p>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="reveal" style="background: white; border-radius: 10px; padding: 30px; border-left: 4px solid var(--primary); box-shadow: var(--shadow);">
                    <div style="display: flex; gap: 5px; margin-bottom: 15px; color: #ffc107;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p style="color: #555; font-style: italic; margin-bottom: 20px; line-height: 1.7;">
                        "GRE preparation with Vistara was systematic and comprehensive. The verbal section coaching especially helped me get a 330 score!"
                    </p>
                    <div style="border-top: 1px solid #eee; padding-top: 15px;">
                        <h4 style="margin: 0 0 5px 0; color: var(--text-heading);">Naveen Khadka</h4>
                        <p style="margin: 0; color: var(--text-muted); font-size: 0.85rem;">GRE 330 • Stanford University</p>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="reveal" style="background: white; border-radius: 10px; padding: 30px; border-left: 4px solid var(--primary); box-shadow: var(--shadow);">
                    <div style="display: flex; gap: 5px; margin-bottom: 15px; color: #ffc107;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p style="color: #555; font-style: italic; margin-bottom: 20px; line-height: 1.7;">
                        "TOEFL coaching was excellent. The instructors focused on the skills that universities actually need, not just test strategies. Scored 103!"
                    </p>
                    <div style="border-top: 1px solid #eee; padding-top: 15px;">
                        <h4 style="margin: 0 0 5px 0; color: var(--text-heading);">Shreya Aryal</h4>
                        <p style="margin: 0; color: var(--text-muted); font-size: 0.85rem;">TOEFL 103 • UC Berkeley</p>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="reveal" style="background: white; border-radius: 10px; padding: 30px; border-left: 4px solid var(--primary); box-shadow: var(--shadow);">
                    <div style="display: flex; gap: 5px; margin-bottom: 15px; color: #ffc107;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p style="color: #555; font-style: italic; margin-bottom: 20px; line-height: 1.7;">
                        "The GMAT preparation was worth every rupee. Their focus on time management and strategic thinking helped me score 710 and get into my dream MBA program!"
                    </p>
                    <div style="border-top: 1px solid #eee; padding-top: 15px;">
                        <h4 style="margin: 0 0 5px 0; color: var(--text-heading);">Amit Regmi</h4>
                        <p style="margin: 0; color: var(--text-muted); font-size: 0.85rem;">GMAT 710 • ISB Hyderabad</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 class="reveal">Frequently Asked Questions</h2>
                <p class="reveal" style="color: var(--text-muted); max-width: 600px; margin: 20px auto 0;">Everything you need to know about our test preparation programs.</p>
            </div>

            <div style="max-width: 800px; margin: 0 auto;">
                <!-- FAQ Item 1 -->
                <div class="reveal faq-item" style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <button class="faq-toggle" style="width: 100%; padding: 20px; background: white; border: none; text-align: left; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: var(--transition);" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.style.background = this.nextElementSibling.style.display === 'block' ? 'var(--bg-alt)' : 'white';">
                        <h3 style="margin: 0; font-size: 1.05rem; font-family: 'Playfair Display', serif;">When do the test preparation courses start?</h3>
                        <i class="fas fa-chevron-down" style="color: var(--primary); font-size: 1.2rem;"></i>
                    </button>
                    <div style="padding: 20px; background: white; border-top: 1px solid #e0e0e0; display: none; color: var(--text-muted);">
                        <p style="margin: 0; line-height: 1.7;">Our courses start on a rolling basis. We have new batches starting every week. You can join the next available batch that matches your schedule (morning, evening, or weekend). Contact our counselors for the exact start date that suits you best.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="reveal faq-item" style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <button class="faq-toggle" style="width: 100%; padding: 20px; background: white; border: none; text-align: left; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: var(--transition);" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.style.background = this.nextElementSibling.style.display === 'block' ? 'var(--bg-alt)' : 'white';">
                        <h3 style="margin: 0; font-size: 1.05rem; font-family: 'Playfair Display', serif;">How long is each test preparation course?</h3>
                        <i class="fas fa-chevron-down" style="color: var(--primary); font-size: 1.2rem;"></i>
                    </button>
                    <div style="padding: 20px; background: white; border-top: 1px solid #e0e0e0; display: none; color: var(--text-muted);">
                        <p style="margin: 0; line-height: 1.7;">Our courses typically run for 8-12 weeks depending on the test and your starting level. Intensive programs are also available for those with limited time. The duration is flexible and can be adjusted based on your progress and target exam date.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="reveal faq-item" style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <button class="faq-toggle" style="width: 100%; padding: 20px; background: white; border: none; text-align: left; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: var(--transition);" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.style.background = this.nextElementSibling.style.display === 'block' ? 'var(--bg-alt)' : 'white';">
                        <h3 style="margin: 0; font-size: 1.05rem; font-family: 'Playfair Display', serif;">What if I'm a complete beginner?</h3>
                        <i class="fas fa-chevron-down" style="color: var(--primary); font-size: 1.2rem;"></i>
                    </button>
                    <div style="padding: 20px; background: white; border-top: 1px solid #e0e0e0; display: none; color: var(--text-muted);">
                        <p style="margin: 0; line-height: 1.7;">No problem! We have specialized beginner batches that start from scratch. Our diagnostic assessment helps identify your exact level, and we create a customized learning path for you. Many of our high-scoring students started as complete beginners.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="reveal faq-item" style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <button class="faq-toggle" style="width: 100%; padding: 20px; background: white; border: none; text-align: left; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: var(--transition);" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.style.background = this.nextElementSibling.style.display === 'block' ? 'var(--bg-alt)' : 'white';">
                        <h3 style="margin: 0; font-size: 1.05rem; font-family: 'Playfair Display', serif;">Do you offer online classes?</h3>
                        <i class="fas fa-chevron-down" style="color: var(--primary); font-size: 1.2rem;"></i>
                    </button>
                    <div style="padding: 20px; background: white; border-top: 1px solid #e0e0e0; display: none; color: var(--text-muted);">
                        <p style="margin: 0; line-height: 1.7;">Yes! We offer both online live classes and in-person center-based sessions. Online classes are conducted via video conferencing with interactive features, screen sharing, and recorded sessions for later review. You can switch between online and offline as needed.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="reveal faq-item" style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <button class="faq-toggle" style="width: 100%; padding: 20px; background: white; border: none; text-align: left; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: var(--transition);" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.style.background = this.nextElementSibling.style.display === 'block' ? 'var(--bg-alt)' : 'white';">
                        <h3 style="margin: 0; font-size: 1.05rem; font-family: 'Playfair Display', serif;">What's the class size?</h3>
                        <i class="fas fa-chevron-down" style="color: var(--primary); font-size: 1.2rem;"></i>
                    </button>
                    <div style="padding: 20px; background: white; border-top: 1px solid #e0e0e0; display: none; color: var(--text-muted);">
                        <p style="margin: 0; line-height: 1.7;">We maintain a maximum of 15 students per batch to ensure quality education and personalized attention. This allows instructors to address individual concerns and provide customized feedback to each student.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="reveal faq-item" style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <button class="faq-toggle" style="width: 100%; padding: 20px; background: white; border: none; text-align: left; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: var(--transition);" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.style.background = this.nextElementSibling.style.display === 'block' ? 'var(--bg-alt)' : 'white';">
                        <h3 style="margin: 0; font-size: 1.05rem; font-family: 'Playfair Display', serif;">How much does it cost?</h3>
                        <i class="fas fa-chevron-down" style="color: var(--primary); font-size: 1.2rem;"></i>
                    </button>
                    <div style="padding: 20px; background: white; border-top: 1px solid #e0e0e0; display: none; color: var(--text-muted);">
                        <p style="margin: 0; line-height: 1.7;">Our courses are competitively priced based on the test and duration. We offer flexible payment plans with no hidden charges. Contact our counselors for personalized pricing based on your specific needs and schedule.</p>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="reveal faq-item" style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <button class="faq-toggle" style="width: 100%; padding: 20px; background: white; border: none; text-align: left; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: var(--transition);" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.style.background = this.nextElementSibling.style.display === 'block' ? 'var(--bg-alt)' : 'white';">
                        <h3 style="margin: 0; font-size: 1.05rem; font-family: 'Playfair Display', serif;">Can I take multiple tests?</h3>
                        <i class="fas fa-chevron-down" style="color: var(--primary); font-size: 1.2rem;"></i>
                    </button>
                    <div style="padding: 20px; background: white; border-top: 1px solid #e0e0e0; display: none; color: var(--text-muted);">
                        <p style="margin: 0; line-height: 1.7;">Absolutely! Many students prepare for multiple tests. We offer combination packages that cover multiple exams at discounted rates. Our flexible scheduling allows you to prepare for multiple tests sequentially or even simultaneously if you prefer.</p>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="reveal faq-item" style="border: 1px solid #e0e0e0; border-radius: 10px; margin-bottom: 15px; overflow: hidden;">
                    <button class="faq-toggle" style="width: 100%; padding: 20px; background: white; border: none; text-align: left; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: var(--transition);" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'; this.style.background = this.nextElementSibling.style.display === 'block' ? 'var(--bg-alt)' : 'white';">
                        <h3 style="margin: 0; font-size: 1.05rem; font-family: 'Playfair Display', serif;">What's your success rate?</h3>
                        <i class="fas fa-chevron-down" style="color: var(--primary); font-size: 1.2rem;"></i>
                    </button>
                    <div style="padding: 20px; background: white; border-top: 1px solid #e0e0e0; display: none; color: var(--text-muted);">
                        <p style="margin: 0; line-height: 1.7;">Our students have a 90%+ success rate in achieving or exceeding their target scores. This is because we focus not just on teaching but on understanding individual needs and adapting our approach accordingly. We provide free re-classes if you don't meet your target.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section style="background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; padding: 80px 20px; text-align: center;">
        <div class="container">
            <h2 class="reveal" style="font-size: clamp(2rem, 8vw, 3rem); margin-bottom: 20px; color: white;">Ready to Achieve Your Target Score?</h2>
            <p class="reveal" style="font-size: 1.1rem; margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto; color: rgba(255,255,255,0.95); line-height: 1.8;">Join thousands of successful students who have achieved their dreams with Vistara's expert test preparation programs. Book your free counseling session today!</p>
            <div class="reveal" style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: center;">
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg" style="background: white; color: var(--primary); border: none; padding: 12px 35px; font-weight: 600;">Book Free Counseling</a>
                <a href="tel:+977-your-number" class="btn btn-secondary btn-lg" style="background: transparent; border: 2px solid white; color: white; padding: 12px 35px; font-weight: 600;">Call Us</a>
            </div>
        </div>
    </section>

@endsection
