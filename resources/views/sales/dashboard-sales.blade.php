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
{{--                                <button type="submit" class="btn long mr-20" data-toggle="modal"--}}
{{--                                        data-target="#originPriceModal">Thêm đơn--}}
{{--                                </button>--}}
                                <div class="add-event-btn">
                                    <a href="#" class="btn w-100" data-toggle="modal" data-target="#createEventModal">
                                        <img src="../../assets/img/svg/plus_white.svg" alt="" class="svg mr-1">
                                        Add New Event
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

{{--        <div id="originPriceModal" class="modal fade">--}}
{{--        <div class="modal-dialog modal-dialog-centered">--}}
{{--            <div class="modal-content">--}}
{{--                <!-- Modal Body -->--}}
{{--                <div class="modal-body">--}}
{{--                    <form action="{{ route('addBill') }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        @method('POST')--}}
{{--                        <div class="contact-account-setting media-body">--}}
{{--                            <h4 class="mb-4">Đơn hàng</h4>--}}
{{--                            <div class="mb-4">--}}
{{--                                <label class="bold black mb-2" for="nameCustomer">Tên khách</label>--}}
{{--                                <input type="text" id="nameCustomer" class="theme-input-style"--}}
{{--                                       placeholder="Họ tên" name="nameCustomer" required>--}}
{{--                            </div>--}}

{{--                            <div class="mb-4">--}}
{{--                                <label class="bold black mb-2" for="massShell">Loại bình</label>--}}
{{--                                <select class="theme-input-style" id="shellType" required name="shellType">--}}
{{--                                    <option selected disabled>-Chọn-</option>--}}
{{--                                    @foreach($shellTypes as $shellType)--}}
{{--                                        <option class="theme-input-style"--}}
{{--                                                value="{{$shellType['id']}}">{{$shellType['name']}}--}}
{{--                                            - {{$shellType['massShell']}}{{$shellType['unitShell']}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}

{{--                            </div>--}}

{{--                            <div class="mb-4">--}}
{{--                                <label class="bold black mb-2" for="ammount">Số lượng</label>--}}
{{--                                <input type="number" id="ammount" class="theme-input-style"--}}
{{--                                       placeholder="Bình" name="ammount" required>--}}
{{--                            </div>--}}

{{--                            <div class="mb-4 col-xs-6">--}}
{{--                                <label class="bold black mb-2" for="storageId">Chọn từ kho</label>--}}
{{--                                <select class="theme-input-style" id="storageId" required name="storageId">--}}
{{--                                    <option selected disabled>-Chọn-</option>--}}
{{--                                    @foreach($storages as $storage)--}}
{{--                                        <option class="theme-input-style" placeholder="Chọn"--}}
{{--                                                value="{{$storage['id']}}">{{$storage['name']}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}

{{--                            <div class="mb-4">--}}
{{--                                --}}{{--                                                        @dd($minSaleOrigin)--}}
{{--                                @if(!is_null($priceOrigin))--}}
{{--                                    <label class="bold black mb-2" for="salePrice">Giá bán (Giá hôm--}}
{{--                                        nay: {{ number_format($priceOrigin['minSaleOrigin'], 0 , ',' , '.' ) }}--}}
{{--                                        đ)</label>--}}
{{--                                @endif--}}
{{--                                <input type="number" id="salePrice" class="theme-input-style"--}}
{{--                                       placeholder="VND" name="salePrice" required>--}}
{{--                            </div>--}}

{{--                            <div class="mb-4">--}}
{{--                                <label class="bold black mb-2" for="address">Địa chỉ giao</label>--}}
{{--                                <input type="text" id="address" class="theme-input-style"--}}
{{--                                       placeholder="Địa chỉ nhận" name="address" required>--}}
{{--                            </div>--}}

{{--                            <div class="mb-4">--}}
{{--                                <label class="bold black mb-2" for="address">Tiền nợ</label>--}}
{{--                                <input type="text" id="address" class="theme-input-style"--}}
{{--                                       placeholder="đ" name="debt" required>--}}
{{--                            </div>--}}

{{--                            <div class="mb-4">--}}
{{--                                <label class="bold black mb-2" for="address">Ghi chú</label>--}}
{{--                                <input type="text" id="address" class="theme-input-style"--}}
{{--                                       placeholder="..." name="note" required>--}}
{{--                            </div>--}}

{{--                            <input hidden name="idSale" value="@if(session('userId')){{ session('userId')}}@endif">--}}

{{--                            <div class="">--}}
{{--                                <button class="btn mr-4">Lên đơn</button>--}}
{{--                                <a href="#" class="cancel font-14 bold"--}}
{{--                                   data-dismiss="modal">Cancel</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <!-- End Modal Body -->--}}
{{--            </div>--}}
{{--        </div>--}}

    <div id="createEventModal" class="modal fade">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header pb-0 border-bottom-0 flex-column">
                            <div class="custom-select-box d-inline-flex align-items-center m_style">
                                <label for="formGroupExampleInput6"><img src="../../assets/img/svg/color.svg" alt="" class="svg"></label>
                                <select id="formGroupExampleInput6">
                                    <option value="travel">Travel</option>
                                    <option value="calendar">Calendar</option>
                                    <option value="birthday">Birthday</option>
                                    <option value="holyday">Holyday</option>
                                    <option value="discovered">Discovered</option>
                                    <option value="meetup">Meetup</option>
                                    <option value="anniversary">Anniversary</option>
                                </select>
                            </div>

                            <div class="calendar-modal-title-wrap w-100 d-flex mt-10">
                                <div class="calendar-modal-title m_style flex-grow">
                                    <label for="formGroupExampleInput"><i class="icofont-tag"></i></label>
                                    <input type="text" id="formGroupExampleInput" placeholder="Ewe fuc dudbared.">
                                </div>

                                <div class="calendar-modal-private m_style">
                                    <i class="icofont-unlock"></i>
                                </div>
                            </div>

                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">close</span>
                            </button>
                        </div>
                        <!-- End Modal Header -->

                        <!-- Modal Body -->
                        <div id="modalBody2" class="modal-body border-bottom-0 pt-0 pb-0">
                            <form>
                                <div class="calendar-modal-location m_style mt-10">
                                    <label for="formGroupExampleInput1"><i class="icofont-location-pin"></i></label>
                                    <input type="text" id="formGroupExampleInput1" placeholder="502 Ozisa Heights">
                                </div>


                                <div class="calendar-modal-dates mt-10 d-flex">
                                    <div class="calendar-modal-start-date m_style mr-2">
                                        <label for="formGroupExampleInput2"><i class="icofont-calendar"></i></label>
                                        <input type="text" id="formGroupExampleInput2" placeholder="2020-01-13">
                                    </div>

                                    <div class="calendar-modal-end-date m_style mr-2">
                                        <label for="formGroupExampleInput3"><i class="icofont-calendar"></i></label>
                                        <input type="text" id="formGroupExampleInput3" placeholder="2020-01-13">
                                    </div>

                                    <div class="calendar-modal-checkbox d-flex align-items-center">
                                        <input type="checkbox" id="formGroupExampleInput4">
                                        <label for="formGroupExampleInput4">All Day</label>
                                    </div>
                                </div>

                                <div class="calendar-modal-state d-inline-flex align-items-center mt-10 m_style">
                                    <label for="formGroupExampleInput5"><i class="icofont-bag-alt"></i></label>
                                    <select id="formGroupExampleInput5" class="m-state">
                                        <option value="busy">Busy</option>
                                        <option value="free">Free</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <!-- End Modal Body -->

                        <div class="modal-footer border-top-0 pt-10">
                            <button class="btn">Save</button>
                        </div>
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
