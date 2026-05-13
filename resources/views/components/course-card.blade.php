<!-- Course Card Component -->
<div class="course-card" style="border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;">
    <div style="background: linear-gradient(135deg, var(--primary), var(--primary-dark)); color: white; padding: 30px; text-align: center; min-height: 150px; display: flex; flex-direction: column; justify-content: center;">
        <h3 style="margin: 0; font-family: 'Playfair Display', serif;">{{ $course->title ?? $title }}</h3>
        <p style="margin: 10px 0 0 0; font-size: 0.9rem; opacity: 0.9;">{{ $course->intakes ?? '-' }} Intakes</p>
    </div>
    <div style="padding: 20px;">
        <p style="color: #666; font-size: 0.95rem; margin-bottom: 15px;">
            {{ Str::limit($course->description ?? $description ?? '', 100) }}
        </p>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; font-size: 0.9rem;">
            <span><strong>Fee:</strong> {{ $course->fees ?? 'N/A' }}</span>
            <span style="color: var(--primary); font-weight: 500;">{{ $course->duration ?? 'N/A' }}</span>
        </div>
        <a href="{{ route('course.show', $course->slug ?? Str::slug($title ?? '')) }}" class="btn btn-primary btn-sm" style="width: 100%; text-align: center;">View Details</a>
    </div>
</div>
