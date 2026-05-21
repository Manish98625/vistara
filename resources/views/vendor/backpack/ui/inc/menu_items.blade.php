{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>
<x-backpack::menu-item title="Users" icon="la la-user nav-icon" :link="backpack_url('user')" />
<x-backpack::menu-item title="Home settings" icon="la la-home nav-icon" :link="backpack_url('home-setting')" />
<x-backpack::menu-item title="Abouts" icon="la la-book  nav-icon" :link="backpack_url('about')" />
<x-backpack::menu-item title="Services" icon="la la-file-alt nav-icon" :link="backpack_url('services')" />
<x-backpack::menu-item title="Service discriptions" icon="la la-user-tie nav-icon" :link="backpack_url('service-discription')" />
<x-backpack::menu-item title="Banners" icon="la la-image nav-icon" :link="backpack_url('banner')" />
<x-backpack::menu-item title="Courses" icon="la la-graduation-cap nav-icon" :link="backpack_url('courses')" />
<x-backpack::menu-item title="Courses details" icon="las la-book-open nav-icon" :link="backpack_url('courses-detail')" />
<x-backpack::menu-item title="Study abroads" icon="la la-plane nav-icon" :link="backpack_url('study-abroad')" />
<x-backpack::menu-item title="Study abroad details" icon="la la-envelope nav-icon" :link="backpack_url('study-abroad-details')" />
<x-backpack::menu-item title="How to applies" icon="la la-file nav-icon" :link="backpack_url('how-to-apply')" />
<x-backpack::menu-item title="Universities" icon="la la-university nav-icon" :link="backpack_url('university')" />
<x-backpack::menu-item title="Student supports" icon="la la-headphones nav-icon" :link="backpack_url('student-support')" />
<x-backpack::menu-item title="Testimonials" icon="la la-comment nav-icon" :link="backpack_url('testimonial')" />
<x-backpack::menu-item title="Faqs" icon="la la-question-circle nav-icon" :link="backpack_url('faq')" />
<x-backpack::menu-item title="Choose us" icon="las la-chalkboard-teacher nav-icon" :link="backpack_url('choose-us')" />

<x-backpack::menu-item title="Contact" icon="la la-envelope nav-icon" :link="backpack_url('contact')" />
<x-backpack::menu-item title="Blogs" icon="la la-newspaper nav-icon" :link="backpack_url('blog')" />