@extends('layouts.app')

@section('title', $course->title . ' | Vistara Education')
@section('meta_description', Str::limit($course->description ?? '', 160))
@section('canonical', url()->current())
@section('content')
    <section class="section page-header-padding">
        <div class="container course-detail-grid">
            <div class="course-details">
                <img src="{{ asset('uploads/' . $course->image) }}" alt="{{ $course->title }}" loading="lazy" width="800" height="450"
                    style="width: 100%; height: auto; aspect-ratio: 16/9; object-fit: cover; border-radius: 15px; margin-bottom: 30px;">
                <h1 style="margin-bottom: 20px;">{{ $course->title }}</h1>
                <p style="font-size: 1.1rem; color: var(--text-muted); margin-bottom: 20px;">{{ $course->description }}
                </p>

                <h3 style="margin-top: 40px; margin-bottom: 15px;">Popular Specializations</h3>
                <ul
                    style="list-style: none; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-bottom: 30px;">
                    <li><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i>
                        {{ $course->point_one }}</li>
                    <li><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i>
                        {{ $course->point_two }}</li>
                    <li><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i>
                        {{ $course->point_three }}</li>
                    <li><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i>
                        {{ $course->point_four }}</li>
                </ul>

                <h3 style="margin-top: 40px; margin-bottom: 15px;">Career Prospects</h3>
                <p style="color: var(--text-muted); margin-bottom: 20px;">{{ $course->career_prospects }}</p>
            </div>

            <div class="sidebar">
                <div class="card glass" style="padding: clamp(20px, 4vw, 30px); position: sticky; top: 100px;">
                    <h3 style="margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Quick
                        Facts</h3>
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-clock" style="color: var(--primary); width: 20px;"></i>
                            <div><strong>Duration:</strong><br><span
                                    style="color: var(--text-muted); font-size: 0.9rem;">{{ $course->duration }}</span>
                            </div>
                        </li>
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-calendar-alt" style="color: var(--primary); width: 20px;"></i>
                            <div><strong>Intakes:</strong><br><span
                                    style="color: var(--text-muted); font-size: 0.9rem;">{{ $course->intakes }}</span>
                            </div>
                        </li>
                        <li style="margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-money-bill-wave" style="color: var(--primary); width: 20px;"></i>
                            <div><strong>Average Fees:</strong><br><span
                                    style="color: var(--text-muted); font-size: 0.9rem;">{{ $course->average_fees }}</span>
                            </div>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-primary" style="width: 100%;">Apply for this Course</a>
                </div>
            </div>
        </div>
    </section>

@endsection

