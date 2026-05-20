@extends('layouts.app')

@section('title', 'Services | Vistara Education')
@section('meta_description',
    'Explore our comprehensive range of educational services designed to support your journey
    towards overseas study. We offer counseling, visa guidance, test preparation, and more.')
@section('canonical', url()->current())
@section('content')

    <!-- Services Header Section -->
    <section class="section page-header-padding">
        <div class="container">
            <h1 class="reveal" style="text-align: center;">Our Services</h1>
            <p class="reveal" style="text-align: center; max-width: 800px; margin: 0 auto 50px; color: var(--text-muted);">
                From the moment you decide to study abroad to the day you land in your dream destination, our expert team
                provides comprehensive support every step of the way.</p>

            <div class="grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">

                @forelse($services as $service)
                    <div class="card glass reveal"
                        style="padding: 40px; text-align: center; display: flex; flex-direction: column; cursor: pointer;"
                        onclick="location.href='{{ route('service.show', $service->id) }}'">
                        <i class="{{ $service->icon ?? 'fas fa-star' }}"
                            style="font-size: 3rem; color: var(--primary); margin-bottom: 20px;"></i>
                        <h3 style="margin-bottom: 15px;">{{ $service->title }}</h3>
                        <p style="color: var(--text-muted); flex-grow: 1; margin-bottom: 20px;">
                            {{ isset($service->short_description) && $service->short_description ? $service->short_description : substr($service->description, 0, 100) . '...' }}
                        </p>
                        <a href="{{ route('service.show', $service->id) }}" class="btn btn-outline btn-sm">Learn More</a>
                    </div>
                @empty
                    <p style="grid-column: 1 / -1; text-align: center; color: var(--text-muted);">No services available at
                        the moment.</p>
                @endforelse

            </div>
        </div>
    </section>


    <!-- Why Choose Us Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Why Choose Vistara?</h2>
            <p class="reveal" style="text-align: center; max-width: 700px; margin: 0 auto 60px; color: var(--text-muted);">
                We are the trusted partner of thousands of students who have achieved their dreams of studying abroad.
            </p>

            <div class="grid auto-grid-300">
                @foreach ($choose as $chose)
                    <div class="card glass reveal"
                        style="padding: 35px; text-align: center; display: flex; flex-direction: column; align-items: center; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="{{ $chose->icon }}"
                            style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                        <h3 style="margin-bottom: 12px;">{{ $chose->title }}</h3>
                        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">{{ $chose->description }}
                        </p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>





    <!-- Student Support Section -->
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Comprehensive Student Support</h2>

            <div class="grid auto-grid-240">
                @foreach ($support as $sup)
                    <div class="card glass reveal"
                        style="padding: 30px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="{{ $sup->icon }}"
                            style="font-size: 2.5rem; color: var(--primary); margin-bottom: 12px;"></i>
                        <h4 style="margin-bottom: 10px;">{{ $sup->title }}</h4>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.5;">{{ $sup->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>






@endsection

@if(isset($support) && count($support) > 0)
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Student Support Services",
    "itemListElement": [
        @foreach($support as $index => $sup)
        {
            "@type": "ListItem",
            "position": {{ $index + 1 }},
            "item": {
                "@type": "Service",
                "name": "{{ $sup->title }}",
                "description": "{{ Str::limit(strip_tags($sup->description), 150) }}"
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endif
