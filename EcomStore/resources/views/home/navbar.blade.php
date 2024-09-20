<nav class="fixed-top navbar navbar_size">
    <div class="container-fluid">
        <div class="row w-100 align-items-center d-flex justify-content-between">
            <div class="col-3">
                <div class="header__logo">
                    <a href="{{url('')}}"><img src="home/img/logo.png" alt="Logo"></a>
                </div>
            </div>
            <div class="col-9">
                <nav class="header__menu">
                    <ul class="nav justify-content-end">
                        <li class="nav-item active"><a class="nav-link" href="./index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./shop-grid.html">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="./blog.html">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contact.html">Contact</a></li>

                        @if (Route::has('login'))

                            @auth

                            <x-app-layout>
                            </x-app-layout>
{{--            Logout button variant 1--}}
{{--                                <li class="nav-item"><a class="btn btn-success" href="{{route('logout')}}">Login</a></li>--}}

{{--            Logout button variant 2--}}
{{--                                <form method="POST" action="{{ route('logout') }}" class="inline">--}}
{{--                                    @csrf--}}
{{--                                    <button type="submit" id="logincss" class="btn btn-success">--}}
{{--                                        {{ __('Log Out') }}--}}
{{--                                    </button>--}}
{{--                                </form>--}}

                            @else
                        <li class="nav-item"><a class="btn btn-success" href="{{route('login')}}">Login</a></li>
                        <li class="nav-item"><a class="btn btn-success" href="{{route('register')}}">Sign up</a></li>

                            @endauth
                            @endif

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>



{{--<div class="container-fluid">--}}
{{--    <header class="bg-white fixed-top d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom navbar-size">--}}
{{--        <a href="/" class="d-flex align-items-start col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">--}}
{{--            <div class="header__logo">--}}
{{--                <a href="./index.html"><img src="home/img/logo.png" alt=""></a>--}}
{{--            </div>--}}
{{--        </a>--}}

{{--        <ul class="nav col-12 col-md-auto mb-2 justify-content-end mb-md-0">--}}
{{--            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>--}}
{{--            <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>--}}
{{--            <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>--}}
{{--            <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>--}}
{{--            <li><a href="#" class="nav-link px-2 link-dark">About</a></li>--}}
{{--        </ul>--}}

{{--        <div class="col-md-3 text-end">--}}
{{--            <button type="button" class="btn btn-outline-primary me-2">Login</button>--}}
{{--            <button type="button" class="btn btn-primary">Sign-up</button>--}}
{{--        </div>--}}
{{--    </header>--}}
{{--</div>--}}
