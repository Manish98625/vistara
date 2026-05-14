@extends('layouts.app')

@section('title', 'Study in ' . ($studyAbroad->title) . ' | Vistara Education')
@section('meta_description', Str::limit($studyAbroad->description , 160))
@section('canonical', url()->current())
@section('content')
<section class="section page-header-padding">
        <div class="container">
            <div class="grid grid-responsive">
                <div class="reveal">
                    <h1 class="gradient-text">Study in {{$studyAbroad->title}}</h1>
                    <p>{{$studyAbroad->description}}</p>
                    <div style="margin-top: 30px;">
                        <h4 style="color: var(--primary);">Key Benefits:</h4>
                        <ul style="margin-top: 15px; list-style: none;">
                            <li><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> {{$studyAbroad->benefit_one}}</li>
                            <li><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> {{$studyAbroad->benefit_two}}</li>
                            <li><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> {{$studyAbroad->benefit_three}}</li>
                        </ul>
                    </div>
                    <a href="{{route('contact')}}" class="btn btn-primary" style="margin-top: 30px;">Apply for {{ $studyAbroad->title }}</a>
                </div>
                <div class="reveal">
                    <img src="{{asset('/uploads/' . $studyAbroad->image) }}" alt="{{$studyAbroad->title}}" loading="lazy" style="width: 100%; border-radius: 20px; box-shadow: var(--shadow);">
                </div>
            </div>
        
            <div class="reveal" style="margin-top: 60px; background: var(--bg-alt); padding: clamp(25px, 5vw, 40px); border-radius: 15px;">
                <h2 style="text-align:left; margin-bottom:20px;">Study in {{ $studyAbroad->title }} Overview</h2>
                <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
                    <div><h4 style="color:var(--primary); margin-bottom:5px;">Why Study Here?</h4><p>{{$studyAbroad->why_study_here}}</p></div>
                    <div><h4 style="color:var(--primary); margin-bottom:5px;">Cost Overview</h4><p>{{$studyAbroad->cost_overview}}</p></div>
                    <div><h4 style="color:var(--primary); margin-bottom:5px;">Intake Information</h4><p>{{$studyAbroad->intake_information}}</p></div>
                    <div><h4 style="color:var(--primary); margin-bottom:5px;">Visa Difficulty & Process</h4><p>{{$studyAbroad->visa_difficulty_process}}</p></div>
                </div>
            </div>

            <!-- More Data: Admission & Top Universities -->
            <div class="reveal" style="margin-top: 60px;">
                <h2 style="text-align:center; margin-bottom: 40px;">Admission Requirements</h2>
                <div class="grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <div class="card glass text-center">
                        <i class="fas fa-graduation-cap" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                        <h4>Academic Scores</h4>
                        <p style="font-size: 0.9rem; margin-top: 10px;">{{$studyAbroad->academic_scores}}</p>
                    </div>
                    <div class="card glass text-center">
                        <i class="fas fa-language" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                        <h4>English Proficiency</h4>
                        <p style="font-size: 0.9rem; margin-top: 10px;">{{$studyAbroad->english_proficiency}}</p>
                    </div>
                    <div class="card glass text-center">
                        <i class="fas fa-file-invoice-dollar" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                        <h4>Financial Capacity</h4>
                        <p style="font-size: 0.9rem; margin-top: 10px;">{{$studyAbroad->financial_capacity}}</p>
                    </div>
                </div>
            </div>

            <div class="reveal" style="margin-top: 80px; margin-bottom: 50px;">
                <h2 style="text-align:center; margin-bottom: 40px;">Top Universities in {{$studyAbroad->title}}</h2>
                <div class="grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                    @foreach($universities as $university)
                    <div class="card" style="padding:0; overflow:hidden; border-radius:15px; box-shadow: var(--shadow);">
                        <img src="{{asset('/uploads/' . $university->image)}}" alt="{{ $university->name }}" loading="lazy" style="width: 100%; aspect-ratio: 16/9; object-fit: cover;">
                        <div style="padding: 20px;">
                            <h4 style="margin-bottom: 10px;">{{ $university->name }}</h4>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">{{ $university->location }}</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>

<!-- Immigration & Costs Section -->
<section class="section">
    <div class="container">
        <div class="grid-2col-responsive">
            <div class="reveal">
                <h2>Immigration Information</h2>
                <ul style="list-style: none; margin-top: 20px;">
                    <li style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #eee;">
                        <strong style="color: var(--primary);">Student Visa Duration:</strong>
                        <p style="color: #666; margin-top: 5px;">Valid for your course duration plus additional months</p>
                    </li>
                    <li style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #eee;">
                        <strong style="color: var(--primary);">Work Allowance:</strong>
                        <p style="color: #666; margin-top: 5px;">Part-time work during studies (20 hours/week)</p>
                    </li>
                    <li style="margin-bottom: 15px; padding-bottom: 15px;">
                        <strong style="color: var(--primary);">Post-Study Work Visa:</strong>
                        <p style="color: #666; margin-top: 5px;">Extended work authorization after graduation</p>
                    </li>
                </ul>
            </div>
            <div class="reveal">
                <h2>Quick Facts</h2>
                <ul style="list-style: none; margin-top: 20px;">
                    <li style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #eee;">
                        <strong style="color: var(--primary);">Language of Instruction:</strong>
                        <p style="color: #666; margin-top: 5px;">English</p>
                    </li>
                    <li style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #eee;">
                        <strong style="color: var(--primary);">Cost of Living:</strong>
                        <p style="color: #666; margin-top: 5px;">Varies by city and lifestyle</p>
                    </li>
                    <li style="margin-bottom: 15px; padding-bottom: 15px;">
                        <strong style="color: var(--primary);">Scholarship Opportunities:</strong>
                        <p style="color: #666; margin-top: 5px;">Available at most universities</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


@endsection

