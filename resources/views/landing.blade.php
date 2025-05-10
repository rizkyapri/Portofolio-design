<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAPS</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo R.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/css/styles.css'])
</head>

<body>
    <!-- Navbar-->
    @include('includes.navbar')

    {{-- HERO --}}
    @include('components.hero')

    {{-- Icons --}}
    @include('components.icon')

    {{-- prolog --}}
    @include('components.prolog')

    {{-- benefits --}}
    @include('components.timeline')

    {{-- portfolio --}}
    @include('components.portofolio')

    {{-- testimonials --}}
    @include('components.portofolio-card')

    <!-- footer -->
    @include('includes.footer')
    @include('components.tawk')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>
