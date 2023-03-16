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
                                <h4 class="font-20 ">Đơn hàng - (Giá hôm
                                    nay: {{ number_format($priceOrigin['minSaleOrigin'], 0 , ',' , '.' ) }}đ)</h4>
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
                                    <th>Tên khách</th>
                                    <th>Địa chỉ</th>
                                    <th>Loại bình</th>
                                    <th>Số bình</th>
                                    <th>Tổng kg</th>
                                    <th>Giá bán</th>
                                    <th>Tổng bill</th>
                                    <th>Tiền nợ</th>
                                    <th>Ghi chú</th>
                                    {{--                                    <th>#</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @if($dataBills)
                                    @foreach($dataBills as $dataBill)
                                        <tr>
                                            <td>{{$dataBill['nameCustomer']}}</td>
                                            <td>{{$dataBill['address']}}</td>
                                            <td>{{$dataBill['shellType']}}</td>
                                            <td>{{$dataBill['ammount']}}</td>
                                            <td>{{$dataBill['massTotal']}}</td>
                                            <td>{{number_format( $dataBill['salePrice'] , 0 , ',' , '.' )}}</td>
                                            <td>{{number_format( $dataBill['bill'] , 0 , ',' , '.' )}}đ</td>
                                            {{--                                            <td><a href="invoice-details.html" class="details-btn">Chi tiết <i class="icofont-arrow-right"></i></a></td>--}}
                                            <td>{{number_format( $dataBill['debt'] , 0 , ',' , '.' )}}đ</td>
                                            <td>{{$dataBill['note']}}</td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="createEventModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Body -->
                <div id="modalBody2" class="modal-body border-bottom-0 pt-0 pb-0">
                    @if(!is_null($priceOrigin))
                        <h4 class="font-20 mb-30 pt-20" for="salePrice">Giá bán (Giá hôm
                            nay: {{ number_format($priceOrigin['minSaleOrigin'], 0 , ',' , '.' ) }}
                            đ)</h4>
                    @endif
                    <form action="{{ route('addBill') }}" method="POST">
                        @csrf
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-start-date m_style mr-2">
                                <label for="nameCustomer"><i class="icofont-beard"></i></label>
                                <input type="text" id="nameCustomer" placeholder="Họ tên" name="nameCustomer" required>
                            </div>
                            <div class="calendar-modal-start-date m_style mr-2">
                                <label for="address"><i class="icofont-address-book"></i></label>
                                <input type="text" id="address" placeholder="Địa chỉ" name="address" required>
                            </div>
                        </div>

                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-start-date m_style mr-2" style="width: 100%">
                                <label for="shellType"><i class="icofont-bullet"></i></label>
                                <select style="width: 100%" id="shellType" class="m-state" name="shellType">
                                    @foreach($shellTypes as $shellType)--}}
                                        <option  value="{{$shellType['id']}}">{{$shellType['name']}} - {{$shellType['massShell']}}{{$shellType['unitShell']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="calendar-modal-end-date m_style mr-2" >
                                <label for="ammount"><i class="icofont-box"></i></label>
                                <input type="number" id="ammount" placeholder="Số lượng bình" name="ammount" required>
                            </div>
                            <div class="calendar-modal-start-date m_style mr-2">
                                <label for="storageId"><i class="icofont-building"></i></label>
                                <select id="storageId" class="m-state">
                                    @foreach($storages as $storage)
                                        <option placeholder="Chọn" value="{{$storage['id']}}">{{$storage['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="calendar-modal-dates mt-10 d-flex">
                            <div class="calendar-modal-end-date m_style mr-2">
                                <label for="salePrice"><i class="icofont-bill"></i></label>
                                <input type="number" id="salePrice" placeholder="Giá bán" name="salePrice" required>
                            </div>
                            <div class="calendar-modal-end-date m_style mr-2">
                                <label for="note"><i class="icofont-binary"></i></label>
                                <input type="text" id="note" placeholder="Note đơn" name="note" required>
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
        <!-- End Main Content -->
    @endsection
    @section('footer-script')
        <!-- jQuery -->
            <script src="{{asset('edittable/jquery.min.js')}}"></script>

            <script src="{{asset('edittable/jquery.slimscroll.js')}}"></script>
            <script src="{{asset('edittable/edit-task-table-data.js')}}"></script>


            <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
            <script src="{{asset('assets/js/script.js')}}"></script>
@endsection
