<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>{{ config('app.name', 'Laravel') }} | @yield('page-title')</title>

    <link rel="icon" href="{{ asset('backend/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('backend//plugins/bootstrap/css/bootstrap.min.css') }}">
    @stack('page-css')
    <link rel="stylesheet" href="{{ asset('backend/css/style.min.css') }} ">
</head>

<body class="theme-blush">

@include('backend._includes.loader')

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

@include('backend._includes.search')

@include('backend._includes.leftsidebar')

@include('backend._includes.rightsidebar')

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>eCommerce Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">eCommerce</li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @yield('main-content')
        </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="{{ asset('backend/bundles/libscripts.bundle.js') }} "></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('backend/bundles/vendorscripts.bundle.js') }} "></script> <!-- Lib Scripts Plugin Js -->
@stack('page-scripts')
<script src="{{ asset('backend/bundles/mainscripts.bundle.js') }} "></script>

</body>

</html>
