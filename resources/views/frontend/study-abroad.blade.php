@extends('layouts.app')

@section('title', 'Study Abroad Destinations | Vistara Education')
@section('meta_description', 'Explore top study destinations - Australia, UK, USA, Canada. Find the right country for your international education journey.')

@section('content')
<section class="page-header study-abroad-header" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('assets/img/banner.jpg') }}'); text-align: center; color: white; background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <h1 class="reveal" style="margin-bottom: 20px;">Study Abroad Destinations</h1>
        <p class="reveal" style="max-width: 800px; margin: 0 auto; line-height: 1.6;">Embark on a global journey. Explore world-class universities and endless opportunities in top international destinations.</p>
    </div>
</section>

<!-- Destinations List -->
<section class="section destinations-section">
    <div class="container">
        @foreach($countries  as $country)
              <div class="destinations-grid">
                <div class="reveal">
                    <img src="{{ asset('/uploads/' . $country->image) }}" alt="{{ $country->title }}" style="width: 100%; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                </div>
                <div class="reveal">
                    <h2 class="gradient-text">Study in {{ $country->title }}</h2>
                    <p style="margin-bottom: 20px; line-height: 1.6;">{{ Str::limit($country->description ?? '', 200) }}</p>
                    <ul style="list-style: none; margin-bottom: 30px; padding: 0;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Up to 4-6 years of Post-Study Work Visa</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Excellent Pathway to PR</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Safe and Welcoming Environment</li>
                    </ul>
                    <div class="destination-buttons">
                        <a href="{{ route('study.show', $country->id) }}" class="btn btn-outline">Learn More</a>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</section>

 <section class="section apply-section" style="background: var(--bg-alt);">
        <div class="container text-center">
            <h2 class="reveal">How to Apply</h2>
            <div class="apply-grid reveal">
                @foreach($apply as $step)
                    <div class="card glass apply-card">
                        <div class="apply-icon"><i class="{{$step->icon}}"></i></div>
                        <h4>{{$step->display_order}}. {{$step->title}}</h4>
                        <p>{{ $step->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
