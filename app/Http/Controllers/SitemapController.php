<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Courses;
use App\Models\Services;
use App\Models\StudyAbroad;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [];

        // Static pages
        $urls[] = $this->url('/', 'weekly', '1.0');
        $urls[] = $this->url('/about', 'monthly', '0.8');
        $urls[] = $this->url('/services', 'monthly', '0.8');
        $urls[] = $this->url('/courses', 'monthly', '0.8');
        $urls[] = $this->url('/study-abroad', 'monthly', '0.8');
        $urls[] = $this->url('/contact', 'monthly', '0.7');
        $urls[] = $this->url('/inquiry', 'monthly', '0.7');
        $urls[] = $this->url('/blog', 'weekly', '0.7');
        $urls[] = $this->url('/write-review', 'monthly', '0.6');
        $urls[] = $this->url('/interview-preparation', 'monthly', '0.6');
        $urls[] = $this->url('/privacy-policy', 'yearly', '0.3');
        $urls[] = $this->url('/terms', 'yearly', '0.3');

        // Dynamic: Blog posts
        $blogs = Blog::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->get(['slug', 'updated_at']);
        foreach ($blogs as $blog) {
            $urls[] = $this->url('/blog/' . $blog->slug, 'monthly', '0.6', $blog->updated_at);
        }

        // Dynamic: Courses
        $courses = Courses::get(['id', 'updated_at']);
        foreach ($courses as $course) {
            $urls[] = $this->url('/courses/' . $course->id, 'monthly', '0.6', $course->updated_at);
        }

        // Dynamic: Study destinations
        $countries = StudyAbroad::get(['id', 'updated_at']);
        foreach ($countries as $country) {
            $urls[] = $this->url('/study/' . $country->id, 'monthly', '0.6', $country->updated_at);
        }

        // Dynamic: Services
        $services = Services::get(['id', 'updated_at']);
        foreach ($services as $service) {
            $urls[] = $this->url('/services/' . $service->id, 'monthly', '0.6', $service->updated_at);
        }

        $xml = $this->buildXml($urls);

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }

    private function url(string $loc, string $changefreq, string $priority, ?string $lastmod = null): array
    {
        return [
            'loc' => 'https://vistaraedu.com.np' . $loc,
            'changefreq' => $changefreq,
            'priority' => $priority,
            'lastmod' => $lastmod ?? now()->toDateString(),
        ];
    }

    private function buildXml(array $urls): string
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $url) {
            $xml .= "    <url>\n";
            $xml .= "        <loc>" . htmlspecialchars($url['loc'], ENT_XML1, 'UTF-8') . "</loc>\n";
            $xml .= "        <lastmod>" . $url['lastmod'] . "</lastmod>\n";
            $xml .= "        <changefreq>" . $url['changefreq'] . "</changefreq>\n";
            $xml .= "        <priority>" . $url['priority'] . "</priority>\n";
            $xml .= "    </url>\n";
        }

        $xml .= "</urlset>\n";

        return $xml;
    }
}
