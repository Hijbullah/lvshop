<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="An Ecommerce site.">
	
	<title>{{ config('app.name', 'Laravel') }} | @yield('page-title')</title>
	
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
</head>
<body>
	@include('frontend._includes.top-nav')
	@include('frontend._includes.main-nav')


	@yield('main-content')
	
	@include('frontend._includes.footer')

	<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>	