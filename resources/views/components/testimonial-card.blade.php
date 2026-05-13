<!-- Testimonial Card Component -->
<div class="testimonial-card" style="background: #f9f9f9; border-radius: 10px; padding: 25px; text-align: center; border-left: 4px solid var(--primary);">
    <div style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">
        <i class="fas fa-quote-left"></i>
    </div>
    <p style="color: #555; font-size: 0.95rem; margin-bottom: 20px; font-style: italic;">
        "{{ $testimonial->content ?? $content }}"
    </p>
    <div style="border-top: 1px solid #ddd; padding-top: 15px;">
        <h4 style="margin: 0 0 5px 0; color: #333;">{{ $testimonial->student_name ?? $name }}</h4>
        <p style="margin: 0; color: #999; font-size: 0.85rem;">
            {{ $testimonial->course ?? $course ?? '' }}
            @if(isset($testimonial->university) || isset($university))
                • {{ $testimonial->university ?? $university ?? '' }}
            @endif
        </p>
        @if(isset($testimonial->rating) || isset($rating))
            <div style="margin-top: 8px; color: #ffc107;">
                @for($i = 0; $i < ($testimonial->rating ?? $rating ?? 5); $i++)
                    <i class="fas fa-star"></i>
                @endfor
            </div>
        @endif
    </div>
</div>
