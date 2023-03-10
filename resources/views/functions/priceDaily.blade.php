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
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pt-30 justify-content-between d-flex">
                            <h4 class="font-20 ">Thống kê đơn giá</h4>
                            <button type="submit" class="btn long mr-20" data-toggle="modal"
                                    data-target="#originPriceModal">Nhập mới
                            </button>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap dh-table">
                                <thead class="text_color-bg text-white">
                                <tr>
                                    <th>ID Đơn</th>
                                    <th>Giá nhập</th>
                                    <th>Giá bán</th>
                                    <th>Thời gian nhập</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($priceOrigins as $priceOrigin)
                                    <tr>
                                        <td>{{$priceOrigin->id}}</td>
                                        <td>{{number_format( $priceOrigin->priceOrigin , 0 , ',' , '.' )}}</td>
                                        <td>{{number_format( $priceOrigin->minSaleOrigin , 0 , ',' , '.' )}}</td>
                                        <td>{{$priceOrigin->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        {{$priceOrigins->links( "pagination::bootstrap-4")}}
                        <!-- End Invoice List Table -->
                        </div>
                        <div id="originPriceModal" class="modal fade">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form action="{{ route('addPriceDaily') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <div class="contact-account-setting media-body">
                                                <h4 class="mb-4">Thêm mới</h4>
                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="priceOrigin">Giá nhập</label>
                                                    <input type="number" id="priceOrigin" class="theme-input-style"
                                                           placeholder="Giá nhập" name="priceOrigin" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="minSaleOrigin">Giá bán</label>
                                                    <input type="number" id="minSaleOrigin" class="theme-input-style"
                                                           placeholder="Giá bán" name="minSaleOrigin" required>
                                                </div>
{{--                                                <div class="mb-30">--}}
{{--                                                    <label class="bold black mb-2">Ngày nhập</label>--}}
{{--                                                    <div class="date datepicker dashboard-date style--two"--}}
{{--                                                         id="datePickerExample">--}}
{{--                                                            <span class="input-group-addon mr-0"><img--}}
{{--                                                                    src="{{asset('assets/img/svg/calender.svg')}}"--}}
{{--                                                                    alt=""--}}
{{--                                                                    class="svg"></span>--}}
{{--                                                        <input id="datePicker" type="text" class="pl-2"--}}
{{--                                                               required readonly name="createdDate">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

                                                <div class="">
                                                    <button class="btn mr-4">Báo giá</button>
                                                    <a href="#" class="cancel font-14 bold"
                                                       data-dismiss="modal">Hủy</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Modal Body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
@section('footer-script')
    <!-- jQuery -->
    {{--    <script src="{{asset('edittable/jquery.min.js')}}"></script>--}}

    {{--    <script src="{{asset('edittable/jquery.slimscroll.js')}}"></script>--}}
    {{--    <script src="{{asset('edittable/edit-task-table-data.js')}}"></script>--}}

    <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
    <script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datepicker/custom-datepicker.js')}}"></script>
    <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->

    <script>
        $('#datePickerExample').datepicker({
            format: "dd MM yyyy",
            todayHighlight: true,
            autoclose: true,
        });
        console.log(123);
    </script>
@endsection
