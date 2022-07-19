<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEO::generate() !!}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="shortcut icon" href="{{ asset('/frontend-assets/image/logo/logoContoh.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script type="text/javascript" src="{{asset('/frontend-assets/js/jquery.min.js')}}"></script>
    
    <!-- Styles -->
    <!-- <link href="{{ asset('/frontend-assets/css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/frontend-assets/olla/app.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/fontawesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend-assets/css/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend-assets/css/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend-assets/css/bootstrap-reboot.min.css.map')}}" />
    <link rel="stylesheet" href="{{asset('/frontend-assets/css/bootstrap.min.css')}}" />    

</head>