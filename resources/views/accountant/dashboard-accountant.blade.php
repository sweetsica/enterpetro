@extends('template.master')
@section('content-header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection
@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Invoice Details List Wrapper -->
                    <div class="bg-white py-30 details-list-wrap">
                        <div class="card-body bg-white">
                            <div class="d-flex flex-column flex-xl-row justify-content-xl-between mb-2">
                                <div class="mb-4 mb-xl-0">
                                    <h4 class="mb-1">Thông số tổng quan</h4>
                                    @if(!is_null($priceOrigin))
                                        <p class="font-14">Mức giá đang áp dụng: Mua vào
                                            <span class="full-date ml-2">{{number_format( $priceOrigin->priceOrigin , 0 , ',' , '.' )}}đ</span>
                                            Giá bán tối thiểu
                                            <span class="full-date ml-2">{{number_format( $priceOrigin->minSaleOrigin , 0 , ',' , '.' )}}đ</span>
                                        </p>
                                    @endif
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
                                            <h4>{{number_format( $key_week ['totalMass'] , 000 , ',' , '.' )}} kg</h4>
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
                                            <h4>{{number_format( $key_week['totalBill'] , 0 , ',' , '.' )}}đ</h4>
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
                                            <h4>{{number_format( $key_week['totalBuy'] , 0 , ',' , '.' )}}đ</h4>
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
                                            <h4>{{number_format( $key_week['totalInterest'] , 0 , ',' , '.' )}}đ</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive position-relative repeater-default pb-4">
                            <h4 class="font-20 mb-4">Bảng kê kế toán</h4>
{{--                            <button data-repeater-create type="button" class="add-row-btn btn-circle">--}}
{{--                                <img src="../../assets/img/svg/plus_white.svg" alt="" class="svg">--}}
{{--                            </button>--}}
                            <form method="post" action="{{route('updateBill')}}">
                            @csrf
                            <!-- Invoice List Table -->
{{--                                <table id="invoice-edit-list-table" class="invoice-list-table style-two text-nowrap">--}}
                                <table id="edit_task_datable"
                                       class="invoice-list-table style-two text-nowrap"
                                       data-update-url="{{route('api-bill-update')}}"
                                >
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th><span>Ngày nhập</span></th>
                                    <th><span>Khách hàng</span></th>
                                    <th><span>ĐVT</span></th>
                                    <th><span>Khối lượng</span></th>
                                    <th><span>Số lượng</span></th>
                                    <th><span>Tổng Kg</span></th>
                                    <th><span>Đơn giá bán</span></th>
                                    <th><span>Doanh thu</span></th>
                                    <th><span>Thanh toán</span></th>
                                    <th><span>Tiền nợ</span></th>
                                    <th><span>Nợ vỏ</span></th>
                                    <th><span>Số vỏ nợ</span></th>
                                    <th><span>Giá nhập hàng</span></th>
                                    <th><span>Tổng phí nhập hàng</span></th>
                                    <th><span>Tiền đã thanh toán nhập hàng</span></th>
                                    <th><span>Tổng tiền chi thanh toán nhập hàng</span></th>
                                    <th><span>Chênh dư nợ tiền thanh toán nhập hàng</span></th>
                                    <th><span>Thông tin nhận tiền</span></th>
                                    <th><span>Ghi chú</span></th>
                                    <th class="text-center"><span>Amount</span></th>
                                </tr>
                                </thead>
                                <tbody data-repeater-list="group-a" class="bg-white">
                                @foreach($dataBills as $dataBill)
                                    <tr data-repeater-item>
                                        <td><input type="text" style="background-color: unset" class="theme-input-style style--three" value="{{$dataBill->id}}" disabled></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="inStoreDate" class="theme-input-style style--three" value="{{ date('d-m-Y', strtotime($dataBill->inStoreDate)) }}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="nameCustomer" class="theme-input-style style--three" value="{{$dataBill->nameCustomer}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="unit" class="theme-input-style style--three" value="{{$dataBill->unit}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="shellType" class="theme-input-style style--three" value="{{$dataBill->shellType}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="ammount" class="theme-input-style style--three" value="{{$dataBill->ammount}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="massTotal" class="theme-input-style style--three" value="{{$dataBill->massTotal}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="priceSale" class="theme-input-style style--three" value="{{number_format( $dataBill->priceSale , 0 , ',' , '.' )}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="income" class="theme-input-style style--three" value="{{number_format( $dataBill->income , 0 , ',' , '.' ) }}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="bill" class="theme-input-style style--three" value="{{number_format( $dataBill->bill , 0 , ',' , '.' )}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="debt" class="theme-input-style style--three" value="{{$dataBill->debt}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="shellDebt" class="theme-input-style style--three" value="{{$dataBill->shellDebt}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="shellDebtAmmount" class="theme-input-style style--three" value="{{$dataBill->shellDebtAmmount}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="buyPrice" class="theme-input-style style--three" value="{{number_format( $dataBill->buyPrice , 0 , ',' , '.' ) }}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="buyTotal" class="theme-input-style style--three" value="{{number_format( $dataBill->buyTotal , 0 , ',' , '.' )}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="moneySent" class="theme-input-style style--three" value="{{number_format( $dataBill->moneySent , 0 , ',' , '.' )}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="moneyPaidTotal" class="theme-input-style style--three" value="{{number_format( $dataBill->moneyPaidTotal , 0 , ',' , '.' )}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="moneyPaidDebt" class="theme-input-style style--three" value="{{number_format( $dataBill->moneyPaidDebt , 0 , ',' , '.' )}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="reciveInfo" class="theme-input-style style--three" value="{{$dataBill->reciveInfo}}"></td>
                                        <td><input type="text" data-id="{{$dataBill->id}}" data-name="note" class="theme-input-style style--three" value="{{$dataBill->note}}"></td>
                                        <td>
                                            <span data-repeater-delete class="tr-close">
                                                <img src="../../assets/img/svg/table-colse.svg" alt="" class="svg">
                                            </span>
                                        </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
{{--                            {!! $dataBills->appends(\Request::except('page'))->render() !!}--}}
                            <!-- End Invoice List Table -->
                            </form>
                        </div>
                    </div>
                    <!-- End Invoice Details List Wrapper -->
                </div>
            </div>

        </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('edittable/jquery.min.js')}}"></script>

    <script src="{{asset('edittable/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
{{--    <script src="{{asset('assets/js/script.js')}}"></script>--}}

    <script>
        const selector = $('#edit_task_datable :input');
        selector.on('change', function (event) {
            const id = event.target.getAttribute("data-id");
            const field = event.target.getAttribute('data-name');
            const value = event.target.value

            let apiUrl = $('#edit_task_datable').data('update-url');
            if(location.protocol.includes('https')) {
                apiUrl = apiUrl.replace('http://', 'https://');
            }

            const data = {
                id : id
            }
            data[field] = value;
            $.post(apiUrl, data);
            console.log(id, field, value);
        })
    </script>
@endsection
