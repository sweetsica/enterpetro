<!DOCTYPE html>
<html lang="zxx">

<head>
    @if(View::hasSection('header'))
        @yield('header')
    @else()
            <!-- Page Title -->
            <title>Enter Petro </title>

            <!-- Meta Data -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta http-equiv="content-type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Enter Petro - Fan Long">
            <meta name="keywords" content="">

            <!-- Favicon -->
            <link rel="shortcut icon" href="{{asset('/assets/img/favicon.png')}}">

            <!-- Web Fonts -->
            <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

            <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
            <link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('/assets/fonts/icofont/icofont.min.css')}}">
            <link rel="stylesheet" href="{{asset('/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css')}}">
            <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->

            <!-- ======= MAIN STYLES ======= -->
            <link rel="stylesheet" href="../../../assets/css/style.css">
            <!-- ======= END MAIN STYLES ======= -->
    @endif

</head>

<body>

<div class="mn-vh-100 d-flex align-items-center">
    <div class="container">
        <!-- Card -->
        @yield('content')
        <!-- End Card -->
    </div>
</div>

@if(View::hasSection('footer'))
    @yield('footer')
@else()
    <!-- Footer -->
    <footer class="footer style--two">
        Enter Petro © 2023 created by STeam</a>
    </footer>
    <!-- End Footer -->

    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
@endif


</body>

</html>
