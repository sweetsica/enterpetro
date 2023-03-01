@extends('template.master')
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Card -->
                    <div class="card bg-transparent">
                        <div class="card-body bg-white">
                            <div class="d-flex flex-column flex-xl-row justify-content-xl-between mb-2">
                                <div class="mb-4 mb-xl-0">
                                    <h4 class="mb-1">Marketing Campaigns</h4>
                                    <p class="font-14">I must explain to you how all this mistaken idea of denouncing pleasure at
                                        <span class="full-date ml-2">15 Nov 2019 10:35am</span>
                                    </p>
                                </div>

                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="d-flex align-items-center mr-4 mr-xl-5 ml-xl-n2 mb-4 mb-sm-0">
                                        <div class="progress_12">
                                            <!-- Progress Bar -->
                                            <div class="ProgressBar-wrap2 position-relative">
                                                <div class="ProgressBar ProgressBar_12" data-progress="67">
                                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="85" />
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="85" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- End Progress Bar -->
                                        </div>
                                        <div class="">
                                            <p class="mb-1 font-14 l-height1">Products</p>
                                            <h4>264</h4>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mr-4 mr-xl-5 ml-xl-n2 mb-4 mb-sm-0">
                                        <div class="progress_13">
                                            <!-- Progress Bar -->
                                            <div class="ProgressBar-wrap2 position-relative">
                                                <div class="ProgressBar ProgressBar_13" data-progress="75">
                                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="85" />
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="85" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- End Progress Bar -->
                                        </div>
                                        <div class="">
                                            <p class="mb-1 font-14 l-height1">Earned</p>
                                            <h4>$16k</h4>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mr-4 mr-xl-5 ml-xl-n2 mb-4 mb-sm-0">
                                        <div class="progress_14">
                                            <!-- Progress Bar -->
                                            <div class="ProgressBar-wrap2 position-relative">
                                                <div class="ProgressBar ProgressBar_14" data-progress="48">
                                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="85" />
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="85" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- End Progress Bar -->
                                        </div>
                                        <div class="">
                                            <p class="mb-1 font-14 l-height1">Orders</p>
                                            <h4>$4.6k</h4>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-4 mb-sm-0">
                                        <div class="progress_15">
                                            <!-- Progress Bar -->
                                            <div class="ProgressBar-wrap2 position-relative">
                                                <div class="ProgressBar ProgressBar_15" data-progress="78">
                                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="85" />
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="85" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- End Progress Bar -->
                                        </div>
                                        <div class="">
                                            <p class="mb-1 font-14 l-height1">Delivered</p>
                                            <h4>$3.4k</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Product Statistics -->
                            <div class="product-statistics">
                                <!-- Statistics Row -->
                                <div class="statistic-row pb-1">
{{--                                    <div class="bold black">Campaign <img src="../../assets/img/svg/table-up-arrow.svg" alt="" class="svg ml-3"></div>--}}
{{--                                    <div class="bold black">Account Detail <img src="../../assets/img/svg/table-down-arrow.svg" alt="" class="svg ml-2"></div>--}}
{{--                                    <div class="bold black">Budget</div>--}}
{{--                                    <div class="bold black">Changes</div>--}}
{{--                                    <div class="bold black text-center">Status</div>--}}
{{--                                    <div class="bold black text-right">Actions</div>--}}

                                     <div class="bold black">#</div>
                                     <div class="bold black">Ngày nhập</div>
                                     <div class="bold black">Khách hàng</div>
{{--                                     <div class="bold black">ĐVT</div>--}}
{{--                                     <div class="bold black">Khối lượng</div>--}}
{{--                                     <div class="bold black">Số lượng</div>--}}
                                     <div class="bold black">Tổng Kg</div>
{{--                                     <div class="bold black">Đơn giá bán</div>--}}
                                     <div class="bold black">Doanh thu</div>
                                     <div class="bold black">Thanh toán</div>
{{--                                     <div class="bold black">Tiền nợ</div>--}}
{{--                                     <div class="bold black">Nợ vỏ</div>--}}
                                     <div class="bold black">Số vỏ nợ</div>
{{--                                     <div class="bold black">Giá nhập hàng</div>--}}
{{--                                     <div class="bold black">Tổng phí nhập hàng</div>--}}
{{--                                     <div class="bold black">Tiền đã thanh toán nhập hàng</div>--}}
{{--                                     <div class="bold black">Tổng tiền chi thanh toán nhập hàng</div>--}}
{{--                                     <div class="bold black">Chênh dư nợ tiền thanh toán nhập hàng</div>--}}
{{--                                     <div class="bold black">Thông tin nhận tiền</div>--}}
                                     <div class="bold black">Ghi chú</div>

                                </div>
                                <!-- End Statistics Row -->

                                <!-- Statistics Row -->
                                <div class="statistic-row bg-transparent days">today</div>
                                <!-- End Statistics Row -->

