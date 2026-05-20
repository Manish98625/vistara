@extends('layouts.app')

@section('title', 'Blog | Vistara Education')
@section('meta_description',
    'Read latest articles and insights about studying abroad, visa tips, university selection,
    and career guidance.')
@section('canonical', url()->current())
@section('content')
    <section class="section page-header-padding">
        <div class="container">
            <h1 class="reveal">Latest Updates</h1>
            <div class="auto-grid-350 mt-50">
                @forelse($blogs as $blog)
                    <article class="card glass reveal"
                        style="padding: 0; border-radius: 15px; overflow: hidden; display: flex; flex-direction: column;">
                        @if ($blog->featured_image)
                            <img src="{{ $blog->featured_image }}" alt="{{ $blog->title }}"
                                style="width: 100%; height: 200px; object-fit: cover;">
                        @else
                            <div
                                style="width: 100%; height: 200px; background: linear-gradient(135deg, var(--primary), var(--secondary));">
                            </div>
                        @endif
                        <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                            <span
                                style="color: var(--primary); font-size: 0.8rem; font-weight: 600; text-transform: uppercase;">{{ $blog->category ?? 'Article' }}</span>
                            <h3 style="margin: 10px 0;">{{ Str::limit($blog->title, 50) }}</h3>
                            <p style="font-size: 0.9rem; color: #666; flex-grow: 1;">
                                {{ Str::limit($blog->excerpt ?? $blog->content, 100) }}</p>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px; border-top: 1px solid #eee; padding-top: 15px;">
                                <small
                                    style="color: #999;">{{ $blog->published_at?->format('M d, Y') ?? 'Recently published' }}</small>
                                <a href="{{ route('blog.show', $blog->slug) }}"
                                    style="color: var(--primary); text-decoration: none; font-weight: 600;">Read More →</a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                        <p style="color: var(--text-muted); font-size: 1.1rem;">No blog posts yet.</p>
                    </div>
                @endforelse
            </div>

            @if ($blogs instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div style="margin-top: 50px; display: flex; justify-content: center; gap: 10px;">
                    {{ $blogs->links() }}
                </div>
            @endif
        </div>
    </section>


@endsection

@if(isset($blogs) && count($blogs) > 0)
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "Vistara Education Blog",
    "description": "Read latest articles and insights about studying abroad, visa tips, university selection, and career guidance.",
    "url": "{{ url()->current() }}",
    "blogPost": [
        @foreach($blogs as $index => $blog)
        {
            "@type": "BlogPosting",
            "headline": "{{ $blog->title }}",
            "description": "{{ Str::limit(strip_tags($blog->excerpt ?? $blog->content), 150) }}",
            "url": "{{ route('blog.show', $blog->slug) }}",
            "datePublished": "{{ $blog->published_at?->toIso8601String() }}"
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endif
