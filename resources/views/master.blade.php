<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="Shortcut Icon" href="images/favicon.ico"> 
    <meta http-equiv="x-ua-compatible" content="IE=9">
    <title>Siêu Thị Thông Minh - @yield('title')</title>
	

	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slippry.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}">
	<!-- FANCY BOX -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox-buttons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox-thumbs.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/ninja-slider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/thumbnail-slider.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/reponsive.css')}}">
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">


</head>
<body>

        @include('layout.header')
        @yield('content')
        @include('layout.footer')
        @include('layout.modal')
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/slippry.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.fancybox-buttons.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.fancybox-media.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.fancybox-thumbs.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.mousewheel.pack.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/ninja-slider.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/thumbnail-slider.js')}}"></script>
        <script src="{{asset('/js/main.js')}}"></script>
        <script src="{{asset('/js/profile.js')}}"></script>
        

    </body>
    </html>