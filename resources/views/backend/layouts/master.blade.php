<!DOCTYPE html>

<html lang="en">
   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Responsive Ecommerce site with Bootstrap 4 and VueJS.">

    <title>{{ config('app.name', 'LV SHOP') }} | @yield('page-title')</title>
    
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @stack('page-css')
    
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        @include('backend._includes.top-nav')
        @include('backend._includes.leftsidebar')

        <div class="content-wrapper">
            @include('backend._includes.page-header')
            <div class="content">
                @yield('main-content')
            </div>
        </div>

        @include('backend._includes.rightsidebar')
        @include('backend._includes.footer')
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    @stack('page-scripts')
</body>

</html>