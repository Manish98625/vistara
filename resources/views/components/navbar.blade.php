<!-- Navigation -->
<nav class="scrolled">
    <div class="container nav-container">
        <a href="{{ route('home') }}" class="logo">
            <img src="/assets/brand/vistara-logo-main.svg" alt="Vistara Logo" style="height: 60px; width: auto;">
        </a>

        <div class="nav-main">
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li class="dropdown">
                    <a href="{{ route('services') }}">Services <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        @php
                            $services = \App\Models\Services::orderBy('display_order', 'ASC')->get();
                        @endphp
                        @forelse($services as $service)
                            <li><a
                                    href="{{ $service->id == 2 ? route('service.test-preparation') : route('service.show', $service->id) }}">{{ $service->title }}</a>
                            </li>
                        @empty
                            <li><a href="{{ route('services') }}">View All Services</a></li>
                        @endforelse
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('courses') }}">Courses <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        @php
                            $courses = \App\Models\Courses::orderBy('display_order', 'ASC')->get();
                        @endphp
                        @foreach ($courses as $course)
                            <li><a href="{{ route('course.show', $course->id) }}">{{ $course->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('study-abroad') }}">Study Abroad <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                     @php
                            $StudyAbroad = \App\Models\StudyAbroad::get();
                        @endphp
                        @foreach ($StudyAbroad as $study)
                            <li><a href="{{ route('study.show', $study->id) }}">{{ $study->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="nav-auth">
            <a href="{{ route('login') }}" class="btn btn-outline btn-sm">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
        </div>

        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</nav>
