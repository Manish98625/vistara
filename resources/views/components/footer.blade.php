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
                    <li><a href="{{ route('service.show', 'counseling') }}">Counseling</a></li>
                    <li><a href="{{ route('service.show', 'visa') }}">Visa Processing</a></li>
                    <li><a href="{{ route('service.show', 'documentation') }}">Documentation</a></li>
                    <li><a href="{{ route('service.show', 'test-preparation') }}">Test Preparation</a></li>
                    <li><a href="{{ route('service.show', 'scholarship') }}">Scholarship Guidance</a></li>
                </ul>
            </div>

            <!-- 3. Courses -->
            <div class="footer-col">
                <h4>Courses</h4>
                <ul>
                    <li><a href="{{ route('course.show', 'it') }}">IT Courses</a></li>
                    <li><a href="{{ route('course.show', 'business') }}">Business Studies</a></li>
                    <li><a href="{{ route('course.show', 'nursing') }}">Nursing</a></li>
                    <li><a href="{{ route('course.show', 'engineering') }}">Engineering</a></li>
                    <li><a href="{{ route('course.show', 'hospitality') }}">Hospitality</a></li>
                </ul>
            </div>

            <!-- 4. Study Destinations -->
            <div class="footer-col">
                <h4>Study Destinations</h4>
                <ul>
                    <li><a href="{{ route('study.show', 'australia') }}">Australia</a></li>
                    <li><a href="{{ route('study.show', 'uk') }}">UK</a></li>
                    <li><a href="{{ route('study.show', 'usa') }}">USA</a></li>
                    <li><a href="{{ route('study.show', 'canada') }}">Canada</a></li>
                </ul>
            </div>

            <!-- 5. Contact & Newsletter -->
            <div class="footer-col footer-contact">
                <h4>Contact Info</h4>
                <p><i class="fas fa-map-marker-alt"></i> 123 Global Plaza, New Baneshwor, Kathmandu</p>
                <p><i class="fas fa-phone-alt"></i> +977 1 4445556</p>
                <p><i class="fas fa-envelope"></i> info@vistara.edu.np</p>

                <h4 style="margin-top: 30px;">Newsletter</h4>
                <form class="newsletter-form mt-20">
                    @csrf
                    <input type="email" name="email" placeholder="Your Email Address" required>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i></button>
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
