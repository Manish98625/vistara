@extends('layouts.app')

@section('title', $blog->title . ' | Vistara Education')
@section('meta_description', Str::limit($blog->excerpt ?? $blog->content, 160))
@section('canonical', url()->current())
@section('content')
<article class="section page-header-padding" style="max-width: 900px; margin: 0 auto;">
    <div class="reveal">
        @if($blog->featured_image)
            <img src="{{ $blog->featured_image }}" alt="{{ $blog->title }}" style="width: 100%; border-radius: 20px; box-shadow: var(--shadow); margin-bottom: 40px; max-height: 400px; object-fit: cover;">
        @else
            <div style="width: 100%; height: 300px; background: linear-gradient(135deg, var(--primary), var(--secondary)); border-radius: 20px; margin-bottom: 40px;"></div>
        @endif

        <div style="display: flex; gap: 20px; align-items: center; margin-bottom: 30px; padding-bottom: 20px; border-bottom: 2px solid #eee;">
            <span style="background: var(--primary); color: white; padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; text-transform: uppercase;">
                {{ $blog->category ?? 'Article' }}
            </span>
            <time style="color: #999;">{{ $blog->published_at?->format('F d, Y') ?? 'Recently published' }}</time>
        </div>

        <h1 style="margin-bottom: 30px; line-height: 1.3;">{{ $blog->title }}</h1>

        <div style="color: #555; line-height: 1.9; font-size: 1.05rem;">
            {!! nl2br(e($blog->content)) !!}
        </div>

        @if($blog->author)
            <div style="margin-top: 40px; padding-top: 30px; border-top: 2px solid #eee; background: var(--bg-alt); padding: 20px; border-radius: 10px;">
                <div style="display: flex; gap: 15px; align-items: center;">
                    <div>
                        <h4 style="margin: 0 0 5px 0;">{{ $blog->author }}</h4>
                        <p style="margin: 0; color: #999; font-size: 0.9rem;">Content Writer</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</article>

<!-- Related Blog Posts -->
@if($relatedBlogs && $relatedBlogs->count() > 0)
    <section class="section" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="reveal" style="text-align: center; margin-bottom: 40px;">Related Articles</h2>
            <div class="grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                @foreach($relatedBlogs as $relatedBlog)
                    <article class="card glass reveal" style="padding: 0; border-radius: 15px; overflow: hidden; display: flex; flex-direction: column;">
                        @if($relatedBlog->featured_image)
                            <img src="{{ $relatedBlog->featured_image }}" alt="{{ $relatedBlog->title }}" style="width: 100%; height: 200px; object-fit: cover;">
                        @else
                            <div style="width: 100%; height: 200px; background: linear-gradient(135deg, var(--primary), var(--secondary));"></div>
                        @endif
                        <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                            <h3 style="margin-bottom: 10px; font-size: 1.1rem;">{{ Str::limit($relatedBlog->title, 50) }}</h3>
                            <p style="font-size: 0.9rem; color: #666; flex-grow: 1;">{{ Str::limit($relatedBlog->excerpt ?? $relatedBlog->content, 100) }}</p>
                            <div style="margin-top: 15px; border-top: 1px solid #eee; padding-top: 15px;">
                                <small style="color: #999;">{{ $relatedBlog->published_at?->format('M d, Y') }}</small><br>
                                <a href="{{ route('blog.show', $relatedBlog->slug) }}" style="color: var(--primary); text-decoration: none; font-weight: 600; margin-top: 10px; display: inline-block;">Read More →</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endif

<!-- Call to action -->
@include('components.cta-section', [
    'title' => 'Ready to Take Action?',
    'description' => 'Our expert counselors are here to help you with your study abroad journey. Book a free consultation today.',
    'button_text' => 'Book Free Consultation',
    'button_link' => route('contact')
])
@endsection
