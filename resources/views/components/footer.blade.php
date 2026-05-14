<!-- Big Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <!-- 1. Company -->
            <div class="footer-col">
                <a href="{{ route('home') }}" class="logo" style="margin-bottom: 20px; display: block;">
                    <img src="/assets/brand/vistara-logo-white.svg" alt="Vistara Logo" style="height: 60px; width: auto;">
                </a>
                <p style="color: #999; font-size: 0.9rem;">Vistara Education Pvt. Ltd. - Nepal's leading education
                    consultancy, guiding students toward their global academic dreams with integrity and expertise.</p>
                <ul style="margin-top: 15px;">
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('review') }}">Leave a Review</a></li>
                </ul>
            </div>

            <!-- 2. Services -->
            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    @php
                        $footerServices = \App\Models\Services::orderBy('display_order', 'ASC')->take(5)->get();
                    @endphp
                    @forelse($footerServices as $service)
                        <li><a href="{{ $service->id == 2 ? route('service.test-preparation') : route('service.show', $service->id) }}">{{ $service->title }}</a></li>
                    @empty
                        <li><a href="{{ route('services') }}">View All Services</a></li>
                    @endforelse
                </ul>
            </div>

            <!-- 3. Courses -->
            <div class="footer-col">
                <h4>Courses</h4>
                <ul>
                    @php
                        $footerCourses = \App\Models\Courses::orderBy('display_order', 'ASC')->take(5)->get();
                    @endphp
                    @forelse($footerCourses as $course)
                        <li><a href="{{ route('course.show', $course->id) }}">{{ $course->title }}</a></li>
                    @empty
                        <li><a href="{{ route('courses') }}">View All Courses</a></li>
                    @endforelse
                </ul>
            </div>

            <!-- 4. Study Destinations -->
            <div class="footer-col">
                <h4>Study Destinations</h4>
                <ul>
                    @php
                        $footerStudyAbroad = \App\Models\StudyAbroad::take(5)->get();
                    @endphp
                    @forelse($footerStudyAbroad as $study)
                        <li><a href="{{ route('study.show', $study->id) }}">{{ $study->title }}</a></li>
                    @empty
                        <li><a href="{{ route('study-abroad') }}">View All Destinations</a></li>
                    @endforelse
                </ul>
            </div>

            <!-- 5. Contact & Newsletter -->
            <div class="footer-col footer-contact">
                <h4>Contact Info</h4>
                <p><i class="fas fa-map-marker-alt"></i> 123 Global Plaza, New Baneshwor, Kathmandu</p>
                <p><i class="fas fa-phone-alt"></i> +977 1 4445556</p>
                <p><i class="fas fa-envelope"></i> info@vistara.edu.np</p>

                <h4 style="margin-top: 30px;">Newsletter</h4>
                <p class="newsletter-text">Get updates about study abroad opportunities, courses, and scholarship news.</p>
                @if (session('newsletter_success'))
                    <div class="newsletter-alert">{{ session('newsletter_success') }}</div>
                @endif
                <form class="newsletter-form mt-20" action="{{ route('newsletter.store') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Your Email Address" required>
                    <button type="submit" class="btn btn-primary btn-sm" aria-label="Subscribe to newsletter"><i class="fas fa-paper-plane"></i></button>
                </form>

                <div class="social-links" style="margin-top: 25px;">
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Vistara Education Pvt. Ltd. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="{{ route('terms') }}">Terms & Conditions</a>
                <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                <a href="{{ route('refund-policy') }}">Refund Policy</a>
            </div>
        </div>
    </div>
</footer>

