<!-- CTA Section Component -->
<section class="section" style="background: linear-gradient(135deg, var(--primary), var(--secondary)); color: white; text-align: center;">
    <div class="container">
        <h2 class="reveal" style="color: white; margin-bottom: 20px;">{{ $title }}</h2>
        @if(isset($description))
            <p class="reveal" style="font-size: 1.1rem; margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto; opacity: 0.95;">{{ $description }}</p>
        @endif
        <a href="{{ $button_link ?? route('contact') }}" class="btn btn-primary reveal" style="background: white; color: var(--primary); font-weight: 600;">{{ $button_text ?? 'Get Started' }}</a>
    </div>
</section>
