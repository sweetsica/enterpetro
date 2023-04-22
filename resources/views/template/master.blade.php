<!DOCTYPE html>
<html lang="zxx">
<head>
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
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}">
    <!-- ======= END MAIN STYLES ======= -->
    @if(View::hasSection('header'))
        @yield('header')
    @endif
</head>
<body>
<div class="offcanvas-overlay">

</div>
<div class="wrapper">
    <header class="header white-bg fixed-top d-flex align-content-center flex-wrap">
        <div class="logo">
            <a href="{{route('login')}}" class="default-logo"><img src="{{asset('/assets/img/logo.png')}}" alt=""></a>
            <a href="{{route('login')}}" class="mobile-logo"><img src="{{asset('/assets/img/mobile-logo.png')}}" alt=""></a>
        </div>
        <div class="main-header">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-3 col-lg-1 col-xl-4">
                        <!-- Header Left -->
                        <div class="main-header-left h-100 d-flex align-items-center">
                            <div class="main-header-pin d-block d-lg-none">
                                <div class="header-toogle-menu">
                                    <img src="../../assets/img/menu.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-lg-11 col-xl-8">
                        <!-- Header Right -->
                        <div class="main-header-right d-flex justify-content-end">
                            <ul class="nav">
                                <li class="ml-0">
                                    <div class="main-header-language">
                                        <a href="#" data-toggle="dropdown">
                                            <img src="../../assets/img/svg/globe-icon.svg" alt="">
                                        </a>
                                        <div class="dropdown-menu style--three">
                                            <a href="#">
                                                <span><img src="../../assets/img/usa.png" alt=""></span>
                                                USA
                                            </a>
                                            <a href="#">
                                                <span><img src="../../assets/img/china.png" alt=""></span>
                                                China
                                            </a>
                                            <a href="#">
                                                <span><img src="../../assets/img/russia.png" alt=""></span>
                                                Russia
                                            </a>
                                            <a href="#">
                                                <span><img src="../../assets/img/spain.png" alt=""></span>
                                                Spain
                                            </a>
                                            <a href="#">
                                                <span><img src="../../assets/img/brazil.png" alt=""></span>
                                                Brazil
                                            </a>
                                            <a href="#">
                                                <span><img src="../../assets/img/france.png" alt=""></span>
                                                France
                                            </a>
                                            <a href="#">
                                                <span><img src="../../assets/img/algeria.png" alt=""></span>
                                                Algeria
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="ml-0 d-none d-lg-flex">
                                    <!-- Main Header Print -->
                                    <div class="main-header-print">
                                        <a href="#">
                                            <img src="../../assets/img/svg/print-icon.svg" alt="">
                                        </a>
                                    </div>
                                </li>
                                <li class="d-none d-lg-flex">
                                    <!-- Main Header Time -->
                                    <div class="main-header-date-time text-right">
                                        <h3 class="time">
                                            <span id="hours">21</span>
                                            <span id="point">:</span>
                                            <span id="min">06</span>
                                        </h3>
                                        <span class="date"><span id="date">Tue, 12 October 2019</span></span>
                                    </div>
                                    <!-- End Main Header Time -->
                                </li>
                                <li class="d-none d-lg-flex">
                                    <!-- Main Header Button -->
                                    <div class="main-header-btn ml-md-1">
                                        <a href="{{route('logout')}}" class="btn">Đăng xuất</a>
                                    </div>
                                    <!-- End Main Header Button -->
                                </li>
                                <li class="order-2 order-sm-0">
                                </li>
                            </ul>
                        </div>
                        <!-- End Header Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Header -->
    </header>
    <!-- End Header -->

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Sidebar -->
        @include('template.sidebar')
        <!-- End Sidebar -->

        <!-- Main Content -->
        @yield('content')
    </div>
    <!-- End Main Wrapper -->

    <!-- Footer -->
    <footer class="footer">
        EnterPetro © 2023 ST  - <p id="time"></p>
{{--        - <p id="time-epoch"></p>--}}
    </footer>
    <!-- End Footer -->
</div>
<!-- End wrapper -->
<!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
<script>
    function updateTime() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const timeString = `${hours}:${minutes}:${seconds}`;

        // Truy cập đến thẻ <p> bằng id
        const timeElement = document.getElementById('time');
        timeElement.textContent = ` Thời gian hiện tại: ${timeString}`;

        // const now2 = new Date();
        // const atomTime = Math.floor(now2.getTime() / 1000);
        // const timeElement2 = document.getElementById('time-epoch');
        // timeElement2.textContent = `${atomTime}`;

    }

    setInterval(updateTime, 1000);
</script>

@if(View::hasSection('footer-script'))
    @yield('footer-script')
@endif
<!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
<script src="{{asset('assets/plugins/jquery-repeater/repeater.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-repeater/custom-repeater.js')}}"></script>
<!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->


</body>

</html>
