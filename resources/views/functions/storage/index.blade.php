
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
                        <div class="table-responsive position-relative repeater-default pb-4">
                            <h4 class="font-20 mb-4">Thống kê kho</h4>
                            <form method="post" action="{{route('updateBill')}}">
                            @csrf
                                <table id="edit_task_datable" class="invoice-list-table style-two text-nowrap" data-update-url="{{route('api-storage-update')}}" >
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span>Tên kho</span></th>
                                        <th>Tổng khối lượng</th>
                                        <th>Tổng vỏ</th>
                                        <th>Số bình 20</th>
                                        <th>Số bình 25</th>
                                        <th>Số bình 27</th>
                                        <th>Số bình 28</th>
                                        <th>Số bình 2</th>
                                        <th>Số bình 3</th>
                                        <th>Số bình 4</th>
                                        <th>Ghi chú</th>
                                        <th>Trạng thái</th>
{{--                                        <th class="text-center"><span>Amount</span></th>--}}
                                    </tr>
                                    </thead>
                                    <tbody data-repeater-list="group-a" class="bg-white">
{{--                                    @dd($totalMass,$totalShell)--}}
                                    @foreach($datas as $data)
                                        <tr data-repeater-item>
                                            <th>#</th>
                                            <td><input style="background-color: white;" disabled type="text" data-id="{{$data->id}}" data-name="name" class="theme-input-style style--three" value="{{$data->name}}"></td>
                                            <td><input style="background-color: white;" disabled type="text" data-id="{{$data->id}}" data-name="totalShell" class="theme-input-style style--three" value="{{$totalMass[$data['id']]}}"></td>
                                            <td><input style="background-color: white;" type="text" data-id="{{$data->id}}" data-name="totalShellMass" class="theme-input-style style--three" value="{{$totalShell[$data['id']]}}"></td>
                                            <td><input type="text" data-id="{{$data->id}}" data-name="bt20" class="theme-input-style style--three" value="{{$data->bt20}}"></td>
                                            <td><input type="text" data-id="{{$data->id}}" data-name="bt25" class="theme-input-style style--three" value="{{$data->bt25}}"></td>
                                            <td><input type="text" data-id="{{$data->id}}" data-name="bt27" class="theme-input-style style--three" value="{{$data->bt27}}"></td>
                                            <td><input type="text" data-id="{{$data->id}}" data-name="bt28" class="theme-input-style style--three" value="{{$data->bt28}}"></td>
                                            <td><input type="text" data-id="{{$data->id}}" data-name="bn2" class="theme-input-style style--three" value="{{$data->bn2}}"></td>
                                            <td><input type="text" data-id="{{$data->id}}" data-name="bn3" class="theme-input-style style--three" value="{{$data->bn3}}"></td>
                                            <td><input type="text" data-id="{{$data->id}}" data-name="bn4" class="theme-input-style style--three" value="{{$data->bn4}}"></td>
                                            <td><input type="text" data-id="{{$data->id}}" data-name="note" class="theme-input-style style--three" value="{{$data->note}}"></td>
                                            <td><input type="text" data-id="{{$data->id}}" data-name="status" class="theme-input-style style--three" value="{{$data->status}}"></td>
                                           <td>
{{--                                            <span data-repeater-delete class="tr-close">--}}
{{--                                                <img src="../../assets/img/svg/table-colse.svg" alt="" class="svg">--}}
{{--                                            </span>--}}
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

