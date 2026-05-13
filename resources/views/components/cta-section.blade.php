<!-- CTA Section Component -->
<section class="cta-section" style="background: linear-gradient(135deg, var(--primary), var(--primary-dark)); color: white; padding: 80px 20px; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px; font-family: 'Playfair Display', serif;">{{ $title }}</h2>
        @if(isset($description))
            <p style="font-size: 1.1rem; margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">{{ $description }}</p>
        @endif
        <a href="{{ $button_link ?? route('contact') }}" class="btn btn-light btn-lg">{{ $button_text ?? 'Get Started' }}</a>
    </div>
</section>
