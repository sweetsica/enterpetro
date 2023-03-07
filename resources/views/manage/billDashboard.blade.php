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
                        <div class  ="card-body bg-white">
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

                                    <div class="media-body ml-10 align-items-end">
                                        <a href="#" class="btn s_alert bg-success-light text-success mr-3 mr-sm-4 mb-102  " data-toggle="modal" data-target="#contactAddModal">
                                            Cập nhật giá
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Product Statistics -->
                            <div class="product-statistics">
                                <!-- Statistics Row -->
                                <div class="statistic-row pb-1" style="text-align: center">
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

                    <!-- Contact Add New PopUp -->
                    <div id="contactAddModal" class="modal fade">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <form action="#">

                                        <div class="media flex-column flex-sm-row">
                                            <div class="contact-account-setting media-body">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <h4 class="font-20 mb-4">Nhập giá</h4>
                                                        <!-- Form Element -->
                                                        <div class="form-element py-30 mb-30">
                                                            <form action="#" class="repeater-default">
                                                                <!-- Repeater Heading -->
                                                                <div class="repeater-heading">

                                                                </div>

                                                                <!-- Repeater Html Start -->
                                                                <div data-repeater-list="group-a">
                                                                    <div class="row">
                                                                        <div class="col-md-11">
                                                                            <div class="row">
                                                                                <!-- Form Group -->
                                                                                <div class="col-md-4">
                                                                                    <label for="inputName5" class="bold mb-2">Giá nhập</label>
                                                                                </div>
                                                                                <!-- End Form Group -->

                                                                                <!-- Form Group -->
                                                                                <div class="col-md-4">
                                                                                    <label for="inputMobile3" class="bold mb-2">Giá bán</label>
                                                                                </div>
                                                                                <!-- End Form Group -->

                                                                                <!-- Form Group -->
                                                                                <div class="col-md-4">
                                                                                    <label for="inputEmail3" class="bold mb-2" disabled>Ngày tạo</label>
                                                                                </div>
                                                                                <!-- End Form Group -->
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Repeater Items -->
                                                                    <div data-repeater-item>
                                                                        <!-- Repeater Content -->
                                                                        <div class="item-content align-items-center row">
                                                                            <div class="col-md-11">
                                                                                <div class="row">
                                                                                    <!-- Form Group -->
                                                                                    <div class="form-group mb-20 col-md-4">
                                                                                        <input type="text" class="form-control" id="inputName5" placeholder="Type Your Name">
                                                                                    </div>
                                                                                    <!-- End Form Group -->

                                                                                    <!-- Form Group -->
                                                                                    <div class="form-group mb-20 col-md-4">
                                                                                        <input type="text" class="form-control" id="inputMobile3" placeholder="Contact Number">
                                                                                    </div>
                                                                                    <!-- End Form Group -->

                                                                                    <!-- Form Group -->
                                                                                    <div class="mb-md-20 col-md-4">
                                                                                        <input type="text" class="form-control" id="inputMobile3" placeholder="02-03-2023" disabled>
                                                                                    </div>
                                                                                    <!-- End Form Group -->
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-1 mb-20">
                                                                                <!-- Repeater Remove Btn -->
                                                                                <div class="repeater-remove-btn">
                                                                                    <button data-repeater-delete class="remove-btn bg-transparent">
                                                                                        <img src="../../assets/img/svg/remove.svg" alt="" class="svg">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Repeater Items -->
                                                                </div>

                                                                <!-- Repeater End -->
                                                                <div class="mt-md-2">
                                                                    <button data-repeater-create type="button" class="repeater-add-btn btn-circle position-relative">
                                                                        <img src="../../assets/img/svg/plus_white.svg" alt="" class="svg">
                                                                    </button>
                                                                    <span class="bold c2 ml-1">Add New</span>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- End Form Element -->
                                                    </div>
                                                </div>
                                                <div class="align-items-end">
                                                    <a href="#" class="btn mr-4">Lên đơn</a>
                                                    <a href="#" class="cancel font-14 bold" data-dismiss="modal">Hủy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Modal Body -->
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Add New PopUp -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-script')
    <!-- jQuery -->
    <script src="{{asset('edittable/jquery.min.js')}}"></script>

    <script src="{{asset('edittable/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('edittable/edit-task-table-data.js')}}"></script>
@endsection
