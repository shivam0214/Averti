
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym trainer | Averti </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/gym_assets/css/style.css')}}">
</head>
<body class="black-bg">
@include('main.gym_header')
        <main class="py-4">
    @yield('gym_content')
        </main>
@include('main.gym_footer') 
@stack('scripts-footer')

</body>
</html>