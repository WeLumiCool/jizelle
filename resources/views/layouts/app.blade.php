<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<section class="bg-gray">
    @include('inc.header')

</section>

{{--@if(Request::is('/'))--}}
{{--    @include('inc.hero')--}}
{{--@endif--}}


            @yield('content')


@include('inc.footer')

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/mdb.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
@stack('scripts')

<script>
    var owl = $('.owl-one');
    owl.owlCarousel({
        margin: 10,
        loop: true,
        nav:true,
        // autoplay:true,
        // autoplayTimeout:5000,
        // autoplaySpeed: 1500,
        // autoplayHoverPause:true,
        responsive: {
            0: {
                items: 1
            },
        }
    })
</script>
</body>
</html>

