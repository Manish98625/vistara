<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    public function index(): View
    {
        $blogs = Blog::where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('frontend.blog', ['blogs' => $blogs]);
    }

    public function show($slug): View|Response
    {
        $blog = Blog::where('slug', $slug)
            ->where('published_at', '<=', now())
            ->first();

        if (!$blog) {
            abort(404, 'Blog post not found');
        }

        // Get related blogs
        $relatedBlogs = Blog::where('id', '!=', $blog->id)
            ->where('published_at', '<=', now())
            ->limit(3)
            ->get();

        return view('frontend.blog.show', [
            'blog' => $blog,
            'relatedBlogs' => $relatedBlogs,
        ]);
    }
}
