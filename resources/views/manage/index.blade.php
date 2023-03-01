
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
                    <!-- Card -->
                    <div class="card bg-transparent">
                        <!-- Contact Header -->
                        <div class="contact-header d-flex align-items-sm-center media flex-column flex-sm-row bg-white mb-30">
                            <div class="contact-header-left media-body d-flex align-items-center mr-4">
                                <!-- Add New Contact Btn -->
                                <div class="add-new-contact mr-20">
                                    <a href="#" class="btn-circle" data-toggle="modal" data-target="#contactAddModal">
                                        <img src="../../../assets/img/svg/plus_white.svg" alt="" class="svg">
                                    </a>
                                </div>
                                <!-- End Add New Contact Btn -->

                                <!-- Search Form -->
                                <form action="#" class="search-form flex-grow">
                                    <div class="theme-input-group style--two">
                                        <input type="text" class="theme-input-style" placeholder="Search Here">

                                        <button type="submit"><img src="../../../assets/img/svg/search-icon.svg" alt=""
                                                                   class="svg"></button>
                                    </div>
                                </form>
                                <!-- End Search Form -->
                            </div>

                            <div class="contact-header-right d-flex align-items-center justify-content-end mt-3 mt-sm-0">
                                <!-- Grid -->
                                <div class="grid">
                                    <a href="contact-grid.html"><img src="../../../assets/img/svg/grid-icon.svg" alt="" class="svg"></a>
                                </div>
                                <!-- End Grid -->

                                <!-- Starred -->
                                <div class="star">
                                    <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                </div>
                                <!-- End Starred -->

                                <!-- Delete Mail -->
                                <div class="delete_mail">
                                    <a href="#"><img src="../../../assets/img/svg/delete.svg" alt="" class="svg"></a>
                                </div>
                                <!-- End Delete Mail -->

                                <!-- Pagination -->
                                <div class="pagination style--two d-flex flex-column align-items-center ml-n2">
                                    <ul class="list-inline d-inline-flex align-items-center">
                                        <li><a href="#">
                                                <img src="../../../assets/img/svg/left-angle.svg" alt="" class="svg">
                                            </a></li>
                                        <li><a href="#" class="current">
                                                <img src="../../../assets/img/svg/right-angle.svg" alt="" class="svg">
                                            </a></li>
                                    </ul>
                                </div>
                                <!-- End Pagination -->
                            </div>
                        </div>
                        <!-- End Contact Header -->


                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="contact-list-table text-nowrap bg-white">
                                <thead>
                                <tr>
                                    <th>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </th>
                                    <th class="text-center">Name <img src="../../../assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Age <img src="../../../assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                    <th>Post</th>
                                    <th>Joining Date <img src="../../../assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                    <th>Salary <img src="../../../assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m16.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold">
                                                Arden Spencer
                                            </div>
                                        </div>
                                    </td>
                                    <td>Evangeline62@yahoo.com</td>
                                    <td>(023) 708-6818 x4267</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>June 20, 2015</td>
                                    <td>$26253.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m20.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Favian Maggio DDS </div>
                                        </div>
                                    </td>
                                    <td>Electa_Conroy@hotmail.com</td>
                                    <td>1-076-628-3095 x7154</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>October 11, 2019</td>
                                    <td>$26253.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m21.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Jacey Considine </div>
                                        </div>
                                    </td>
                                    <td>Garry23@yahoo.com</td>
                                    <td>1-016-234-2482</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>January 2, 2016</td>
                                    <td>$6162.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m22.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Kolby Torphy II </div>
                                        </div>
                                    </td>
                                    <td>Phyllis75@hotmail.com</td>
                                    <td>1-345-656-4163 x373</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>August 9, 2017</td>
                                    <td>$4022.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m23.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Mattie Daugherty </div>
                                        </div>
                                    </td>
                                    <td>Jessika.Conroy@yahoo.com</td>
                                    <td>721-969-9795 x09197</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>December 24, 2016</td>
                                    <td>$11588.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m24.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Timothy Littel </div>
                                        </div>
                                    </td>
                                    <td>Nannie_Kling49@hotmail.com</td>
                                    <td>1-251-141-2444 x275</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>February 8, 2019</td>
                                    <td>$14283.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr class="selected">
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m19.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Karli Braun </div>
                                        </div>
                                    </td>
                                    <td>Ruthe_Gleichner@gmail.com</td>
                                    <td>697.704.7326</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>October 25, 2016</td>
                                    <td>$13329.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr class="selected">
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m16.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold">
                                                Arden Spencer
                                            </div>
                                        </div>
                                    </td>
                                    <td>Evangeline62@yahoo.com</td>
                                    <td>(023) 708-6818 x4267</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>June 20, 2015</td>
                                    <td>$26253.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m20.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Favian Maggio DDS </div>
                                        </div>
                                    </td>
                                    <td>Electa_Conroy@hotmail.com</td>
                                    <td>1-076-628-3095 x7154</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>October 11, 2019</td>
                                    <td>$26253.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m21.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Jacey Considine </div>
                                        </div>
                                    </td>
                                    <td>Garry23@yahoo.com</td>
                                    <td>1-016-234-2482</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>January 2, 2016</td>
                                    <td>$6162.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m22.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Kolby Torphy II </div>
                                        </div>
                                    </td>
                                    <td>Phyllis75@hotmail.com</td>
                                    <td>1-345-656-4163 x373</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>August 9, 2017</td>
                                    <td>$4022.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m23.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Timothy Littel </div>
                                        </div>
                                    </td>
                                    <td>Nannie_Kling49@hotmail.com</td>
                                    <td>1-251-141-2444 x275</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>February 8, 2019</td>
                                    <td>$14283.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m2.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Birdie Thiel </div>
                                        </div>
                                    </td>
                                    <td>Kenya.Stanton@yahoo.com</td>
                                    <td>209-225-4857</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>August 7, 2015</td>
                                    <td>$18037.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <!-- Star -->
                                        <div class="star">
                                            <a href="#"><img src="../../../assets/img/svg/star.svg" alt="" class="svg"></a>
                                        </div>
                                        <!-- End Star -->
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="img mr-20">
                                                <img src="../../../assets/img/avatar/m19.png" class="img-40" alt="">
                                            </div>
                                            <div class="name bold"> Karli Braun </div>
                                        </div>
                                    </td>
                                    <td>Ruthe_Gleichner@gmail.com</td>
                                    <td>697.704.7326</td>
                                    <td>28</td>
                                    <td>UX Researcher</td>
                                    <td>October 25, 2016</td>
                                    <td>$13329.0</td>
                                    <td class="actions">
                                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                                            </span>
                                        <span class="contact-close">
                                                <img src="../../../assets/img/svg/c-close.svg" alt="" class="svg">
                                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- End Invoice List Table -->
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Contact Add New PopUp -->
                    <div id="contactAddModal" class="modal fade">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <form action="#">

                                        <div class="media flex-column flex-sm-row">
                                            <div class="modal-upload-avatar mr-0 mr-sm-3 mr-md-5 mb-5 mb-sm-0">

                                                <div class="attach-file style--two mb-3">
                                                    <img src="../../../assets/img/img-placeholder.png" class="profile-avatar" alt="">
                                                    <div class="upload-button">
                                                        <img src="../../../assets/img/svg/gallery.svg" alt="" class="svg mr-2">
                                                        <span>Upload Photo</span>
                                                        <input class="file-input" type="file" id="fileUpload" accept="image/*">
                                                    </div>
                                                </div>

                                                <div class="content">
                                                    <h4 class="mb-2">Upload a Photo</h4>
                                                    <p class="font-12 c4">Allowed JPG, GIF or PNG. Max size <br /> of 800kB</p>
                                                </div>
                                            </div>


                                            <div class="contact-account-setting media-body">

                                                <h4 class="mb-4">Account Settings</h4>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="as_name">Name</label>
                                                    <input type="text" id="as_name" class="theme-input-style" placeholder="Type Here" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="as_email">Email</label>
                                                    <input type="email" id="as_email" class="theme-input-style" placeholder="Type Here" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2"  for="as_phone">Phone</label>
                                                    <input type="number" id="as_phone" class="theme-input-style" placeholder="Type Here" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="as_age">Age</label>
                                                    <input type="text" id="as_age" class="theme-input-style" placeholder="Type Here" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="as_post">Post</label>
                                                    <input type="text" id="as_post" class="theme-input-style" placeholder="Type Here" required>
                                                </div>

                                                <div class="mb-30">
                                                    <label class="bold black mb-2">Joining Date</label>

                                                    <div class="date datepicker dashboard-date style--two" id="datePickerExample">
                                                        <span class="input-group-addon mr-0"><img src="../../../assets/img/svg/calender.svg" alt="" class="svg"></span>
                                                        <input type="text" class="pl-2" required>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <a href="#" class="btn mr-4">Save Changes</a>
                                                    <a href="#" class="cancel font-14 bold" data-dismiss="modal">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Modal Body -->
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Add New PopUp -->

                    <!-- Contact Edit PopUp -->
                    <div id="contactEditModal" class="modal fade">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <form action="#">
                                        <div class="media flex-column flex-sm-row">
                                            <div class="modal-upload-avatar mr-0 mr-sm-3 mr-md-5 mb-5 mb-sm-0">

                                                <div class="attach-file style--two mb-3">
                                                    <img src="../../../assets/img/product/pg2.png" class="profile-avatar" alt="">
                                                    <div class="upload-button">
                                                        <img src="../../../assets/img/svg/gallery.svg" alt="" class="svg mr-2">
                                                        <span>Upload Photo</span>
                                                        <input class="file-input" type="file" id="fileUpload2" accept="image/*">
                                                    </div>
                                                </div>

                                                <div class="content">
                                                    <h4 class="mb-2">Upload a Photo</h4>
                                                    <p class="font-12 c4">Allowed JPG, GIF or PNG. Max size <br /> of 800kB</p>
                                                </div>
                                            </div>


                                            <div class="contact-account-setting media-body">

                                                <h4 class="mb-4">Account Settings</h4>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="as_name2">Name</label>
                                                    <input type="text" id="as_name2" class="theme-input-style" value="Arden Spencer" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="as_email2">Email</label>
                                                    <input type="email" id="as_email2" class="theme-input-style" value="Evangeline62@yahoo.com" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2"  for="as_phone2">Phone</label>
                                                    <input type="text" id="as_phone2" class="theme-input-style" value="(023) 708-6818 x4267" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="as_age2">Age</label>
                                                    <input type="text" id="as_age2" class="theme-input-style" value="28" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="bold black mb-2" for="as_post2">Post</label>
                                                    <input type="text" id="as_post2" class="theme-input-style" value="UX Researcher" required>
                                                </div>

                                                <div class="mb-30">
                                                    <label class="bold black mb-2">Joining Date</label>

                                                    <div class="date datepicker dashboard-date style--two" id="datePickerExample2">
                                                        <span class="input-group-addon mr-0"><img src="../../../assets/img/svg/calender.svg" alt="" class="svg"></span>
                                                        <input type="text" class="pl-2" required>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <a href="#" class="btn mr-4">Save Changes</a>
                                                    <a href="#" class="cancel font-14 bold" data-dismiss="modal">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Modal Body -->
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Edit PopUp -->
                </div>
            </div>
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
