<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\CourseDetailController;
use App\Http\Controllers\StudyCountryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestPreprationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/study-abroad', [PageController::class, 'studyAbroad'])->name('study-abroad');
Route::get('/interview-preparation', [PageController::class, 'interviewPreparation'])->name('interview-prep');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');


// Services Detail
Route::get('/services/{slug}', [ServiceDetailController::class, 'show'])->name('service.show');
Route::get('/test-preparation', [TestPreprationController::class, 'show'])->name('service.test-preparation');
Route::get('/courses/{slug}', [CourseDetailController::class, 'show'])->name('course.show');

// Study Destinations
Route::get('/study/{slug}', [StudyCountryController::class, 'show'])->name('study.show');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/inquiry', [ContactController::class, 'inquiry'])->name('inquiry');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store')->middleware('throttle:5,1');
Route::post('/inquiry', [ContactController::class, 'storeInquiry'])->name('inquiry.store')->middleware('throttle:5,1');
Route::post('/newsletter', [ContactController::class, 'storeNewsletter'])->name('newsletter.store')->middleware('throttle:5,1');

// Review
Route::get('/write-review', [ReviewController::class, 'show'])->name('review');
Route::post('/write-review', [ReviewController::class, 'store'])->name('review.store')->middleware('throttle:3,1');

// Authentication
Route::get('/signin', [AuthController::class, 'showLogin'])->name('login');
Route::get('/signup', [AuthController::class, 'showRegister'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.post')->middleware('throttle:10,1');
Route::post('/register', [AuthController::class, 'register'])->name('register.post')->middleware('throttle:5,1');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('backpack.auth.logout');
Route::post('/admin/logout', [AuthController::class, 'logout']);
Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email')->middleware('throttle:3,10');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPassword'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');


