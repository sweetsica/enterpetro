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
    <!-- ======= END MAIN STYLES ======= -->

</head>

<body>

<!-- Offcanval Overlay -->
<div class="offcanvas-overlay"></div>
<!-- Offcanval Overlay -->

<!-- Wrapper -->
<div class="wrapper">
    <!-- Header -->
    <header class="header white-bg fixed-top d-flex align-content-center flex-wrap">
        <!-- Logo -->
        <div class="logo">
            <a href="../../index.html" class="default-logo"><img src="{{asset('/assets/img/logo.png')}}" alt=""></a>
            <a href="../../index.html" class="mobile-logo"><img src="{{asset('/assets/img/mobile-logo.png')}}" alt=""></a>
        </div>
        <!-- End Logo -->

        <!-- Main Header -->
        <div class="main-header">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-3 col-lg-1 col-xl-4">
                        <!-- Header Left -->
                        <div class="main-header-left h-100 d-flex align-items-center">
                            <!-- Main Header User -->
{{--                            <div class="main-header-user">--}}
{{--                                <a href="#" class="d-flex align-items-center" data-toggle="dropdown">--}}
{{--                                    <div class="menu-icon">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}

{{--                                    <div class="user-profile d-xl-flex align-items-center d-none">--}}
{{--                                        <!-- User Avatar -->--}}
{{--                                        <div class="user-avatar">--}}
{{--                                            <img src="../../assets/img/avatar/user.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <!-- End User Avatar -->--}}

{{--                                        <!-- User Info -->--}}
{{--                                        <div class="user-info">--}}
{{--                                            <h4 class="user-name">Abrilay Khatun</h4>--}}
{{--                                            <p class="user-email">abrilakh@gmail.com</p>--}}
{{--                                        </div>--}}
{{--                                        <!-- End User Info -->--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu">--}}
{{--                                    <a href="#">My Profile</a>--}}
{{--                                    <a href="#">task</a>--}}
{{--                                    <a href="#">Settings</a>--}}
{{--                                    <a href="#">Log Out</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!-- End Main Header User -->

                            <!-- Main Header Menu -->
                            <div class="main-header-pin d-block d-lg-none">
                                <div class="header-toogle-menu">
                                    <img src="../../assets/img/menu.png" alt="">
                                </div>
                            </div>
                            <!-- End Main Header Menu -->
                        </div>
                        <!-- End Header Left -->
                    </div>
                    <div class="col-9 col-lg-11 col-xl-8">
                        <!-- Header Right -->
                        <div class="main-header-right d-flex justify-content-end">
                            <ul class="nav">
                                <li class="ml-0">
                                    <!-- Main Header Language -->
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
                                    <!-- End Main Header Language -->
                                </li>
                                <li class="ml-0 d-none d-lg-flex">
                                    <!-- Main Header Print -->
                                    <div class="main-header-print">
                                        <a href="#">
                                            <img src="../../assets/img/svg/print-icon.svg" alt="">
                                        </a>
                                    </div>
                                    <!-- End Main Header Print -->
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
                                        <a href="#" class="btn">Pending Tasks</a>
                                    </div>
                                    <!-- End Main Header Button -->
                                </li>
                                <li class="order-2 order-sm-0">

                                </li>
                                <li>
                                </li>
                                <li>
                                    <!-- Main Header Notification -->
                                    <div class="main-header-notification">
                                        <a href="#" class="header-icon notification-icon" data-toggle="dropdown">
                                            <span class="count" data-bg-img="../../assets/img/count-bg.png">!</span>
                                            <img src="../../assets/img/svg/notification-icon.svg" alt="" class="svg">
                                        </a>
                                        <div class="dropdown-menu style--two dropdown-menu-right">
                                            <!-- Dropdown Header -->
                                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                                <h5>5 New notifications</h5>
                                                <a href="#" class="text-mute d-inline-block">Clear all</a>
                                            </div>
                                            <!-- End Dropdown Header -->

                                            <!-- Dropdown Body -->
                                            <div class="dropdown-body">
                                                <!-- Item Single -->
                                                <a href="#" class="item-single d-flex align-items-center">
                                                    <div class="content">
                                                        <div class="mb-2">
                                                            <p class="time">2 min ago</p>
                                                        </div>
                                                        <p class="main-text">Donec dapibus mauris id odio ornare tempus amet.</p>
                                                    </div>
                                                </a>
                                                <!-- End Item Single -->

                                                <!-- Item Single -->
                                                <a href="#" class="item-single d-flex align-items-center">
                                                    <div class="content">
                                                        <div class="mb-2">
                                                            <p class="time">2 min ago</p>
                                                        </div>
                                                        <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                                    </div>
                                                </a>
                                                <!-- End Item Single -->

                                                <!-- Item Single -->
                                                <a href="#" class="item-single d-flex align-items-center">
                                                    <div class="content">
                                                        <div class="mb-2">
                                                            <p class="time">2 min ago</p>
                                                        </div>
                                                        <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                                    </div>
                                                </a>
                                                <!-- End Item Single -->

                                                <!-- Item Single -->
                                                <a href="#" class="item-single d-flex align-items-center">
                                                    <div class="content">
                                                        <div class="mb-2">
                                                            <p class="time">2 min ago</p>
                                                        </div>
                                                        <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                                    </div>
                                                </a>
                                                <!-- End Item Single -->
                                            </div>
                                            <!-- End Dropdown Body -->
                                        </div>
                                    </div>
                                    <!-- End Main Header Notification -->
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
        <!-- End Main Content -->
    </div>
    <!-- End Main Wrapper -->

    <!-- Footer -->
    <footer class="footer">
        EnterPetro © 2023 ST</a>
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

<!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
<script src="{{asset('assets/plugins/jquery-repeater/repeater.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-repeater/custom-repeater.js')}}"></script>
<!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->

@yield('footer-script')
</body>

</html>
