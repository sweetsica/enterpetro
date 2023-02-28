
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
                    <!-- Invoice Details List Wrapper -->
                    <div class="bg-white py-30 details-list-wrap">
                        <div class="table-responsive position-relative repeater-default pb-4">

                            <h4 class="font-20 mb-4">Invoice Form</h4>

                            <button data-repeater-create type="button" class="add-row-btn btn-circle">
                                <img src="../../assets/img/svg/plus_white.svg" alt="" class="svg">
                            </button>
{{--                            <form method="post" action="#" style="width: 70%; margin:0% auto">--}}
{{--                            @csrf--}}
                                <!-- Invoice List Table -->
                                <table id="invoice-edit-list-table" class="invoice-list-table style-two text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ngày nhập</th>
                                        <th><span>Khách hàng</span></th>
                                        <th><span>ĐVT</span></th>
                                        <th><span>KL/Bình</span></th>
                                        <th><span>SL Bình</span></th>
                                        <th><span>Tổng Kg</span></th>
                                        <th><span>Đơn giá bán</span></th>
                                        <th><span>Doanh thu</span></th>

                                        <th class="text-center"><span>Amount</span></th>
                                    </tr>
                                    </thead>

                                    <tbody data-repeater-list="group-a" class="bg-white">
                                    <tr data-repeater-item>
                                        <td class="bold">#01</td>
                                        <td><input type="text" class="theme-input-style style--three" value="PSD to html conversion"></td>
                                        <td><input type="text" class="theme-input-style style--three" value="26"></td>
                                        <td><input type="text" class="theme-input-style style--three" value="$64.3"></td>
                                        <td class="text-right">
                                            <div class="">
                                                <span>$2654.36</span>
                                                <span data-repeater-delete class="tr-close">
                                                            <img src="../../assets/img/svg/table-colse.svg" alt="" class="svg">
                                                        </span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr data-repeater-item>
                                        <td class="bold">#02</td>
                                        <td><input type="text" class="theme-input-style style--three" value="PSD to html conversion"></td>
                                        <td><input type="text" class="theme-input-style style--three" value="26"></td>
                                        <td><input type="text" class="theme-input-style style--three" value="$64.3"></td>
                                        <td class="text-right">
                                            <div class="">
                                                <span>$2654.36</span>
                                                <span data-repeater-delete class="tr-close">
                                                                <img src="../../assets/img/svg/table-colse.svg" alt="" class="svg">
                                                            </span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- End Invoice List Table -->
{{--                            </form>--}}
                        </div>
                    </div>
                    <!-- End Invoice Details List Wrapper -->
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
