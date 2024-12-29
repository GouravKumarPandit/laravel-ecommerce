<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none sidebar-bg">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{url('admin/dashboard')}}">
                    <img src="{{asset('admin_assets/images/icon/logo.png')}}" alt="CoolAdmin" width="100px" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="@yield('dashboard_select')">
                    <a href="{{url('admin/dashboard')}}" class="text-white">
                        <i class="bi bi-grid"></i>Dashboard</a>
                </li>
                <li class="@yield('customer_select')">
                    <a href="{{url('admin/customer')}}" class="text-white">
                    <i class="bi bi-person-lines-fill"></i>Customer</a>
                </li>
                <li class="@yield('category_select')">
                    <a href="{{url('admin/category')}}" class="text-white">
                        <i class="fas fa-list"></i>Category</a>
                </li>
                <li class="@yield('product_select')">
                    <a href="{{url('admin/product')}}" class="text-white">
                    <i class="fa fa-product-hunt"></i>Product</a>
                </li>
                <li class="@yield('product_review_select')">
                    <a href="{{url('admin/product_review')}}" class="text-white">
                    <i class="fas fa-star"></i>Product Review</a>
                </li>
                <li class="@yield('order_select')">
                    <a href="{{url('admin/order')}}" class="text-white">
                        <i class="fas fa-shopping-basket"></i>Order</a>
                </li>

                <li class="@yield('coupon_select')">
                    <a href="{{url('admin/coupon')}}" class="text-white">
                        <i class="fas fa-tag"></i>Coupon</a>
                </li>

                <li class="@yield('size_select')">
                    <a href="{{url('admin/size')}}" class="text-white">
                        <i class="fas fa-window-maximize"></i>Size</a>
                </li>

                <li class="@yield('brand_select')">
                    <a href="{{url('admin/brand')}}" class="text-white">
                    <i class="fa fa-product-hunt"></i>Brand</a>
                </li>

                <li class="@yield('color_select')">
                    <a href="{{url('admin/color')}}" class="text-white">
                    <i class="fas fa-paint-brush"></i>Color</a>
                </li>

                <li class="@yield('tax_select')">
                    <a href="{{url('admin/tax')}}" class="text-white">
                    <i class="fas fa-percent"></i>Tax</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block sidebar-bg">
    <div class="logo">
        <a href="{{url('admin/dashboard')}}">
            <img src="{{asset('admin_assets/images/icon/logo.png')}}" style="max-width: 30%; height: 30% !important; border-radius: 50%;" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="@yield('dashboard_select')">
                    <a href="{{url('admin/dashboard')}}" class="text-white">
                        <i class="bi bi-grid"></i>Dashboard</a>
                </li>

                <li class="@yield('customer_select')">
                    <a href="{{url('admin/customer')}}" class="text-white">
                    <i class="bi bi-person-lines-fill"></i>Customer</a>
                </li>
                
                <li class="@yield('category_select')">
                    <a href="{{url('admin/category')}}" class="text-white">
                        <i class="fas fa-list"></i>Category</a>
                </li>
                <li class="@yield('product_select')">
                    <a href="{{url('admin/product')}}" class="text-white">
                    <i class="fa fa-product-hunt"></i>Product</a>
                </li>
                <li class="@yield('product_review_select')">
                    <a href="{{url('admin/product_review')}}" class="text-white">
                    <i class="fas fa-star"></i>Product Review</a>
                </li>
                
                <li class="@yield('order_select')">
                    <a href="{{url('admin/order')}}" class="text-white">
                        <i class="fas fa-shopping-basket"></i>Order</a>
                </li>

                <li class="@yield('coupon_select')">
                    <a href="{{url('admin/coupon')}}" class="text-white">
                        <i class="fas fa-tag"></i>Coupon</a>
                </li>

                <li class="@yield('size_select')">
                    <a href="{{url('admin/size')}}" class="text-white">
                        <i class="fas fa-window-maximize"></i>Size</a>
                </li>

                <li class="@yield('brand_select')" >
                    <a href="{{url('admin/brand')}}" class="text-white">
                    <i class="fa fa-bold"></i>Brand</a>
                </li>

                <li class="@yield('color_select')">
                    <a href="{{url('admin/color')}}" class="text-white">
                    <i class="fas fa-paint-brush"></i>Color</a>
                </li>

                <li class="@yield('tax_select')">
                    <a href="{{url('admin/tax')}}" class="text-white">
                    <i class="fas fa-percent"></i>Tax</a>
                </li>

                <li class="@yield('home_banner_select')">
                    <a href="{{url('admin/home_banner')}}" class="text-white">
                    <i class="fas fa-images"></i>Home Banner</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->