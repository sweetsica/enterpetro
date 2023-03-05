@extends('template.master')
{{--Trang chủ admin--}}
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection
@section('content')
    {{--    @dump($priceOrigin)--}}
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pt-30">
                            <h4 class="font-20 ">Basic Table</h4>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap bg-white dh-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Tag</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>Branding</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- End Invoice List Table -->
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pt-30">
                            <h4 class="font-20 ">Hoverable Table</h4>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap hoverable dh-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Tag</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>Branding</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- End Invoice List Table -->
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pt-30">
                            <h4 class="font-20 ">Border Table</h4>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap table-bordered dh-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Tag</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>Branding</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- End Invoice List Table -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card mb-30">
                        <div class="card-body py-30 pb-0">
                            <h4 class="font-20 ">Stripped Table</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="style--four table-striped  text-nowrap">
                                <thead>
                                <tr>
                                    <th>Countries</th>
                                    <th>Users</th>
                                    <th>Likes</th>
                                    <th>Followers</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f1.png" alt="">
                                            </div>
                                            <div class="country-name">USA</div>
                                        </div>
                                    </td>
                                    <td>265878</td>
                                    <td>5878</td>
                                    <td>878</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f2.png" alt="">
                                            </div>
                                            <div class="country-name">China</div>
                                        </div>
                                    </td>
                                    <td>265878</td>
                                    <td>64578</td>
                                    <td>4578</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f3.png" alt="">
                                            </div>
                                            <div class="country-name">Russia</div>
                                        </div>
                                    </td>
                                    <td>658745</td>
                                    <td>8745</td>
                                    <td>745</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f4.png" alt="">
                                            </div>
                                            <div class="country-name">Spain</div>
                                        </div>
                                    </td>
                                    <td>365985</td>
                                    <td>65478</td>
                                    <td>5478</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f5.png" alt="">
                                            </div>
                                            <div class="country-name">Brazil</div>
                                        </div>
                                    </td>
                                    <td>265478</td>
                                    <td>65478</td>
                                    <td>5478</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f6.png" alt="">
                                            </div>
                                            <div class="country-name">France</div>
                                        </div>
                                    </td>
                                    <td>123654</td>
                                    <td>23654</td>
                                    <td>3654</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f7.png" alt="">
                                            </div>
                                            <div class="country-name">Algeria</div>
                                        </div>
                                    </td>
                                    <td>654987</td>
                                    <td>54987</td>
                                    <td>4987</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f8.png" alt="">
                                            </div>
                                            <div class="country-name">Andora</div>
                                        </div>
                                    </td>
                                    <td>659874</td>
                                    <td>59874</td>
                                    <td>9874</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="text_color-bg text-white mb-30">
                        <div class="card-body py-30 pb-0">
                            <h4 class="font-20 ">Inverse Table</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="style--four table-striped table-inverse text-nowrap">
                                <thead>
                                <tr>
                                    <th>Countries</th>
                                    <th>Users</th>
                                    <th>Likes</th>
                                    <th>Followers</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f1.png" alt="">
                                            </div>
                                            <div class="country-name">USA</div>
                                        </div>
                                    </td>
                                    <td>265878</td>
                                    <td>5878</td>
                                    <td>878</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f2.png" alt="">
                                            </div>
                                            <div class="country-name">China</div>
                                        </div>
                                    </td>
                                    <td>265878</td>
                                    <td>64578</td>
                                    <td>4578</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f3.png" alt="">
                                            </div>
                                            <div class="country-name">Russia</div>
                                        </div>
                                    </td>
                                    <td>658745</td>
                                    <td>8745</td>
                                    <td>745</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f4.png" alt="">
                                            </div>
                                            <div class="country-name">Spain</div>
                                        </div>
                                    </td>
                                    <td>365985</td>
                                    <td>65478</td>
                                    <td>5478</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f5.png" alt="">
                                            </div>
                                            <div class="country-name">Brazil</div>
                                        </div>
                                    </td>
                                    <td>265478</td>
                                    <td>65478</td>
                                    <td>5478</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f6.png" alt="">
                                            </div>
                                            <div class="country-name">France</div>
                                        </div>
                                    </td>
                                    <td>123654</td>
                                    <td>23654</td>
                                    <td>3654</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f7.png" alt="">
                                            </div>
                                            <div class="country-name">Algeria</div>
                                        </div>
                                    </td>
                                    <td>654987</td>
                                    <td>54987</td>
                                    <td>4987</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="country-flag">
                                                <img src="../../assets/img/flag/f8.png" alt="">
                                            </div>
                                            <div class="country-name">Andora</div>
                                        </div>
                                    </td>
                                    <td>659874</td>
                                    <td>59874</td>
                                    <td>9874</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pt-30">
                            <h4 class="font-20 ">Table Head Options</h4>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap dh-table">
                                <thead class="text_color-bg text-white">
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Tag</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>Branding</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- End Invoice List Table -->
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-body pt-30">
                            <h4 class="font-20 ">Contextual Classes</h4>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap table-contextual dh-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Tag</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr data-bg-color="#CCF5F8">
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr data-bg-color="#E9E7FF">
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>Branding</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr data-bg-color="#FEE7FF">
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr data-bg-color="#FFE2E6">
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr data-bg-color="#DBF7E8">
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                <tr data-bg-color="#FFF4E6">
                                    <td>Christine McDonald</td>
                                    <td>$1564.32</td>
                                    <td>26 November 2019</td>
                                    <td>UX Solutions</td>
                                    <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- End Invoice List Table -->
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
    <script src="{{asset('edittable/jquery.min.js')}}"></script>

    <script src="{{asset('edittable/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('edittable/edit-task-table-data.js')}}"></script>
@endsection
