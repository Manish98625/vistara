<!-- Hero Section Component -->
<section class="hero-section">
    @if($items && count($items) > 0)
        @foreach($items as $index => $item)
            <div class="slide @if($index === 0) active @endif" style="background-image: url('{{ $item['image'] }}');">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="reveal">{{ $item['title'] }}</h1>
                        <p class="reveal">{{ $item['subtitle'] }}</p>
                        <div class="reveal">
                            @if(isset($item['cta_text']) && isset($item['cta_link']))
                                <a href="{{ $item['cta_link'] }}" class="btn btn-primary">{{ $item['cta_text'] }}</a>
                            @endif
                            @if(isset($item['secondary_text']) && isset($item['secondary_link']))
                                <a href="{{ $item['secondary_link'] }}" class="btn btn-secondary" style="margin-left: 15px;">{{ $item['secondary_text'] }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&q=80&w=1920');">
            <div class="container">
                <div class="hero-content">
                    <h1 class="reveal">{{ $title ?? 'Welcome to Vistara Education Pvt. Ltd.' }}</h1>
                    <p class="reveal">{{ $subtitle ?? 'Get expert counseling, university placement, and visa guidance.' }}</p>
                    <div class="reveal">
                        <a href="{{ route('contact') }}" class="btn btn-primary">{{ $cta_text ?? 'Book Free Consultation' }}</a>
                        @if(isset($secondary_text))
                            <a href="{{ $secondary_link ?? '#' }}" class="btn btn-secondary" style="margin-left: 15px;">{{ $secondary_text }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
