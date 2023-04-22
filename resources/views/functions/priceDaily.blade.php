@extends('template.master')
{{--Trang chủ admin--}}
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script>
        function formatNumber(inputId) {
            const inputElement = document.getElementById(inputId);
            const rawValue = inputElement.value.replaceAll(",", "");
            const formattedValue = new Intl.NumberFormat().format(rawValue);
            inputElement.value = formattedValue;
        }
    </script>
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
                            <table class="text-nowrap dh-table m-auto-mw-80">
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

                        <div id="originPriceModal" class="modal">
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
                                                    <input type="text" id="price1" oninput="formatNumber('price1')" class="theme-input-style" placeholder="Giá nhập" name="priceOrigin" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="minSaleOrigin">Giá bán</label>
                                                    <input type="text" id="price2" oninput="formatNumber('price2')" class="theme-input-style" placeholder="Giá bán" name="minSaleOrigin" required>
                                                </div>
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

    <script>
        $(document).ready(function() {
            $('#datePickerExample').datepicker({
                format: "dd MM yyyy",
                todayHighlight: true,
                autoclose: true,
            });
        });
    </script>
@endsection
