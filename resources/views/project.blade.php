<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAPS</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo R.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
</head>

<body>
    <!-- Navbar-->
    @include('includes.navbar')

    {{-- Blog --}}
    @include('components.testimonial-card')

    <!-- footer -->
    @include('includes.footer')

    @include('components.tawk')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
