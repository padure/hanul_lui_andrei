<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Sauna Crimeea')}} @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="description"
          content="@yield('meta_description', config('app.name', 'Sauna Crimeea'))">
    <meta name="keywords" content="@yield('meta_keywords', config('app.name', 'Sauna Crimeea'))">
    @yield('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
<!-- Header -->
@include('frontend.partials.header')
<!-- Header End -->
@yield('content')
<!-- Blade -->
@include('frontend.partials.footer')
<!-- Blade End -->
<a href="#" id="back-to-top" title="Back to top" style="display: none;">
    <i class="fa fa-angle-double-up"></i>
</a>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('js/jquery.superslides.min.js') }}"></script>
<script src="{{ asset('js/images-loded.min.js') }}"></script>
<script src="{{ asset('js/isotope.min.js') }}"></script>
<script src="{{ asset('js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@stack('scripts')
</body>
</html>
