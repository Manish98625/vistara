@extends('layouts.app')

@section('title', 'Write a Review | Vistara Education')
@section('meta_description', 'Share your experience with Vistara Education. Your feedback helps us improve and guides future students in their study abroad journey.')

@section('content')
<!-- Hero -->
<section class="hero-section" style="background: linear-gradient(135deg, rgba(165, 0, 0, 0.7), rgba(75, 54, 124, 0.7)), url('https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=1920') center/cover; min-height: 350px; display: flex; align-items: center;">
    <div class="container">
        <div style="max-width: 700px; color: white;">
            <h1 class="reveal" style="font-size: clamp(2rem, 8vw, 3.5rem); margin-bottom: 20px;">Share Your Experience</h1>
            <p class="reveal" style="font-size: 1.1rem; line-height: 1.8; color: rgba(255,255,255,0.95);">Your feedback helps us improve and guides future students toward their dreams.</p>
        </div>
    </div>
</section>

<!-- Review Form -->
<section class="section">
    <div class="container" style="max-width: 700px;">
        @if(session('success'))
            <div class="alert alert-success reveal" style="background: #d4edda; color: #155724; padding: 20px; border-radius: 10px; margin-bottom: 30px; text-align: center;">
                <i class="fas fa-check-circle" style="font-size: 2rem; margin-bottom: 10px;"></i>
                <p style="font-size: 1.1rem;">{{ session('success') }}</p>
            </div>
        @endif

        <div class="card reveal" style="padding: 40px;">
            <h2 style="text-align: center; margin-bottom: 10px;">Write a Review</h2>
            <p style="text-align: center; color: var(--text-muted); margin-bottom: 30px;">Tell us about your experience with Vistara Education</p>

            <form action="{{ route('review.store') }}" method="POST">
                @csrf

                <div style="position: absolute; left: -9999px;" aria-hidden="true">
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="name" style="display: block; margin-bottom: 8px; font-weight: 500;">Your Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;"
                        placeholder="Enter your full name">
                    @error('name') <small style="color: red;">{{ $message }}</small> @enderror
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <label for="course" style="display: block; margin-bottom: 8px; font-weight: 500;">Course</label>
                        <input type="text" id="course" name="course" value="{{ old('course') }}"
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;"
                            placeholder="e.g., IELTS Preparation">
                    </div>
                    <div>
                        <label for="university" style="display: block; margin-bottom: 8px; font-weight: 500;">University (if placed)</label>
                        <input type="text" id="university" name="university" value="{{ old('university') }}"
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;"
                            placeholder="e.g., University of Melbourne">
                    </div>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Rating *</label>
                    <div style="display: flex; gap: 10px; font-size: 1.5rem; color: #ffc107;" id="star-rating">
                        @for($i = 1; $i <= 5; $i++)
                            <label style="cursor: pointer;">
                                <input type="radio" name="rating" value="{{ $i }}" {{ old('rating') == $i ? 'checked' : '' }} style="display: none;">
                                <i class="fas fa-star" data-value="{{ $i }}"></i>
                            </label>
                        @endfor
                    </div>
                    @error('rating') <small style="color: red;">{{ $message }}</small> @enderror
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="content" style="display: block; margin-bottom: 8px; font-weight: 500;">Your Review *</label>
                    <textarea id="content" name="content" rows="5" required
                        style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; resize: vertical;"
                        placeholder="Share your experience with Vistara Education...">{{ old('content') }}</textarea>
                    @error('content') <small style="color: red;">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-size: 1.1rem;">
                    <i class="fas fa-paper-plane"></i> Submit Review
                </button>
            </form>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('#star-rating .fa-star');
    const radios = document.querySelectorAll('#star-rating input[type="radio"]');

    function highlightStars(value) {
        stars.forEach(star => {
            const starValue = parseInt(star.dataset.value);
            if (starValue <= value) {
                star.classList.remove('far');
                star.classList.add('fas');
            } else {
                star.classList.remove('fas');
                star.classList.add('far');
            }
        });
    }

    stars.forEach(star => {
        star.addEventListener('mouseenter', () => {
            highlightStars(parseInt(star.dataset.value));
        });
        star.addEventListener('click', () => {
            const radio = document.querySelector(`input[value="${star.dataset.value}"]`);
            if (radio) radio.checked = true;
            highlightStars(parseInt(star.dataset.value));
        });
    });

    document.querySelector('#star-rating').addEventListener('mouseleave', () => {
        const checked = document.querySelector('input[name="rating"]:checked');
        highlightStars(checked ? parseInt(checked.value) : 0);
    });

    // Initialize
    const checked = document.querySelector('input[name="rating"]:checked');
    if (checked) highlightStars(parseInt(checked.value));
});
</script>
@endpush
@endsection
