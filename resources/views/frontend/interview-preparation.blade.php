@extends('layouts.app')

@section('title', 'Interview Preparation | Vistara Education')
@section('meta_description', 'Ace your university and visa interviews with expert coaching from Vistara Education. Mock interviews, feedback, and proven strategies for success.')

@section('content')
<!-- Hero -->
<section class="hero-section" style="background: linear-gradient(135deg, rgba(165, 0, 0, 0.7), rgba(75, 54, 124, 0.7)), url('https://images.unsplash.com/photo-1573497620053-ea5300f94f21?auto=format&fit=crop&q=80&w=1920') center/cover; min-height: 400px; display: flex; align-items: center;">
    <div class="container">
        <div style="max-width: 700px; color: white;">
            <h1 class="reveal" style="font-size: clamp(2rem, 8vw, 3.5rem); margin-bottom: 20px;">Interview Preparation</h1>
            <p class="reveal" style="font-size: 1.1rem; line-height: 1.8; color: rgba(255,255,255,0.95);">Build confidence and master the art of interviews with personalized coaching from experienced mentors.</p>
        </div>
    </div>
</section>

<!-- Why Interviews Matter -->
<section class="section">
    <div class="container">
        <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Why Interview Preparation Matters</h2>
        <div class="grid-responsive">
            <div class="reveal">
                <p style="line-height: 1.8; color: var(--text-muted); margin-bottom: 20px;">
                    University and visa interviews are critical steps in your study abroad journey. A well-prepared interview can be the difference between acceptance and rejection. At Vistara Education, we provide comprehensive interview coaching tailored to your target university and country.
                </p>
                <p style="line-height: 1.8; color: var(--text-muted);">
                    Our experienced counselors conduct mock interviews, provide detailed feedback, and equip you with proven strategies to handle even the toughest questions with confidence.
                </p>
            </div>
            <div class="reveal">
                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=500" alt="Interview Preparation" loading="lazy" width="500" height="333" style="width: 100%; height: auto; border-radius: 15px; box-shadow: var(--shadow);">
            </div>
        </div>
    </div>
</section>

<!-- What We Cover -->
<section class="section" style="background: var(--bg-alt);">
    <div class="container">
        <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">What We Cover</h2>
        <div class="grid-3col-responsive">
            <div class="reveal card glass" style="padding: 30px; text-align: center;">
                <i class="fas fa-university" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 15px;">University Interviews</h3>
                <p style="color: var(--text-muted);">Prepare for admission interviews with top universities. Learn how to articulate your goals, achievements, and why you're the right fit.</p>
            </div>
            <div class="reveal card glass" style="padding: 30px; text-align: center;">
                <i class="fas fa-passport" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 15px;">Visa Interviews</h3>
                <p style="color: var(--text-muted);">Master the visa interview process. Understand what officers look for and how to present your case convincingly.</p>
            </div>
            <div class="reveal card glass" style="padding: 30px; text-align: center;">
                <i class="fas fa-comments" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 15px;">Mock Interviews</h3>
                <p style="color: var(--text-muted);">Practice with realistic mock interviews. Receive constructive feedback and improve your responses with each session.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="section">
    <div class="container">
        <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Our Coaching Process</h2>
        <div class="timeline reveal auto-grid-160">
            <div style="text-align: center;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px;">1</div>
                <h3 style="margin-bottom: 8px; font-size: 1rem;">Assessment</h3>
                <p style="color: #666; font-size: 0.9rem;">Evaluate your current skills</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px;">2</div>
                <h3 style="margin-bottom: 8px; font-size: 1rem;">Strategy Session</h3>
                <p style="color: #666; font-size: 0.9rem;">Personalized approach</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px;">3</div>
                <h3 style="margin-bottom: 8px; font-size: 1rem;">Mock Interviews</h3>
                <p style="color: #666; font-size: 0.9rem;">Practice & feedback</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #0fa3d0); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: bold; margin: 0 auto 15px;">4</div>
                <h3 style="margin-bottom: 8px; font-size: 1rem;">Final Review</h3>
                <p style="color: #666; font-size: 0.9rem;">Confidence building</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section cta-section" style="background: linear-gradient(135deg, var(--primary), var(--secondary)); text-align: center; color: white;">
    <div class="container">
        <h2 class="reveal" style="color: white;">Ready to Ace Your Interview?</h2>
        <p class="reveal" style="margin-bottom: 30px; font-size: 1.1rem;">Book a free consultation and start your interview preparation today.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary reveal" style="background: white; color: var(--primary);">Get Started</a>
    </div>
</section>
@endsection
