@extends('layouts.app')

@section('title', 'Page Not Found | Vistara Education')
@section('meta_description', 'The page you are looking for could not be found.')
@section('canonical', url()->current())

@section('content')
<section class="section" style="min-height: 70vh; display: flex; align-items: center; text-align: center;">
    <div class="container">
        <div class="reveal">
            <div style="font-size: 8rem; font-weight: 800; color: var(--primary); line-height: 1; margin-bottom: 10px; opacity: 0.3;">404</div>
            <h1 style="font-size: 2rem; margin-bottom: 15px;">Page Not Found</h1>
            <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 500px; margin: 0 auto 30px;">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>
            <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('home') }}" class="btn btn-primary">
                    <i class="fas fa-home"></i> Back to Home
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
