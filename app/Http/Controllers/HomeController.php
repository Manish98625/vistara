<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Courses;
use App\Models\Testimonial;
use App\Models\Banner;
use App\Models\Faq;
use App\Models\HomeSetting;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $banners = Banner::get();
        $services = Services::limit(6)->get();
        $courses = Courses::limit(6)->get();
        $testimonials = Testimonial::where('status', true)->limit(6)->get();
        $settings = HomeSetting::first();
        $faqs = Faq::orderBy('display_order')->get();
        return view('frontend.home', [
            'banners' => $banners,
            'services' => $services,
            'courses' => $courses,
            'testimonials' => $testimonials,
            'settings' => $settings,
            'faqs' => $faqs,
        ]);
    }
}
