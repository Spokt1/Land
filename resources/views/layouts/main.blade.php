<!doctype html>
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html class="no-js" lang="">
	<!-- =========================================
    head
    ========================================== -->
    <head>	
		<!-- =========================================
        Basic
        ========================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Land</title>		
		<!-- =========================================
        Mobile Configurations
        ========================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="GOOGLEBOT" content="index follow"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />		
		<!-- =========================================
        fav & icons for iPhone and iPad
        ========================================== -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">		
		<!-- ========================================
		Google font
		========================================= -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>
        <!-- =========================================
        CSS
        ========================================== -->
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/owl.transitions.css')}}" />
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/owl.theme.css')}}" />
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/owl.carousel.css')}}" />
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/pe-icon-7-stroke.css')}}" />
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/animate.css')}}" />
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" media="screen" href="{{asset('assets/style.css')}}"/>
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/responsive.css')}}"/>
		<link rel="shortcut icon" href="{{asset('assets/img/fav.jpg')}}">
		<!-- =========================================
        Script
        ========================================== -->
        <script src=" {{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<!-- =========================================
		HEADER-AREA
		========================================== -->
		@yield('header')
		
		@yield('content')
		<!-- =========================================
		
        Script Section
        ========================================== -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{asset('assets/js/vendor/jquery-1.11.3.min.js')}}"><\/script>')</script>
		<script type="text/javascript" src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/jquery.appear.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/wow.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/gmap.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>