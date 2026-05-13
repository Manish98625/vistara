<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vistara Education Pvt. Ltd. | Premium Overseas Study Consultancy')</title>
    <meta name="description" content="@yield('meta_description', 'Expert education consultancy for overseas studies. Get counseling, university placement, and visa guidance from Vistara Education.')">

    {{-- OpenGraph Tags --}}
    <meta property="og:title" content="@yield('og_title', 'Vistara Education Pvt. Ltd.')">
    <meta property="og:description" content="@yield('og_description', 'Premium education consultancy for overseas studies - Vistara Education')">
    <meta property="og:image" content="@yield('og_image', asset('assets/brand/vistara-logo-main.svg'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="website">

    {{-- Canonical URL --}}
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/brand/vistara-favicon.svg') }}">
    <link rel="shortcut icon" type="image/svg+xml" href="{{ asset('assets/brand/vistara-favicon.svg') }}">

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @yield('extra_css')
</head>

<body>
    {{-- Sticky Sidebar --}}
    @include('components.sticky-sidebar')

    {{-- Navigation --}}
    @include('components.navbar')

    {{-- Main Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('components.footer')

    {{-- Scripts --}}
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('scripts')
</body>

</html>
