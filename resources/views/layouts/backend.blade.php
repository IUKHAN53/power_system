<!DOCTYPE html>
<html
    lang="en"
    class="dark-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
    data-template="horizontal-menu-template-no-customizer">
@include('layouts.power_system.header')
<body>
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
        @include('layouts.power_system.navigation')
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                        @endif
                    @endforeach
                </div>
                @include('layouts.power_system.menu')
                @yield('content')
                @include('layouts.power_system.footer')
            </div>
        </div>
    </div>
</div>
<div class="layout-overlay layout-menu-toggle"></div>
<div class="drag-target"></div>
@include('layouts.power_system.scripts')
</body>
</html>
