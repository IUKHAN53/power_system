<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.min.css')}}">
    @stack('custom-css')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ URL::asset('assets/img/favicon.ico')}}'/>
</head>
<body>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
    @include('layouts.partials.header')

    @include('layouts.partials.sidebar')
    <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        @include('layouts.partials.footer')
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{ URL::asset('assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
@stack('scripts')

<script src="{{ URL::asset('assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{ URL::asset('assets/js/custom.js')}}"></script>
</body>
</html>