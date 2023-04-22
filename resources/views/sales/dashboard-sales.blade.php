@extends('template.master')
{{--Trang chủ admin--}}
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection
@section('content')
    {{--    @dump($priceOrigin)--}}
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-30">
                        {{--                        @dd($priceOrigin)--}}
                        @if(!is_null($priceOrigin))
                            <div class="card-body pt-30 justify-content-between d-flex">
                                <h4 class="font-20 ">Giá
                                    min: {{ number_format($priceOrigin['minSaleOrigin'], 0 , ',' , '.' ) }}đ</h4>
                                <div class="add-event-btn">
                                    <a href="#" class="btn w-100" data-toggle="modal" data-target="#createEventModal">
                                        <img src="../../assets/img/svg/plus_white.svg" alt="" class="svg mr-1">
                                        Lên đơn
                                    </a>
                                </div>

                            </div>
                        @endif
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap table-bordered dh-table" style="max-width: none">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã</th>
                                    <th>Tên khách</th>
                                    <th>Địa chỉ</th>
                                    <th>Loại bình</th>
                                    <th>Số bình</th>
                                    <th>Tổng kg</th>
                                    <th>Giá bán</th>
                                    <th>Tổng bill</th>
                                    <th>Tiền nợ</th>
                                    <th>Vỏ nợ</th>
                                    <th>Ghi chú</th>
                                    <th>Người bán</th>
                                    {{--                                    <th>#</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @if($dataBills)
                                    @foreach($dataBills as $dataBill)
                                        <tr>
                                            <td>{{$dataBill['id']}}</td>
                                            <td>{{$dataBill['codeBill']}}</td>
                                            <td>{{$dataBill->customer->name}}</td>
                                            <td>{{$dataBill['address']}}</td>
                                            <td>{{$dataBill['shellType']}}</td>
                                            <td>{{$dataBill['ammount']}}</td>
                                            <td>{{$dataBill['massTotal']}}</td>
                                            <td>{{number_format( $dataBill['salePrice'] , 0 , ',' , '.' )}}</td>
                                            <td>{{number_format( $dataBill['bill'] , 0 , ',' , '.' )}}đ</td>
                                            {{--                                            <td><a href="invoice-details.html" class="details-btn">Chi tiết <i class="icofont-arrow-right"></i></a></td>--}}
                                            <td>{{number_format( $dataBill['debt'] , 0 , ',' , '.' )}}đ</td>
                                            <th>{{$dataBill['shellDebt']}} bình</th>
                                            <td>{{$dataBill['note']}}</td>
                                            <td>{{$dataBill->user->name}}</td>
                                            {{--                                            <td><a href="#" class="btn w-100" data-toggle="modal" data-target="#createEventModal">Cập nhật</a></td>--}}
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-12 pb-30 justify-content-between">
                    <div class="col-1" style="float: right;">
                        <div class="edit-event-btn">
                            <a href="#" class="btn w-100" data-toggle="modal" data-target="#editEventModal">
                                {{--                                <img src="../../assets/img/svg/plus_white.svg" alt="" class="svg mr-1">--}}
                                Cập nhật
                            </a>
                        </div>
                    </div>
                    <div class="col-1" style="float: right;">
                        <div class="edit-event-btn">
                            <a href="#" class="btn w-100" data-toggle="modal" data-target="#createCustomerModal">
                                {{--                                <img src="../../assets/img/svg/plus_white.svg" alt="" class="svg mr-1">--}}
                                Khách mới
                            </a>
                        </div>
                    </div>
                    {{--                    <div class="col-1" style="float: right;">--}}
                    {{--                        <div class="edit-event-btn">--}}
                    {{--                            <a href="#" class="btn w-100" data-toggle="modal" data-target="#createEventModal">--}}
                    {{--                               Tìm kiếm--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
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
                    @if(!is_null($priceOrigin))
                        <h4 class="font-20 mb-30 pt-20" for="salePrice">Giá bán
                            (Min: {{ number_format($priceOrigin['minSaleOrigin'], 0 , ',' , '.' ) }} VND)</h4>
                    @endif
                    <form action="{{ route('addBill') }}" method="POST">
                        @csrf
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="nameCustomer"><i class="icofont-beard"></i></label>
                                <select class="basic-single" name="customer_id">
                                    <option value="" disabled selected>- Chọn khách từ kho -</option>
                                    @foreach($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="address"><i class="icofont-address-book"></i></label>
                                <input type="text" id="address" placeholder="Địa chỉ" name="address" required>
                            </div>
                        </div>
                        <div class="calendar-modal-dates mt-10 d-flex">
                            {{--Kho--}}
                            <div class="calendar-modal-start-date m_style mr-2 label-nm">
                                <label for="storageId"><i class="icofont-building"></i></label>
                                <select id="storageId" class="m-state">
                                    <option default placeholder="Chọn kho" disabled>-Chọn kho-</option>
                                    @foreach($storages as $storage)
                                        <option value="{{$storage['id']}}">{{$storage['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Số lượng bình--}}
                            <div class="calendar-modal-end-date m_style mr-2 label-nm">
                                <label for="ammount"><i class="icofont-box"></i></label>
                                <input type="number" id="ammount" placeholder="Số lượng bình" name="ammount" required>
                            </div>
                            {{--Loại bình--}}
                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 100%">
                                <label for="shellType"><i class="icofont-bullet"></i></label>
                                <select style="width: 100%" id="shellType" class="m-state" name="shellType">
                                    <option class="bt20" value="1"></option>
                                    <option class="bt25" value="2"></option>
                                    <option class="bt27" value="3"></option>
                                    <option class="bt28" value="4"></option>
                                    <option class="bn2" value="5"></option>
                                    <option class="bn3" value="6"></option>
                                    <option class="bn4" value="7"></option>
                                </select>
                            </div>
                        </div>
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="salePrice"><i class="icofont-bill"></i></label>
                                <input type="text" oninput="formatNumber('price3')" id="salePrice" placeholder="Giá bán"
                                       name="salePrice" required>
                            </div>
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="note"><i class="icofont-binary"></i></label>
                                <input type="text" id="note" placeholder="Note đơn" name="note">
                            </div>
                        </div>
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="note"><i class="icofont-binary"></i></label>
                                <input type="text" oninput="formatNumber('price3')" id="debt" placeholder="Nợ tiền"
                                       name="debt">
                            </div>
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="salePrice"><i class="icofont-bullet"></i></label>
                                <input type="text" id="shellDebt" placeholder="Nợ vỏ" name="shellDebt" required>
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

    <div id="editEventModal" class="modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Body -->
                <div id="modalBody2" class="modal-body border-bottom-0 pt-0 pb-0">
                    <h4 class="font-20 mb-30 pt-20">Cập nhật đơn</h4>
                    <form action="{{ route('updateBill') }}" method="POST">
                        @csrf
                        //
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="nameCustomer"><i class="icofont-beard"></i></label>
                                <input type="text" id="nameCustomer" placeholder="Mã đơn" name="codeBill" required>
                            </div>
                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="address"><i class="icofont-address-book"></i></label>
                                <input type="text" id="address" placeholder="Tiền trả" name="moneyDebt">
                            </div>
                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="address"><i class="icofont-address-book"></i></label>
                                <input type="text" id="address" placeholder="Vỏ trả" name="shellDebt">
                            </div>
                        </div>
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 100%;">
                                <label for="salePrice"><i class="icofont-bill"></i></label>
                                <input type="number" id="salePrice" placeholder="Ghi chú" name="note">
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 pt-10">
                            <button type="submit" class="btn">Cập nhật</button>
                        </div>
                    </form>

                </div>
                <!-- End Modal Body -->
            </div>
        </div>
    </div>

    <div id="createCustomerModal" class="modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Body -->
                <div id="modalBody2" class="modal-body border-bottom-0 pt-0 pb-0">
                    @if(!is_null($priceOrigin))
                        <h4 class="font-20 mb-30 pt-20" for="salePrice">Giá bán
                            (Min: {{ number_format($priceOrigin['minSaleOrigin'], 0 , ',' , '.' ) }} VND)</h4>
                    @endif
                    <form action="{{ route('addBill') }}" method="POST">
                        @csrf
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="nameCustomer"><i class="icofont-beard"></i></label>
                                {{--                                <input type="text" id="nameCustomer" placeholder="Họ tên" name="nameCustomer" required>--}}
                                <input list="nameCustomer" name="nameCustomer2" id="nameCustomer2">
                                <datalist id="nameCustomer">
                                    @foreach($customers as $customer)
                                        <option value="{{$customer->name}}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="address"><i class="icofont-address-book"></i></label>
                                <input type="text" id="address" placeholder="Địa chỉ" name="address" required>
                            </div>
                        </div>
                        <div class="calendar-modal-dates mt-10 d-flex">
                            {{--Kho--}}
                            <div class="calendar-modal-start-date m_style mr-2 label-nm">
                                <label for="storageId"><i class="icofont-building"></i></label>
                                <select id="storageId" class="m-state">
                                    <option default placeholder="Chọn kho" disabled>-Chọn kho-</option>
                                    @foreach($storages as $storage)
                                        <option value="{{$storage['id']}}">{{$storage['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Số lượng bình--}}
                            <div class="calendar-modal-end-date m_style mr-2 label-nm">
                                <label for="ammount"><i class="icofont-box"></i></label>
                                <input type="number" id="ammount" placeholder="Số lượng bình" name="ammount" required>
                            </div>
                            {{--Loại bình--}}
                            <div class="calendar-modal-start-date m_style mr-2 label-nm" style="width: 100%">
                                <label for="shellType"><i class="icofont-bullet"></i></label>
                                <select style="width: 100%" id="shellType" class="m-state" name="shellType">
                                    <option class="bt20" value="1"></option>
                                    <option class="bt25" value="2"></option>
                                    <option class="bt27" value="3"></option>
                                    <option class="bt28" value="4"></option>
                                    <option class="bn2" value="5"></option>
                                    <option class="bn3" value="6"></option>
                                    <option class="bn4" value="7"></option>
                                </select>
                            </div>
                        </div>
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="salePrice"><i class="icofont-bill"></i></label>
                                <input type="number" id="salePrice" placeholder="Giá bán" name="salePrice" required>
                            </div>
                            <div class="calendar-modal-end-date m_style mr-2 label-nm" style="width: 50%;">
                                <label for="note"><i class="icofont-binary"></i></label>
                                <input type="text" id="note" placeholder="Note đơn" name="note">
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 pt-10">
                            <button type="submit" class="btn">Tạo đơn</button>
                        </div>
                    </form>

                </div>
                <!-- End Modal Body -->
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function () {
            onKhoChange();
        })
        const inputStorage = document.getElementById('storageId')
        inputStorage.addEventListener('change', function handleChange(event) {
            onKhoChange();
        });

        function onKhoChange() {
            const storageId = document.getElementById('storageId').value
            console.log(storageId);
            $.ajax({
                url: '/kho/' + storageId,
                method: 'GET',
                success: function (response) {
                    console.log(response);
                    $('.bt20').text('(' + response.bt20 + ') - 20kg');
                    $('.bt25').text('(' + response.bt25 + ') - 25kg');
                    $('.bt27').text('(' + response.bt27 + ') - 27kg');
                    $('.bt28').text('(' + response.bt28 + ') - 28kg');
                    $('.bn2').text('(' + response.bn2 + ') - 2kg');
                    $('.bn3').text('(' + response.bn3 + ') - 3kg');
                    $('.bn4').text('(' + response.bn4 + ') - 4kg');
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    </script>
    <script>
        function formatNumber(inputId) {
            const inputElement = document.getElementById('salePrice');
            const rawValue = inputElement.value.replaceAll(",", "");
            const formattedValue = new Intl.NumberFormat().format(rawValue);
            inputElement.value = formattedValue;
        }
    </script>
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
    <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= --><!-- ✅ Your JS script here ✅  -->
    <script>
        $(document).ready(function () {
            $('.basic-single').select2();
        });
    </script>
@endsection
