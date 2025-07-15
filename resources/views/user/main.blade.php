<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('img/icon.png')}}">

    <!--title  -->
    <title>Andalanku</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="{{asset('css/swiper10-bundle.min.css')}}">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="{{asset('css/bootstrap-5.3.2.min.css')}}">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="{{asset('css/aos-3.0.0.css')}}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body >
    @include('user.component.header')

    @yield('content')

    @include('user.component.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
