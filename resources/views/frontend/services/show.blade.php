@extends('layouts.app')
@foreach ($servicediscp as $discp)
    @section('title', $discp->title . ' | Vistara Education')
    @section('meta_description', Str::limit($discp->description ?? '', 160))
    @section('canonical', url()->current())
    @section('content')
        <section class="section page-header-padding">
            <div class="container">
                <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                    <h1 class="reveal">{{ $discp->title }}</h1>
                    <p class="reveal">{{ $discp->description ?? '' }}</p>
                </div>

                <div class="grid-2col-responsive reveal">
                    <div class="reveal">
                        <h2>{{ $discp->sec_title }}</h2>
                        @if ($discp->sec_desc)
                            <p style="margin-top: 20px; color: #555; line-height: 1.8;">{{ $discp->sec_desc }}</p>
                        @endif
                        @if ($discp->short_title)
                            <h3 style="margin-top: 30px; margin-bottom: 15px;">{{ $discp->short_title }}</h3>
                        @else
                            <h3 style="margin-top: 30px; margin-bottom: 15px;"></h3>
                        @endif
                        <ul style="list-style: none;">
                            <li style="margin-bottom: 15px; display: flex; gap: 10px;">
                                <i class="fas fa-check-circle" style="color: var(--primary); flex-shrink: 0;"></i>
                                <span>{{ $discp->point_one }}</span>
                            </li>
                            <li style="margin-bottom: 15px; display: flex; gap: 10px;">
                                <i class="fas fa-check-circle" style="color: var(--primary); flex-shrink: 0;"></i>
                                <span>{{ $discp->point_two }}</span>
                            </li>
                            <li style="margin-bottom: 15px; display: flex; gap: 10px;">
                                <i class="fas fa-check-circle" style="color: var(--primary); flex-shrink: 0;"></i>
                                <span>{{ $discp->point_three }}</span>
                            </li>
                            <li style="margin-bottom: 15px; display: flex; gap: 10px;">
                                <i class="fas fa-check-circle" style="color: var(--primary); flex-shrink: 0;"></i>
                                <span>{{ $discp->point_four }}</span>
                            </li>
                            <li style="margin-bottom: 15px; display: flex; gap: 10px;">
                                <i class="fas fa-check-circle" style="color: var(--primary); flex-shrink: 0;"></i>
                                <span>{{ $discp->point_five }}</span>
                            </li>
                            @if ($discp->point_six)
                                <li style="margin-bottom: 15px; display: flex; gap: 10px;">
                                    <i class="fas fa-check-circle" style="color: var(--primary); flex-shrink: 0;"></i>
                                    <span>{{ $discp->point_six }}</span>
                                </li>
                            @endif
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top: 30px;">Get
                            Documentation
                            Support</a>
                    </div>
                    <div class="reveal">
                        <img src="{{ asset('/uploads/' . $discp->image) }}" alt="{{ $discp->short_title }}"
                            width="500" height="333" style="width: 100%; height: auto; border-radius: 20px; box-shadow: var(--shadow);">
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <!-- Related Services -->
    @if ($service->id == 1)
        <!-- Process Section -->
        <section class="section" style="background: var(--bg-alt);">
            <div class="container">
                <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Our Counseling Process</h2>
                <div class="timeline reveal"
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px;">
                    <div style="text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold; margin: 0 auto 15px;">
                            1</div>
                        <h3 style="font-size: 1rem;">Initial Assessment</h3>
                        <p style="color: #666;">We understand your goals, background, and preferences</p>
                    </div>
                    <div style="text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold; margin: 0 auto 15px;">
                            2</div>
                        <h3 style="font-size: 1rem;">Profile Evaluation</h3>
                        <p style="color: #666;">In-depth analysis of your academic profile</p>
                    </div>
                    <div style="text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold; margin: 0 auto 15px;">
                            3</div>
                        <h3 style="font-size: 1rem;">Recommendations</h3>
                        <p style="color: #666;">Customized suggestions for universities and courses</p>
                    </div>
                    <div style="text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold; margin: 0 auto 15px;">
                            4</div>
                        <h3 style="font-size: 1rem;">Ongoing Support</h3>
                        <p style="color: #666;">Continuous guidance throughout your journey</p>
                    </div>
                </div>
            </div>
        </section>
    @elseif($service->id == 3)
        <!-- Why Documentation Matters -->
        <section class="section" style="background: var(--bg-alt);">
            <div class="container">
                <h2 class="reveal" style="text-align: center; margin-bottom: 40px;">Why Quality Documentation Matters</h2>
                <div class="grid"
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <div class="card glass reveal" style="padding: 30px;">
                        <i class="fas fa-target" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                        <h3>Strong Applications</h3>
                        <p style="color: #666;">Well-written documents increase your chances of university acceptance and
                            scholarships.</p>
                    </div>
                    <div class="card glass reveal" style="padding: 30px;">
                        <i class="fas fa-award" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                        <h3>Professional Image</h3>
                        <p style="color: #666;">Polished documents present you as a serious and motivated candidate to
                            universities.</p>
                    </div>
                    <div class="card glass reveal" style="padding: 30px;">
                        <i class="fas fa-check" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 15px;"></i>
                        <h3>Visa Success</h3>
                        <p style="color: #666;">Complete and accurate documents are crucial for visa approval and officer
                            interviews.</p>
                    </div>
                </div>
            </div>
        </section>
    @elseif($service->id == 4)
        <!-- Success Statistics -->
        <section class="section" style="background: var(--bg-alt);">
            <div class="container">
                <h2 class="reveal" style="text-align: center; margin-bottom: 50px;">Our Track Record</h2>
                <div class="grid"
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; text-align: center;">
                    <div class="reveal">
                        <h2 style="color: var(--primary); font-size: 3rem; margin-bottom: 10px;">98%</h2>
                        <p style="color: #666;">Visa Success Rate</p>
                    </div>
                    <div class="reveal">
                        <h2 style="color: var(--primary); font-size: 3rem; margin-bottom: 10px;">5000+</h2>
                        <p style="color: #666;">Successful Visas</p>
                    </div>
                    <div class="reveal">
                        <h2 style="color: var(--primary); font-size: 3rem; margin-bottom: 10px;">12+</h2>
                        <p style="color: #666;">Years of Experience</p>
                    </div>
                    <div class="reveal">
                        <h2 style="color: var(--primary); font-size: 3rem; margin-bottom: 10px;">4</h2>
                        <p style="color: #666;">Countries Supported</p>
                    </div>
                </div>
            </div>
        </section>
    @elseif($service->id == 5)
        <!-- Scholarship Types -->
        <section class="section" style="background: var(--bg-alt);">
            <div class="container">
                <h2 class="reveal" style="text-align: center; margin-bottom: 40px;">Types of Scholarships We Help With
                </h2>
                <div class="grid"
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
                    <div class="card glass reveal" style="padding: 30px;">
                        <h3 style="color: var(--primary); margin-bottom: 15px;">Merit-Based Scholarships</h3>
                        <p style="color: #666;">Awarded based on academic excellence, test scores, and achievements.</p>
                    </div>
                    <div class="card glass reveal" style="padding: 30px;">
                        <h3 style="color: var(--primary); margin-bottom: 15px;">University Scholarships</h3>
                        <p style="color: #666;">Direct scholarships from universities for international students.</p>
                    </div>
                    <div class="card glass reveal" style="padding: 30px;">
                        <h3 style="color: var(--primary); margin-bottom: 15px;">Government Scholarships</h3>
                        <p style="color: #666;">Funding from government programs like Chevening, DAAD, AuStudy.</p>
                    </div>
                    <div class="card glass reveal" style="padding: 30px;">
                        <h3 style="color: var(--primary); margin-bottom: 15px;">Need-Based Scholarships</h3>
                        <p style="color: #666;">Support for students with demonstrated financial need.</p>
                    </div>
                    <div class="card glass reveal" style="padding: 30px;">
                        <h3 style="color: var(--primary); margin-bottom: 15px;">Subject-Specific Scholarships</h3>
                        <p style="color: #666;">Funding for students pursuing specific fields of study.</p>
                    </div>
                    <div class="card glass reveal" style="padding: 30px;">
                        <h3 style="color: var(--primary); margin-bottom: 15px;">Destination Scholarships</h3>
                        <p style="color: #666;">Country-specific scholarships for studying abroad.</p>
                    </div>
                </div>
            </div>
        </section>
    @endif



@endsection
