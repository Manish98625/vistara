// Vistara Education - Frontend Scripts

document.addEventListener('DOMContentLoaded', () => {
    // Navbar Scroll Effect
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });

    // Active Link Highlighting
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-links a').forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPath || (currentPath === '/' && href === '/')) {
            link.classList.add('active');
        }
    });

    // Mobile Menu & Dropdown Toggle
    const hamburger = document.querySelector('.hamburger');
    const navMain = document.querySelector('.nav-main');

    if (hamburger && navMain) {
        hamburger.addEventListener('click', () => {
            navMain.classList.toggle('active');
            hamburger.classList.toggle('active');
            hamburger.setAttribute('aria-expanded', navMain.classList.contains('active') ? 'true' : 'false');
            document.body.style.overflow = navMain.classList.contains('active') ? 'hidden' : '';
        });
    }

    // Dropdown Toggles for Mobile
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const link = dropdown.querySelector('a');
        const menu = dropdown.querySelector('.dropdown-menu');

        if (link && menu) {
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    dropdowns.forEach(d => {
                        if (d !== dropdown) {
                            d.classList.remove('active');
                        }
                    });
                    dropdown.classList.toggle('active');
                }
            });
        }
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (window.innerWidth <= 992 && navMain && hamburger) {
            if (!navMain.contains(e.target) && !hamburger.contains(e.target)) {
                navMain.classList.remove('active');
                hamburger.classList.remove('active');
                hamburger.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }
        }
    });

    // Close mobile menu on window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth > 992 && navMain && hamburger) {
            navMain.classList.remove('active');
            hamburger.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
    });

    // Hero Slider
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function nextSlide() {
        if (slides.length === 0) return;
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }

    if (slides.length > 0) {
        setInterval(nextSlide, 5000);
    }

    // Back to Top Button
    const backToTop = document.querySelector('.back-to-top');
    if (backToTop) {
        const toggleBackToTop = () => {
            if (window.scrollY > 400) {
                backToTop.classList.add('is-visible');
            } else {
                backToTop.classList.remove('is-visible');
            }
        };
        toggleBackToTop();
        window.addEventListener('scroll', toggleBackToTop, { passive: true });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Scroll Reveal Animation (Intersection Observer)
    const revealElements = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.8s ease-out';
        observer.observe(el);
    });

    // Testimonial Slider
    const track = document.querySelector('.testimonial-track');
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    let currentTestimonial = 0;

    function nextTestimonial() {
        if (!track || testimonialSlides.length === 0) return;
        currentTestimonial = (currentTestimonial + 1) % testimonialSlides.length;
        track.style.transform = `translateX(-${currentTestimonial * 100}%)`;
    }

    if (track && testimonialSlides.length > 0) {
        setInterval(nextTestimonial, 4000);
    }

    // Cookie Consent Banner
    const cookieBanner = document.getElementById('cookieBanner');
    const cookieAcceptBtn = document.getElementById('cookieAccept');

    function getCookie(name) {
        const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        return match ? match[2] : null;
    }

    function setCookie(name, value, days) {
        const expires = new Date(Date.now() + days * 864e5).toUTCString();
        document.cookie = name + '=' + value + '; expires=' + expires + '; path=/; SameSite=Lax';
    }

    if (cookieBanner && !getCookie('cookie_consent')) {
        cookieBanner.removeAttribute('hidden');
        setTimeout(() => cookieBanner.classList.add('is-visible'), 600);
    }

    if (cookieAcceptBtn) {
        cookieAcceptBtn.addEventListener('click', () => {
            setCookie('cookie_consent', 'accepted', 365);
            cookieBanner.classList.remove('is-visible');
            setTimeout(() => cookieBanner.setAttribute('hidden', ''), 400);
        });
    }
});
