<!DOCTYPE html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links Of CSS File -->
		<link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/sidebar-menu.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/simplebar.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/apexcharts.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/prism.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/rangeslider.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/sweetalert.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
		<!-- Title -->
		<title>Farol - Bootstrap 5 Admin Dashboard Template</title>

        @stack('headerPartial')
    </head>
    <body>
        <!-- Start Preloader Area -->
        <div class="preloader" id="preloader">
            <div class="preloader">
                <div class="waviy position-relative">
                    <span class="d-inline-block">F</span>
                    <span class="d-inline-block">A</span>
                    <span class="d-inline-block">R</span>
                    <span class="d-inline-block">O</span>
                    <span class="d-inline-block">L</span>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        {{-- Sidebar Include --}}
        @include('layouts.admin.sidebar')

        <!-- Start Main Content Area -->
        <div class="container-fluid">
            <div class="main-content d-flex flex-column">

                {{-- Header Section Include --}}
                @include('layouts.admin.header')

                {{-- Contain Section Include --}}
                @yield('content')

                <div class="flex-grow-1"></div>

                {{-- Footer Section Include --}}
                @include('layouts.admin.footer')

            </div>
        </div>
        <!-- Start Main Content Area -->




        <!-- Link Of JS File -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
        <script src="{{ asset('assets/js/dragdrop.js') }}"></script>
        <script src="{{ asset('assets/js/rangeslider.min.js') }}"></script>
        <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
        <script src="{{ asset('assets/js/quill.min.js') }}"></script>
        <script src="{{ asset('assets/js/data-table.js') }}"></script>
        <script src="{{ asset('assets/js/prism.js') }}"></script>
        <script src="{{ asset('assets/js/clipboard.min.js') }}"></script>
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/analytics.js') }}"></script>
        <script src="{{ asset('assets/js/custom/custom.js') }}"></script>

        @stack('footerPartial')
    </body>
</html>
