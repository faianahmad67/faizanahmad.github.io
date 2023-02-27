<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body>
<i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
@include('layouts.partials.header')
@yield('content')
@include('layouts.partials.footer')
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
@include('layouts.partials.footer-scripts')
</body>
</html>
