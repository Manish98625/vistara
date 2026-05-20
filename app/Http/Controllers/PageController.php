<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Courses;
use App\Models\About;
use App\Models\StudentSupport;
use App\Models\ChooseUs;
use Illuminate\View\View;
use App\Models\StudyAbroad;
use App\Models\HowToApply;
use Illuminate\Http\Response;

class PageController extends Controller
{
    public function about(): View
    {
        $about = About::first();
        return view('frontend.about', ['about' => $about]);
    }

    public function services(): View
    {
        $services = Services::all();
        $support = StudentSupport::orderBy('display_order','ASC')->get();
        $choose = ChooseUs::orderBy('display_order','ASC')->get();
        return view('frontend.services', ['services' => $services,'choose' => $choose,'support' => $support]);
    }

    public function courses(): View
    {
        $courses = Courses::all();
        return view('frontend.courses', ['courses' => $courses]);
    }

    public function contact(): View
    {
        return view('frontend.contact');
    }

    public function blog(): View
    {
        return view('frontend.blog');
    }

    public function interviewPreparation(): View
    {
        return view('frontend.interview-preparation');
    }

    public function studyAbroad(): View
    {
        $countries = StudyAbroad::all();
        $apply = HowToApply::orderBy('display_order', 'ASC')->get();
        return view('frontend.study-abroad', ['countries' => $countries, 'apply' => $apply]);
    }

    public function privacyPolicy(): View
    {
        return view('frontend.pages.privacy-policy');
    }


    public function terms(): View
    {
        return view('frontend.pages.terms');
    }
}
