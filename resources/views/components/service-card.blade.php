<!-- Service Card Component -->
<div class="service-card"
    style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 30px; text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s; background: white;">
    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 15px;">
        <i class="{{ $service->icon ?? ($icon ?? 'fas fa-star') }}"></i>
    </div>
    <h3 style="margin: 15px 0; font-family: 'Playfair Display', serif;">{{ $service->title ?? $title }}</h3>
    <p style="color: #666; font-size: 0.95rem; margin-bottom: 20px;">
        {{ Str::limit($service->description ?? ($description ?? ''), 120) }}
    </p>
    <a href="{{ route('service.show', $service->slug ?? Str::slug($title ?? '')) }}" class="btn btn-primary btn-sm">Learn
        More</a>
</div>