{{--                                <!-- Statistics Row -->--}}
{{--                                <div class="statistic-row pt-2">--}}
{{--                                    <div><img src="../../assets/img/product/rp1.png" alt=""> Women's Floppy Hat</div>--}}
{{--                                    <div>4154 81** **** 7617</div>--}}
{{--                                    <div>758</div>--}}
{{--                                    <div>1458 <img src="../../assets/img/svg/table-down-arrow-red.svg" alt="" class="svg"></div>--}}
{{--                                    <div class="text-center"><button type="button" class="status-btn un_paid">Unpaid</button></div>--}}
{{--                                    <div>--}}
{{--                                        <!-- Dropdown Button -->--}}
{{--                                        <div class="dropdown-button">--}}
{{--                                            <a href="#" class="d-flex align-items-center justify-content-end" data-toggle="dropdown">--}}
{{--                                                <div class="menu-icon mr-0">--}}
{{--                                                    <span></span>--}}
{{--                                                    <span></span>--}}
{{--                                                    <span></span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                                <a href="#">Daily</a>--}}
{{--                                                <a href="#">Sort By</a>--}}
{{--                                                <a href="#">Monthly</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End Dropdown Button -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- End Statistics Row -->--}}

                                <!-- Statistics Row -->
                                <div class="statistic-row">
                                    <div>1</div>
                                    <div>Women's Woven Oblong Scarf</div>
                                    <div>4154 81** **** 7668</div>
                                    <div>$25464</div>
                                    <div>1458 <img src="../../assets/img/svg/table-up-arrow-green.svg" alt="" class="svg"></div>
                                    <div class="text-center"><button type="button" class="status-btn on_hold">On Hold</button></div>
                                    <div>
                                        <!-- Dropdown Button -->
                                        <div class="dropdown-button">
                                            <a href="#" class="d-flex align-items-center justify-content-end" data-toggle="dropdown">
                                                <div class="menu-icon mr-0">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#">Daily</a>
                                                <a href="#">Sort By</a>
                                                <a href="#">Monthly</a>
                                            </div>
                                        </div>
                                        <!-- End Dropdown Button -->
                                    </div>
                                </div>
                                <!-- End Statistics Row -->


{{--                                <!-- Statistics Row -->--}}
{{--                                <div class="statistic-row pb-2">--}}
{{--                                    <div><img src="../../assets/img/product/rp4.png" alt=""> Variegated Stripe Grill Set</div>--}}
{{--                                    <div>4154 81** **** 7617</div>--}}
{{--                                    <div>$3265</div>--}}
{{--                                    <div>1458 <img src="../../assets/img/svg/table-down-arrow-red.svg" alt="" class="svg"></div>--}}
{{--                                    <div class="text-center"><button type="button" class="status-btn completed">Completed</button></div>--}}
{{--                                    <div>--}}
{{--                                        <!-- Dropdown Button -->--}}
{{--                                        <div class="dropdown-button">--}}
{{--                                            <a href="#" class="d-flex align-items-center justify-content-end" data-toggle="dropdown">--}}
{{--                                                <div class="menu-icon mr-0">--}}
{{--                                                    <span></span>--}}
{{--                                                    <span></span>--}}
{{--                                                    <span></span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                                <a href="#">Daily</a>--}}
{{--                                                <a href="#">Sort By</a>--}}
{{--                                                <a href="#">Monthly</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End Dropdown Button -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- End Statistics Row -->--}}

                                <!-- Statistics Row -->

                            </div>
                            <!-- End Product Statistics -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>1
@endsection

@section('footer-script')
    <!-- jQuery -->
    <script src="{{asset('edittable/jquery.min.js')}}"></script>

    <script src="{{asset('edittable/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('edittable/edit-task-table-data.js')}}"></script>
@endsection
