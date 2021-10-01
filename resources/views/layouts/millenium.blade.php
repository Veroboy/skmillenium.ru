<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>{{ $title }} - Millenium - Строительная компания</title>

    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    {{-- favicon --}}
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" sizes="32x32" type="image/png">
    {{-- Bootstrap CSS --}}
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    {{-- font themify CSS --}}
    <link href="{{ asset('assets/css/themify-icons.cs') }}s" rel="stylesheet">
    {{-- font awesome CSS --}}
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    {{-- revolution slider css --}}
    <link href="{{ asset('assets/css/fullscreen.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{ asset('assets/rs-plugin/css/settings.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{ asset('assets/css/rev-settings.cs') }}s" rel="stylesheet" type="text/css">
    {{-- on3step CSS --}}
    <link href="{{ asset('assets/css/animated-on3step.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/on3step-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/queries-on3step.css') }}" media="all" rel="stylesheet" type="text/css">
</head>
<body>
{{-- preloader --}}
<div class="bg-preloader"></div>
<div class="preloader">
    <div class="mainpreloader">
        <span></span>
    </div>
</div>
{{-- preloader end --}}

{{-- content wraper --}}
<div class="content-wrapper">

    @include('includes.header')
    {{-- CONTENT --}}
    @yield('content')
    {{-- CONTENT END --}}

    {{-- section team end --}}

    @include('includes.partner')

    @include('includes.footer')

    {{-- ScrolltoTop --}}
    <div id="totop">
        <span class="ti-angle-up"></span>
    </div>
</div>
{{-- content wraper end --}}
{{-- Subscribe start --}}
<div class="white-popup-block mfp-hide animbounceInDown" data-time="0" id="subwrap">
    <h5>PLEASE FILL YOUR EMAIL BELOW</h5>
    <div class="space-half"></div>
    <form action="subscribe.php" id="subscribe" method="post" name="subscribe">
        <input class="subscribfield subscribeemail" id="subscribeemail" name="subscribeemail" type="text">
        <button class="btn-form" id="submit-2" type="submit">Subscribe</button>
    </form>
    <div class="subscribesuccess">
        Thank you for fill your email
    </div>
</div>
{{-- Subscribe end --}}

{{-- plugin JS --}}
<script src="{{ asset('assets/plugin/pluginson3step.js') }}" type="text/javascript"></script>
{{-- slider revolution  --}}
<script src="{{ asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>
{{-- on3step JS --}}
<script src="{{ asset('assets/js/on3step.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/plugin-set.js') }}" type="text/javascript"></script>
</body>
</html>
