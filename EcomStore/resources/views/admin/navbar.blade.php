
    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">


{{--            searchbar--}}
            <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                        <input type="text" class="form-control" placeholder="Search products">
                    </form>
                </li>
            </ul>
{{--            right side navbar--}}
            <ul class="navbar-nav navbar-nav-right">
                <li>
                    <div style="padding-bottom: 35%; >
                    <x-app-layout>
                    </x-app-layout>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
