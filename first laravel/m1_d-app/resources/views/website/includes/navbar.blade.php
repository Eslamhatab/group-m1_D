{{-- <div class="site-wrap"> --}}
<header class="site-navbar w-100 @if(Route::is('login')|| Route::is('register')) d-none @endif" role="banner">
    <div class="site-navbar-top">
        <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
            <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
            </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
            <div class="site-logo">
                <a href="{{ route('home') }}" class="js-logo-clone">Shoppers</a>
            </div>
            </div>

    <div class="col-6 col-md-4 order-3 order-md-3 text-right">
    <div class="site-top-icons">
        <ul class="btn-group">
            <li>
        @auth
        {{-- <a href="">dfksakdvfe</a> --}}

            <a class="text-decoration-none" href="javascript:void(0)">{{ auth()->user()->name ?? '' }}</a>
            @endauth
        @guest
            <a  class="text-decoration-none">{{ 'guest_' .uniqid() }}</a>
        @endguest
        </li>
        @auth
            @if (auth()->user()->user_type == 'customer')
                <li><a  class="text-decoration-none text-danger" href="#"><span class="icon icon-heart-o"></span></a></li>
                <li>
                    <a href="#" class="site-cart">
                        <span class="icon icon-shopping_cart"></span>
                        <span class="count">2</span>
                    </a>
                </li>@endif @endauth
                <a class="dropdown-toggle p-1"  data-toggle="dropdown" aria-expanded="false"  area-haspopup="true" type="button">
                    <span class="icon icon-person"></span>
                </a>
                <div class="dropdown-menu dropdoown-menu-reight">
                    @if (auth()->user())
                    <button class="dropdown-item" type="button">
                        <i class="fa-solid fa-user"></i> Profile Management
                    </button>
                    @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'modorater')
                    <button class="dropdown-item" type="button" onclick="window.location.href= '{{ route('dashboard') }}'">
                        <i class="fa-solid fa-gauge"></i>Dashboard
                    </button>
                    @endif
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#logout-form').submit();" >
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                        <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: ;">
                            @csrf
                        </form>
                    </a>
                    @else
                    <button class="dropdown-item" type="button" onclick="window.location.href = '{{ route('login') }}';"><i class="fa-solid fa-right-to-bracket"></i>LogIn</button>
                    <button class="dropdown-item" type="button" onclick="window.location.href = '{{ route('register') }}';"><i class="fa-solid fa-registered"></i>Register</button>
                    @endif
                </div>
    </ul>
            </div>
            </div>

        </div>
        </div>
    </div>
    <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
        <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children">
            <a href="{{ route('home') }}">{{ __('website/navbar.home') }}</a>
            <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                <a href="#">Sub Menu</a>
                <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                </ul>
                </li>
            </ul>
            </li>
            <li class="has-children active">
            <a href="{{ route('about') }}">{{ __('website/navbar.about') }}</a>
            <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
            </ul>
            </li>
            <li><a href="{{ route('shop') }}">{{ __('website/navbar.shop') }}</a></li>
            <li><a href="#">{{ __('website/navbar.catalogue') }}</a></li>
            <li><a href="#">{{ __('website/navbar.new_arrivales') }}</a></li>
            <li><a href="{{ route('contact') }}">{{ __('website/navbar.contact') }}</a></li>
        </ul>
        </div>
    </nav>
    </header>
{{-- </div> --}}
