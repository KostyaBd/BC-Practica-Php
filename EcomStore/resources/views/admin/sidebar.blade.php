<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <h4>Admin panel</h4>
    </div>
    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/redirect')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Main page</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('/view_products')}}">Add Products</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/show_products')}}">Show Products</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-auth"></i>
              </span>
                <span class="menu-title">Orders</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('/orders_active')}}">Active Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/orders_history')}}">Orders History</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/view_category')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Manage Categories</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/view_users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
                <span class="menu-title">Manage users</span>
            </a>
        </li>
{{--        <li class="nav-item menu-items">--}}
{{--            <a class="nav-link" href="pages/tables/basic-table.html">--}}
{{--              <span class="menu-icon">--}}
{{--                <i class="mdi mdi-table-large"></i>--}}
{{--              </span>--}}
{{--                <span class="menu-title">Tables</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item menu-items">--}}
{{--            <a class="nav-link" href="pages/charts/chartjs.html">--}}
{{--              <span class="menu-icon">--}}
{{--                <i class="mdi mdi-chart-bar"></i>--}}
{{--              </span>--}}
{{--                <span class="menu-title">Charts</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item menu-items">--}}
{{--            <a class="nav-link" href="pages/icons/mdi.html">--}}
{{--              <span class="menu-icon">--}}
{{--                <i class="mdi mdi-contacts"></i>--}}
{{--              </span>--}}
{{--                <span class="menu-title">Icons</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item menu-items">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">--}}
{{--              <span class="menu-icon">--}}
{{--                <i class="mdi mdi-security"></i>--}}
{{--              </span>--}}
{{--                <span class="menu-title">User Pages</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="auth">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--        <li class="nav-item menu-items">--}}
{{--            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">--}}
{{--              <span class="menu-icon">--}}
{{--                <i class="mdi mdi-file-document-box"></i>--}}
{{--              </span>--}}
{{--                <span class="menu-title">Documentation</span>--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>
</nav>
