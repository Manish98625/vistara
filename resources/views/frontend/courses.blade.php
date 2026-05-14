@extends('layouts.app')

@section('title', 'Popular Courses | Vistara Education')
@section('meta_description',
    'Explore popular study programs - IT, Business, Nursing, Engineering, Hospitality. Find the best courses for your international education with Vistara Education.')
@section('canonical', url()->current())
@section('content')
    <!-- Course Hero Section -->
    <section class="section page-header-padding" style="padding-bottom: 60px;">
        <div class="container">
            <div class="reveal" style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="margin-bottom: 20px; font-size: clamp(2rem, 5vw, 3.5rem);">Popular Study Programs</h1>
                <p style="font-size: clamp(0.95rem, 2vw, 1.1rem); color: var(--text-muted); line-height: 1.8; margin-bottom: 40px;">
                    Explore the most in-demand courses for international students. We connect you with world-class universities
                    offering these programs with excellent career prospects and clear pathways to permanent residency.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="btn btn-primary reveal">Get Course Guidance</a>
                    <a href="#courses-list" class="btn btn-secondary reveal">Explore Courses</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Grid Section -->
    <section class="section" id="courses-list" style="padding-top: 40px;">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 60px; font-size: clamp(1.8rem, 4vw, 2.5rem);">
                Available Programs
            </h2>

            <div class="dest-grid">
                @forelse($courses as $course)
                    <a href="{{ route('course.show', $course->id) }}"
                        class="dest-card reveal course-card-enhanced"
                        style="cursor: pointer; text-decoration: none; display: flex; flex-direction: column; transition: var(--transition);">
                        <img src="{{ asset('/uploads/' . $course->image) }}"
                            alt="{{ $course->title }}"
                            style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="dest-overlay" style="background: linear-gradient(to top, rgba(165, 0, 0, 0.95), rgba(165, 0, 0, 0.4)); padding: clamp(20px, 5vw, 40px);">
                            <h3 style="margin-bottom: 10px; font-size: clamp(1.2rem, 3vw, 1.6rem);">{{ $course->title }}</h3>
                            <p style="font-size: clamp(0.85rem, 2vw, 0.95rem); opacity: 0.95; margin-bottom: 15px; line-height: 1.5;">
                                {{ Str::limit($course->description ?? 'Explore careers in this field', 60) }}
                            </p>
                            <div style="display: flex; gap: 10px; margin-top: auto; flex-wrap: wrap;">
                                <span style="background: rgba(255,255,255,0.2); color: white; padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; white-space: nowrap;">
                                    <i class="fas fa-graduation-cap" style="margin-right: 5px;"></i>Explore
                                </span>
                            </div>
                        </div>
                    </a>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 60px 40px;">
                        <i class="fas fa-book" style="font-size: 3rem; color: var(--primary); margin-bottom: 20px; opacity: 0.3;"></i>
                        <p style="color: var(--text-muted); font-size: 1.1rem;">No courses available yet.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Why Choose Our Courses Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <div class="grid-responsive reveal">
                <div>
                    <h2 style="text-align: left; margin-bottom: 30px; font-size: clamp(1.8rem, 4vw, 2.3rem);">
                        Why Our Courses?
                    </h2>
                    <div style="display: grid; gap: 25px;">
                        <div>
                            <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">
                                <i class="fas fa-globe" style="margin-right: 10px;"></i>Global Recognition
                            </h4>
                            <p style="color: var(--text-muted); margin: 0;">Degrees recognized worldwide with excellent employment prospects</p>
                        </div>
                        <div>
                            <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">
                                <i class="fas fa-chart-line" style="margin-right: 10px;"></i>Career Growth
                            </h4>
                            <p style="color: var(--text-muted); margin: 0;">Programs designed for high-demand fields with strong salary potential</p>
                        </div>
                        <div>
                            <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">
                                <i class="fas fa-passport" style="margin-right: 10px;"></i>PR Pathways
                            </h4>
                            <p style="color: var(--text-muted); margin: 0;">Clear routes to permanent residency in Australia, Canada, UK, and USA</p>
                        </div>
                        <div>
                            <h4 style="color: var(--primary); margin-bottom: 8px; font-size: 1.1rem;">
                                <i class="fas fa-handshake" style="margin-right: 10px;"></i>Expert Guidance
                            </h4>
                            <p style="color: var(--text-muted); margin: 0;">Personalized counseling from start to finish—application to visa approval</p>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top: 30px;">
                        Book Consultation
                    </a>
                </div>
                <div class="reveal">
                    <img src="https://images.unsplash.com/photo-1523432379-f42624a11fcc?auto=format&fit=crop&q=80&w=500"
                        alt="Study Abroad"
                        style="width: 100%; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary), #8B004B); color: white; text-align: center; padding: 80px 0;">
        <div class="container reveal">
            <h2 style="color: white; margin-bottom: 20px; font-size: clamp(1.8rem, 5vw, 2.8rem);">
                Ready to Explore Your Future?
            </h2>
            <p style="font-size: clamp(0.95rem, 2vw, 1.1rem); margin-bottom: 40px; opacity: 0.95; max-width: 700px; margin-left: auto; margin-right: auto;">
                Get personalized guidance on course selection, university matching, and visa requirements. Our expert counselors are here to help.
            </p>
            <a href="{{ route('contact') }}" class="btn" style="background: white; color: var(--primary); font-weight: 600; padding: 15px 40px; border-radius: 50px; text-decoration: none; display: inline-block; transition: var(--transition);">
                Book Free Consultation
            </a>
        </div>
    </section>
@endsection
