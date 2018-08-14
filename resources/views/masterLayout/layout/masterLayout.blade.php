<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    {{--<link rel="stylesheet" href="/fonts/font-awesome.min.css">--}}
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/Animated-Testimomial-1.css')}}">
    <link rel="stylesheet" href="{{asset('css/Animated-Testimomial.css')}}">
    <link rel="stylesheet" href="{{asset('css/Animated-Testimomial.css')}}">
    <link rel="stylesheet" href="{{asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('css/Simple-Header-y-Navbar-adaptativo-1.css')}}">
    <link rel="stylesheet" href="{{asset('css/Simple-Header-y-Navbar-adaptativo.css')}}">
    <link rel="stylesheet" href="{{asset('css/Simple-Slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/Simple-Slider.css')}}">
</head>

<body>
<div class="bg-white">
    @include('masterLayout.partial.header')
    <div class="container">
        @include('masterLayout.content.home_page')

    </div>

    @include('masterLayout.partial.footer')
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/js.js')}}"></script>
<script src="{{asset('js/Animated-Testimomial.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="{{asset('js/Simple-Slider.js')}}"></script>
<script id="bs-live-reload" data-sseport="55602" data-lastchange="1533970729387"
        src="{{asset('js/livereload.js')}}"></script>
</body>

</html>