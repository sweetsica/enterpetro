<nav class="sidebar" data-trigger="scrollbar">
    <!-- Sidebar Header -->
    <div class="sidebar-header d-none d-lg-block">
        <!-- Sidebar Toggle Pin Button -->
        <div class="sidebar-toogle-pin">
            <i class="icofont-tack-pin"></i>
        </div>
        <!-- End Sidebar Toggle Pin Button -->
    </div>
    <!-- End Sidebar Header -->
    <!-- Sidebar Body -->
    <div class="sidebar-body">
        <!-- Nav -->
        <ul class="nav">
            <li class="nav-category">Enter Petro</li>
            <li class="active">
                <a href="#">
                    <i class="icofont-table"></i>
                    <span class="link-title">Thống kê đơn hàng</span>
                </a>
                <!-- Sub Menu -->
                <ul class="nav sub-menu">
                    @if(session('role') == 'admin')
                        <li><a href="{{route('priceDaily')}}">Nạp giá</a></li>
                        <li><a href="{{route('dashboard-ad')}}">Tổng đơn</a></li>
                        <li><a href="{{route('dashboard-ac')}}">Danh sách đơn</a></li>
                    @elseif(session('role') == 'accounting')
                    <li><a href="{{route('dashboard-ac')}}">Danh sách đơn</a></li>
                    @endif
                    <li><a href="{{route('dashboard-sa')}}">Đơn hàng</a></li>
{{--                    <li><a href="{{route('billDetails')}}">Chi tiết đơn hàng</a></li>--}}
{{--                    <li><a href="{{route('addPriceDaily')}}">Biến động giá</a></li>--}}
                </ul>
                <!-- End Sub Menu -->
            </li>
            <li class="nav-category">Support</li>
        </ul>
        <!-- End Nav -->
    </div>
    <!-- End Sidebar Body -->
</nav>
