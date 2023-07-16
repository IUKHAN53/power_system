<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ URL::asset('assets/img/favicon.ico')}}' />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <section class="section">
        @yield('content')
    </section>
</div>
<!-- General JS Scripts -->
<script src="{{ URL::asset('assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="{{ URL::asset('assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{ URL::asset('assets/js/custom.js')}}"></script>
</body>


</html>