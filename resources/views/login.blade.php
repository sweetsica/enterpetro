@extends('template.authen.master')
@section('header')
    <!-- Page Title -->
    <title>Đăng nhập - Enter Petro </title>

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
@endsection

@section('content')
    <div class="card justify-content-center auth-card">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <h4 class="mb-5 font-20">Welcome To Enter Petro</h4>

                <form action="#">
                    <!-- Form Group -->
                    <div class="form-group mb-20">
                        <label for="email" class="mb-2 font-14 bold black">Email Address</label>
                        <input type="email" id="email" class="theme-input-style" placeholder="Email Address">
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group mb-20">
                        <label for="password" class="mb-2 font-14 bold black">Password</label>
                        <input type="password" id="password" class="theme-input-style" placeholder="********">
                    </div>
                    <!-- End Form Group -->

                    <div class="mb-30">
                        <a href="{{route('dashboard-ac')}}" class="light-btn mr-3 mb-20">Trang Kế toán</a>
                        <a href="{{route('dashboard-sa')}}" class="light-btn style--two mb-20">Trang sale</a>
                        <a href="{{route('dashboard-ad')}}" class="light-btn style--two mb-20">Trang admin</a>
                    </div>

                    <div class="d-flex align-items-center">
                        <button type="submit" class="btn long mr-20">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
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
@endsection
