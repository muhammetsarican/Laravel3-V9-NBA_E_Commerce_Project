<!-- Header -->
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar" style="height: 15px">
            <div class="content-topbar flex-sb-m h-full container">

            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="{{route('admin_home')}}" class="logo">
                    <img src="{{asset('assets')}}/images/icons/logo-04.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
                            <a href="{{route('admin_category')}}">Kategoriler</a>
                        </li>

                        <li>
                            <a href="{{route('admin_product')}}">Ürünler</a>
                        </li>

                        <li>
                            <a href="{{route('admin_user')}}">Kullanıcılar</a>
                        </li>

                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="#" style="color: #000000">Siparişler</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{route('admin_order',['status'=>'new'])}}" class="flex-c-m trans-04 p-lr-25">
                                            Yeni
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin_order',['status'=>'Onaylandı'])}}" class="flex-c-m trans-04 p-lr-25">
                                            Onaylandı
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin_order',['status'=>'Reddedildi'])}}" class="flex-c-m trans-04 p-lr-25">
                                            Reddedildi
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="#" style="color: #000000">Mesajlar</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{route('admin_message',['status'=>'Yeni'])}}" class="flex-c-m trans-04 p-lr-25">
                                            Yeni
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin_message',['status'=>'Okundu'])}}" class="flex-c-m trans-04 p-lr-25">
                                            Okundu
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    @auth
                        <ul class="main-menu">
                        <li class="active-menu">
                            <a href="#">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route('user_profile')}}" class="flex-c-m trans-04 p-lr-25">
                                        My Profile
                                    </a>
                                </li>
                                <li><a href="{{route('all_logout')}}">Logout</a></li>
                            </ul>
                        </li>
                        </ul>
                    @endauth
                    @guest
                            <ul class="main-menu">
                                <li class="active-menu">
                                    <a href="#">My Account</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{route('user_login')}}" class="flex-c-m trans-04 p-lr-25">
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('user_register')}}" class="flex-c-m trans-04 p-lr-25">
                                                Register
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/register" class="flex-c-m trans-04 p-lr-25">
                                                Forgot My Password
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                    @endguest
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{route('admin_home')}}"><img src="{{asset('assets')}}/images/icons/logo-04.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
{{--            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">--}}
{{--                <i class="zmdi zmdi-search"></i>--}}
{{--            </div>--}}

{{--
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
--}}

{{--            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">--}}
{{--                <i class="zmdi zmdi-favorite-outline"></i>--}}
{{--            </a>--}}
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">

        <ul class="main-menu-m">

            <li>
                <a href="{{route('admin_category')}}">Kategoriler</a>
            </li>

            <li>
                <a href="{{route('admin_product')}}">Ürünler</a>
            </li>

            <li>
                <a href="{{route('admin_user')}}">Kullanıcılar</a>
            </li>

            <ul class="main-menu">
                <li class="active-menu">
                    <a href="#" style="color: #ffffff">Siparişler</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('admin_order',['status'=>'new'])}}" class="flex-c-m trans-04 p-lr-25">
                                Yeni
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin_order',['status'=>'Onaylandı'])}}" class="flex-c-m trans-04 p-lr-25">
                                Onaylandı
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin_order',['status'=>'Reddedildi'])}}" class="flex-c-m trans-04 p-lr-25">
                                Reddedildi
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="main-menu">
                <li class="active-menu">
                    <a href="#" style="color: #ffffff">Mesajlar</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('admin_message',['status'=>'Yeni'])}}" class="flex-c-m trans-04 p-lr-25">
                                Yeni
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin_message',['status'=>'Okundu'])}}" class="flex-c-m trans-04 p-lr-25">
                                Okundu
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </ul>
    </div>

    <!-- Modal Search -->
{{--    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{asset('assets')}}/images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>--}}
</header>


