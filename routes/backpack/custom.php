<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('courses', 'CoursesCrudController');
    Route::crud('services', 'ServicesCrudController');
    Route::crud('about', 'AboutCrudController');
    Route::crud('home-setting', 'HomeSettingCrudController');
    Route::crud('study-abroad', 'StudyAbroadCrudController');
    Route::crud('university', 'UniversityCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('banner', 'BannerCrudController');
    Route::crud('testimonial', 'TestimonialCrudController');
    Route::crud('service-discription', 'ServiceDiscriptionCrudController');
    Route::crud('faq', 'FaqCrudController');
    Route::crud('student-support', 'StudentSupportCrudController');
    Route::crud('choose-us', 'ChooseUsCrudController');
    Route::crud('courses-detail', 'CoursesDetailCrudController');
    Route::crud('study-abroad-details', 'StudyAbroadDetailsCrudController');
    Route::crud('how-to-apply', 'HowToApplyCrudController');
    Route::crud('blog', 'BlogCrudController');
    Route::crud('contact', 'ContactCrudController');
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
