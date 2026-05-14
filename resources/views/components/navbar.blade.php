<nav class="site-navbar scrolled">
    <div class="container nav-container">
        <a href="{{ route('home') }}" class="logo" aria-label="Vistara Education home">
            <img src="{{ asset('assets/brand/vistara-logo-main.svg') }}" alt="Vistara Education">
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

            <div class="nav-auth nav-auth-mobile">
                @auth
                    <span class="nav-user-badge"><i class="fas fa-user-check"></i> {{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="nav-logout-form">
                        @csrf
                        <button type="submit" class="btn btn-outline btn-sm nav-login-btn">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm nav-login-btn"><i class="fas fa-user"></i> Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i> Register</a>
                @endauth
            </div>
        </div>

        <div class="nav-auth">
            @auth
                <span class="nav-user-badge"><i class="fas fa-user-check"></i> {{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="nav-logout-form">
                    @csrf
                    <button type="submit" class="btn btn-outline btn-sm nav-login-btn">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-sm nav-login-btn"><i class="fas fa-user"></i> Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i> Register</a>
            @endauth
            <a href="{{ route('inquiry') }}" class="btn btn-secondary btn-sm nav-inquiry-btn"><i class="fas fa-paper-plane"></i> Inquiry</a>
        </div>

        <button class="hamburger" type="button" aria-label="Open navigation menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

