<?php
$parentCategories = \App\Http\Controllers\HomeController::categorylist();
$getshopcart=\App\Http\Controllers\ShopcartController::getshopcart();
$countshopcart=\App\Http\Controllers\ShopcartController::countshopcart();
$gettotal=\App\Http\Controllers\ShopcartController::gettotal();
//$setting = \App\Http\Controllers\HomeController::getsetting();
?>
<!-- Header -->
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        Help & FAQs
                    </a>
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        EN
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        USD
                    </a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="#" class="logo">
                    <img src="{{asset('assets')}}/images/icons/logo-01.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
                            <a href="{{route('home_index')}}">Anasayfa</a>

                        </li>








                        <li>
                            <ul class="main-menu">
                                <li class="active-menu">
                                    <a href="#">Kategoriler</a>
                                    <ul class="sub-menu">
                                        @foreach($parentCategories as $rs)
                                        <li>
                                            <a href="#" class="flex-c-m trans-04 p-lr-25">
                                                {{$rs->title}}
                                            </a>
                                                <ul class="sub-menu">
                                                    @if(count($rs->children))
                                                        @include('home.categorytree',['children'=>$rs->children])
                                                    @endif
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>
{{--                        <li class="has-children">--}}
{{--                            <a href="#" class="nav-link">Categories</a>--}}
{{--                            <ul class="dropdown">--}}
{{--                                @foreach($parentCategories as $rs)--}}
{{--                                    <li class="has-children">--}}
{{--                                        <a href="#">{{$rs->title}}</a>--}}
{{--                                        <ul class="dropdown">--}}
{{--                                            @if(count($rs->children))--}}
{{--                                                @include('home.categorytree',['children'=>$rs->children])--}}
{{--                                            @endif--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                                <li class="has-children1">--}}
{{--                                    <a href="{{route('categoryalltreatments')}}">All</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}






                        <li>
                            <a href="{{route('allproduct')}}">Alışveriş</a>
                        </li>

                        <li>
                            <a href="{{route('blog')}}">Blog</a>
                        </li>

                        <li>
                            <a href="{{route('about')}}">Hakkında</a>
                        </li>

                        <li>
                            <a href="{{route('contact')}}">Bize Ulaşın</a>
                        </li>
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
                                        Profilim
                                    </a>
                                </li>
                                <li><a href="{{route('user_order')}}">Siparişlerim</a></li>
                                <li><a href="{{route('all_logout')}}">Çıkış Yap</a></li>
                            </ul>
                        </li>
                        </ul>
                    @endauth
                    @guest
                            <ul class="main-menu">
                                <li class="active-menu">
                                    <a href="#">Hesabım</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{route('user_login')}}" class="flex-c-m trans-04 p-lr-25">
                                                Oturum Aç
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('user_register')}}" class="flex-c-m trans-04 p-lr-25">
                                                Kayıt Ol
                                            </a>
                                        </li>{{--
                                        <li>
                                            <a href="/register" class="flex-c-m trans-04 p-lr-25">
                                                Şifremi Unuttum
                                            </a>
                                        </li>--}}
                                    </ul>
                                </li>
                            </ul>
                    @endguest
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{$countshopcart}}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="{{asset('assets')}}/images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
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
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        My Account
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        USD
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="{{route('home_index')}}">HOME</a>
                <ul class="sub-menu-m">
                    <li><a href="index.html">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                </ul>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="{{route('allproducts')}}">Shop</a>
            </li>

            <li>
                <a href="{{route('shopping_cart')}}" class="label1 rs1" data-label1="hot">Features</a>
            </li>

            <li>
                <a href="{{route('blog')}}">Blog</a>
            </li>

            <li>
                <a href="about.html">About</a>
            </li>

            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
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
    </div>
</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Sepetiniz
				</span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
            <ul class="header-cart-wrapitem w-full">
                @foreach($getshopcart as $gt)
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <a href="{{route('admin_shopcart_delete',['id'=>$gt->id])}}">
                    <div class="header-cart-item-img">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($gt->product->image)}}" alt="IMG">
                    </div>
                    </a>
                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            {{$gt->product->title}}
                        </a>

                        <span class="header-cart-item-info">
								{{$gt->quantity}} x ${{$gt->product->price}}
							</span>
                    </div>
                </li>
                @endforeach
            </ul>

            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
                    Total: $ {{$gettotal}}
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="{{route('admin_shopcart')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        Sepeti Görüntüle
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


