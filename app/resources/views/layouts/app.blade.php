<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/header.js') }}" ></script>
    <script src="{{ asset('js/backToTop.js') }}" ></script>
    <script src="{{ asset('js/lang.js') }}" ></script>

    <!--About scripts -->
    <script src="{{ asset('js/about/custom.js') }}" ></script>
    <script src="{{ asset('js/about/Headroom.js') }}" ></script>
    <script src="{{ asset('js/about/jQuery.headromm.js') }}" ></script>
    <script src="{{ asset('js/about/popper.min.js') }}" ></script>
    <script src="{{ asset('js/about/owl.carousel.min.js') }}" ></script>
    <script src="{{ asset('js/about/smoothscroll.min.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/com/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/com/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/com/backToTopBtn.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/tooplate-style.css') }}" rel="stylesheet">

</head>
<body>
  <!--Header-->
  @include('components.header')
  <!--Header-->

  <!-- Begin page content -->
  @yield('content')
  <!-- End page content -->

  @include('components.to_top_button')
  <!--Footer--->
  @include('components.footer')
  <!--Footer--->
</body>
</html>
