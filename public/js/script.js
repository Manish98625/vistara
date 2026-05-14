// Premium Consultancy Script - Inspired by The Next

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

    // Active Link Highlighting (Fix for Absolute Paths)
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-links a').forEach(link => {
        const href = link.getAttribute('href');
        // Check if exact match or if home page
        if (href === currentPath || (currentPath === '/' && href === '/index.html') || (currentPath === '/index.html' && href === '/')) {
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
            // Prevent body scroll when menu is open
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
                    // Close other dropdowns
                    dropdowns.forEach(d => {
                        if (d !== dropdown) {
                            d.classList.remove('active');
                        }
                    });
                    // Toggle current dropdown
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

    // Form Validation
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Simple validation
            const inputs = contactForm.querySelectorAll('input, textarea');
            let valid = true;
            inputs.forEach(input => {
                if (input.hasAttribute('required') && !input.value) {
                    valid = false;
                    input.style.borderColor = 'red';
                } else {
                    input.style.borderColor = '#eee';
                }
            });

            if (valid) {
                alert('Thank you! Your inquiry has been sent.');
                contactForm.reset();
            }
        });
    }
    // ==========================================
    // AUTH SYSTEM (localStorage-based)
    // ==========================================

    // --- Check Auth State on Every Page ---
    const currentUser = JSON.parse(localStorage.getItem('tnUser'));
    const navAuth = document.querySelector('.nav-auth');
    const currentPage = window.location.pathname;

    // If logged in: redirect away from signin/signup pages
    if (currentUser) {
        if (currentPage.includes('signin.html') || currentPage.includes('signup.html')) {
            window.location.href = '/index.html';
            return;
        }
    }

    // If logged in: replace Login/Register buttons with user info + logout
    if (currentUser && navAuth) {
        const initials = (currentUser.firstName[0] + (currentUser.lastName ? currentUser.lastName[0] : '')).toUpperCase();
        navAuth.innerHTML = `
            <div class="user-profile-nav" style="display: flex; align-items: center; gap: 12px;">
                <img src="https://ui-avatars.com/api/?name=${encodeURIComponent(initials)}&background=0D8ABC&color=fff&rounded=true&size=36" 
                     alt="${currentUser.firstName}" 
                     style="width: 36px; height: 36px; border-radius: 50%; border: 2px solid var(--primary);">
                <span style="font-weight: 600; font-size: 0.9rem; color: var(--text); white-space: nowrap;">${currentUser.firstName}</span>
                <button id="logoutBtn" class="btn btn-outline btn-sm" style="font-size: 0.8rem; padding: 6px 14px;">Logout</button>
            </div>
        `;

        // Logout handler
        document.getElementById('logoutBtn').addEventListener('click', () => {
            localStorage.removeItem('tnUser');
            window.location.href = '/index.html';
        });
    }

    // --- Signup Form Handler ---
    const signupForm = document.getElementById('signupForm');
    if (signupForm) {
        signupForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }

            // Save user data to localStorage
            const userData = {
                firstName: document.getElementById('firstName').value,
                lastName: document.getElementById('lastName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value
            };
            localStorage.setItem('tnUser', JSON.stringify(userData));

            alert('Registration successful! Welcome to The Next.');
            window.location.href = '/index.html';
        });
    }

    // --- Signin Form Handler ---
    const signinForm = document.getElementById('signinForm');
    if (signinForm) {
        signinForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = document.getElementById('email').value;

            // Create a session from the email (extract name from email prefix)
            const emailName = email.split('@')[0];
            const nameParts = emailName.split(/[._-]/);
            const firstName = nameParts[0].charAt(0).toUpperCase() + nameParts[0].slice(1);
            const lastName = nameParts.length > 1 ? nameParts[1].charAt(0).toUpperCase() + nameParts[1].slice(1) : '';

            const userData = {
                firstName: firstName,
                lastName: lastName,
                email: email
            };
            localStorage.setItem('tnUser', JSON.stringify(userData));

            window.location.href = '/index.html';
        });
    }

    // ==========================================
    // TESTIMONIAL SLIDER
    // ==========================================
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
});
