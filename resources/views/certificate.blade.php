<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RAPS</title>
  <link rel="shortcut icon" href="{{ asset('images/Logo R.svg') }}" type="image/x-icon">
  @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
</head>
<body>
  <!-- Navbar-->
  @include('includes.navbar')

  {{-- Card --}}
  @include('components.card')

  <!-- footer -->
  @include('includes.footer')  
  
  @include('components.tawk')
  
</body>
</html>