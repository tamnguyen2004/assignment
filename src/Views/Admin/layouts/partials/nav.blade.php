<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{ url('admin')}}"><img src="{{ asset('assets/admin/img/logo.png') }}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a href="{{ url('admin')}}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/dashboard.svg') }}" alt>
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class>
            <a href="{{ url('admin/categorys')}}" aria-expanded="false">
                <div class="icon_menu">
                <img src="{{ asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Danh Mục</span>
            </a>
        </li>

        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                <img src="{{ asset('assets/admin/img/menu-icon/8.svg') }}" alt>
                </div>
                <span>Sản phẩm</span>
            </a>
            <ul>
                <li><a href="{{ url('admin/products')}}">Danh sách</a></li>
                <li><a href="{{ url('admin/products/create')}}">Thêm</a></li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                <img src="{{ asset('assets/admin/img/menu-icon/8.svg') }}" alt>
                </div>
                <span>Người dùng</span>
            </a>
            <ul>
                <li><a href="{{ url('admin/users')}}">Danh sách</a></li>
                <!-- <li><a href="{{ url('admin/products/create')}}">Thêm</a></li> -->
            </ul>
        </li>
        <!-- </li>
        
        </li>
        <li class>
            <a href="calender.html" aria-expanded="false">
                <div class="icon_menu">
                <img src="{{ asset('assets/admin/img/menu-icon/3.svg') }}" alt>
                </div>
                <span>Người dùng</span>
            </a>
            <ul>
                <li><a href="{{ url('admin/products')}}">Danh sách</a></li>
                <li><a href="{{ url('admin/products/create')}}">Thêm</a></li>
            </ul>
        </li> -->


    </ul>
</nav>