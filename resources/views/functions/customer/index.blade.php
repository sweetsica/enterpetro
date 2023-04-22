@extends('template.master')
{{--Trang chủ admin--}}
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pt-30 justify-content-between d-flex">
                            <h4 class="font-20 ">Danh sách khách hàng</h4>
                            <div class="add-event-btn">
                                <a href="#" class="btn w-100" data-toggle="modal" data-target="#createEventModal">
                                    <img src="../../assets/img/svg/plus_white.svg" alt="" class="svg mr-1">
                                    Khách mới
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="text-nowrap table-bordered dh-table" style="max-width: none">
                                <thead>
                                <tr>
                                    <th>Mã khách hàng</th>
                                    <th>Tên khách</th>
                                    <th>Loại</th>
                                    <th>Địa chỉ</th>
                                    <th>Loại bình</th>
                                    <th>Số điện thoại</th>
                                    <th>TotalMass</th>
                                    <th>TotalPaid</th>
                                    <th>TotalShell</th>
                                    <th>DebtMoney</th>
                                    <th>DebtShell</th>
                                    <th>Ghi chú</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td style="text-align: center">{{$customer->id}}</td>
                                        <td><a href="{{route('detail-cus', $customer->id)}}">{{$customer->name}}</a>
                                        </td>
                                        <td>{{$customer->type}}</td>
                                        <td>{{$customer->address}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{$customer->totalMass}}</td>
                                        <td>{{$customer->totalPaid}}</td>
                                        <td>{{$customer->totalShell}}</td>
                                        <td>{{$customer->totalBill}}</td>
                                        <td>{{$customer->debtMoney}}</td>
                                        <td>{{$customer->debtShell}}</td>
                                        <td>{{$customer->note}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-12 pb-30 justify-content-between">
                    <div class="col-1" style="float: right;">
                        <div class="edit-event-btn">
{{--                            <a href="#" class="btn w-100" data-toggle="modal" data-target="#editEventModal">--}}
{{--                                Cập nhật--}}
{{--                            </a>--}}
                        </div>
                    </div>
                    <input id="search" name="search" value="{{$search ?? ''}}" onchange="fetchData()"
                           placeholder="Nhập mã đơn - enter để lọc">
                    <script>
                        function fetchData() {
                            const searchInput = document.getElementById('search')
                            const urlParams = new URLSearchParams(window.location.search);
                            urlParams.set('search', searchInput.value);
                            window.location.search = urlParams;
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="createEventModal" class="modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Body -->
                <div id="modalBody2" class="modal-body border-bottom-0 pt-0 pb-0">
                    <form action="{{ route('store-cus') }}" method="POST">
                        @csrf
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="salePrice"><i class="icofont-bill"></i></label>
                                <input type="text" id="name" placeholder="Tên khách hàng"
                                       name="name" required>
                            </div>
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="note"><i class="icofont-binary"></i></label>
                                <input type="text" id="type" placeholder="Sỉ"
                                       name="type" required>
                            </div>
                        </div>
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="note"><i class="icofont-binary"></i></label>
                                <input type="text" id="address" placeholder="Địa chỉ"
                                       name="address" required>
                            </div>
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="salePrice"><i class="icofont-bullet"></i></label>
                                <input type="text" id="phone" placeholder="Số điện thoại"
                                       name="phone" required>
                            </div>
                        </div>
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="salePrice"><i class="icofont-bullet"></i></label>
                                <input type="text" id="note" placeholder="Ghi chú"
                                       name="note" required>
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 pt-10">
                            <button type="submit" class="btn">Lên đơn</button>
                        </div>
                    </form>

                </div>
                <!-- End Modal Body -->
            </div>
        </div>
    </div>

{{--    <div id="editEventModal" class="modal">--}}
{{--        <div class="modal-dialog modal-dialog-centered">--}}
{{--            <div class="modal-content">--}}
{{--                <!-- Modal Body -->--}}
{{--                <div id="modalBody2" class="modal-body border-bottom-0 pt-0 pb-0">--}}
{{--                    <h4 class="font-20 mb-30 pt-20">Cập nhật đơn</h4>--}}
{{--                    <form action="{{ route('update-custome') }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        //--}}
{{--                        <div class="calendar-modal-dates mt-10 d-flex">--}}
{{--                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 50%;">--}}
{{--                                <label for="nameCustomer"><i class="icofont-beard"></i></label>--}}
{{--                                <input type="text" id="nameCustomer" placeholder="Mã đơn" name="codeBill" required>--}}
{{--                            </div>--}}
{{--                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 50%;">--}}
{{--                                <label for="address"><i class="icofont-address-book"></i></label>--}}
{{--                                <input type="text" id="address" placeholder="Tiền trả" name="moneyDebt">--}}
{{--                            </div>--}}
{{--                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 50%;">--}}
{{--                                <label for="address"><i class="icofont-address-book"></i></label>--}}
{{--                                <input type="text" id="address" placeholder="Vỏ trả" name="shellDebt">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="calendar-modal-dates mt-10 d-flex">--}}
{{--                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 100%;">--}}
{{--                                <label for="salePrice"><i class="icofont-bill"></i></label>--}}
{{--                                <input type="number" id="salePrice" placeholder="Ghi chú" name="note">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="modal-footer border-top-0 pt-10">--}}
{{--                            <button type="submit" class="btn">Cập nhật</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}

{{--                </div>--}}
{{--                <!-- End Modal Body -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
@section('footer-script')
    <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
    <script src="{{asset('assets/plugins/jquery-repeater/repeater.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-repeater/custom-repeater.js')}}"></script>
    <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
    <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
    <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datepicker/datepicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/timepicker/jquery.timepicker.min.js')}}"></script>
    <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
@endsection
