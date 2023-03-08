@extends('template.master')
{{-- Trang chủ admin --}}
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
                                    <h4 class="mb-1">Thông số tổng quan</h4>
                                    <p class="font-14">Mức giá đang áp dụng: Mua vào
                                        <span class="full-date ml-2">{{number_format( $priceOrigin->priceOrigin , 0 , ',' , '.' )}}đ</span>
                                        Giá bán tối thiểu
                                        <span class="full-date ml-2">{{number_format( $priceOrigin->minSaleOrigin , 0 , ',' , '.' )}}đ</span>
                                    </p>
                                </div>

                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="d-flex align-items-center mr-4 mr-xl-5 ml-xl-n2 mb-4 mb-sm-0">
                                        <div class="progress_12">
                                            <!-- Progress Bar -->
                                            <div class="ProgressBar-wrap2 position-relative">
                                                <div class="ProgressBar ProgressBar_12" data-progress="67">
                                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                        <circle transform="rotate(-90, 100, 100)"
                                                            class="ProgressBar-background" cx="100" cy="100"
                                                            r="85" />
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle"
                                                            cx="100" cy="100" r="85" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- End Progress Bar -->
                                        </div>
                                        <div class="">
                                            <p class="mb-1 font-14 l-height1">Khối lượng bán tuần</p>
                                            <h4>{{number_format( $totalMass , 000 , ',' , '.' )}} kg</h4>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mr-4 mr-xl-5 ml-xl-n2 mb-4 mb-sm-0">
                                        <div class="progress_13">
                                            <!-- Progress Bar -->
                                            <div class="ProgressBar-wrap2 position-relative">
                                                <div class="ProgressBar ProgressBar_13" data-progress="75">
                                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                        <circle transform="rotate(-90, 100, 100)"
                                                            class="ProgressBar-background" cx="100" cy="100"
                                                            r="85" />
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle"
                                                            cx="100" cy="100" r="85" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- End Progress Bar -->
                                        </div>
                                        <div class="">
                                            <p class="mb-1 font-14 l-height1">Tổng doanh thu</p>
                                            <h4>{{number_format( $totalBill , 0 , ',' , '.' )}}đ</h4>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mr-4 mr-xl-5 ml-xl-n2 mb-4 mb-sm-0">
                                        <div class="progress_14">
                                            <!-- Progress Bar -->
                                            <div class="ProgressBar-wrap2 position-relative">
                                                <div class="ProgressBar ProgressBar_14" data-progress="48">
                                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                        <circle transform="rotate(-90, 100, 100)"
                                                            class="ProgressBar-background" cx="100" cy="100"
                                                            r="85" />
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle"
                                                            cx="100" cy="100" r="85" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- End Progress Bar -->
                                        </div>
                                        <div class="">
                                            <p class="mb-1 font-14 l-height1">Tổng tiền nhập hàng</p>
                                            <h4>{{number_format( $totalBuy , 0 , ',' , '.' )}}đ</h4>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-4 mb-sm-0">
                                        <div class="progress_15">
                                            <!-- Progress Bar -->
                                            <div class="ProgressBar-wrap2 position-relative">
                                                <div class="ProgressBar ProgressBar_15" data-progress="78">
                                                    <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                        <circle transform="rotate(-90, 100, 100)"
                                                            class="ProgressBar-background" cx="100" cy="100"
                                                            r="85" />
                                                        <circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle"
                                                            cx="100" cy="100" r="85" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- End Progress Bar -->
                                        </div>
                                        <div class="">
                                            <p class="mb-1 font-14 l-height1">Tổng lãi</p>
                                            <h4>{{number_format( $totalInterest , 0 , ',' , '.' )}}đ</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Product Statistics -->
                            <div class="product-statistics">
                                <table class="text-nowrap bg-white dh-table">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Khách hàng</th>
                                            <th>ĐVT</th>
                                            <th>Khối lượng</th>
                                            <th>Số lượng</th>
                                            <th>Tổng Kg</th>
                                            <th>Đơn giá bán</th>
                                            <th>Doanh thu</th>
                                            <th>Thanh toán</th>
                                            <th>Tiền nợ</th>
                                            <th>Nợ vỏ</th>
                                            <th>Số vỏ nợ</th>
                                            <th>Giá nhập hàng</th>
                                            <th>Tổng phí nhập hàng</th>
                                            <th>Tiền đã thanh toán nhập hàng</th>
                                            <th>Tổng tiền chi thanh toán nhập hàng</th>
                                            <th>Chênh dư nợ tiền thanh toán nhập hàng</th>
                                            <th>Thông tin nhận tiền</th>
                                            <th>Ghi chú</th>
                                        </tr>
                                    </thead>
                                    <div class="statistic-row bg-transparent days">today</div>
                                    <tbody>
                                        @foreach ($dataBills as $dataBill)
                                            <tr>
                                                <td>{{ $dataBill->id }}</td>
                                                <td>{{ $dataBill->nameCustomer }}</td>
                                                <td>{{ $dataBill->id }}</td>
                                                <td>{{ $dataBill->shellType }}</td>
                                                <td>{{ $dataBill->ammount }}</td>
                                                <td>{{ $dataBill->massTotal }}</td>
                                                <td>{{ number_format( $dataBill->priceSale , 0 , ',' , '.' ) }}</td>
                                                <td>{{ number_format( $dataBill->income , 0 , ',' , '.' ) }}</td>
                                                <td>{{ number_format( $dataBill->bill , 0 , ',' , '.' ) }}</td>
                                                <td>{{ $dataBill->debt }}</td>
                                                <td>{{ $dataBill->shellDebt }}</td>
                                                <td>{{ $dataBill->shellDebtAmmount }}</td>
                                                <td>{{ number_format( $dataBill->buyPrice , 0 , ',' , '.' ) }}</td>
                                                <td>{{ number_format( $dataBill->buyTotal , 0 , ',' , '.' ) }}</td>
                                                <td>{{ number_format( $dataBill->moneySent , 0 , ',' , '.' ) }}</td>
                                                <td>{{ number_format( $dataBill->moneyPaidTotal , 0 , ',' , '.' ) }}</td>
                                                <td>{{ number_format( $dataBill->moneyPaidDebt , 0 , ',' , '.' ) }}</td>
                                                <td>{{ $dataBill->reciveInfo }}</td>
                                                <td>{{ $dataBill->note }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Statistics Row -->
                            </div>
                            <!-- End Product Statistics -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    <!-- jQuery -->
    <script src="{{ asset('edittable/jquery.min.js') }}"></script>

    <script src="{{ asset('edittable/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('edittable/edit-task-table-data.js') }}"></script>
@endsection
