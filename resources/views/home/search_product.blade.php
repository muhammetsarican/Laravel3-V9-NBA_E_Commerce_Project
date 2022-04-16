
@extends('layouts.home')
@section('title','Arama Sonuçları "'.$search.'"')

@section('description')
@endsection

@section('keywords')
    @section('header')
        <header class="header-v4">
            @include('home._header')
        </header>
    @endsection

    @section('content')
        <!-- breadcrumb -->
        <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                <a href="{{route('home_index')}}" class="stext-109 cl8 hov-cl1 trans-04">
                    Anasayfa
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

                <span class="stext-109 cl4">
				Arama Sonuçları: "{{$search}}"
			</span>
            </div>
        </div>
        <br>

        <h4 class="mtext-105 cl2 txt-center p-b-30">
            Arama Sonuçları:<br>"{{$search}}"
        </h4>
        <div class="bg0 m-t-23 p-b-140">
            <div class="container">
                <div class="flex-w flex-sb-m p-b-52">
                    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                            Tüm Ürünler
                        </button>

                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
                            Kadın Giyim
                        </button>

                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".2">
                            Erkek Giyim
                        </button>

                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".3">
                            Çocuk Giyim
                        </button>

                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".4">
                            Aksesuar
                        </button>
                    </div>

                    <div class="flex-w flex-c-m m-tb-10">
                        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                            <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                            <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                            Ara
                        </div>
                    </div>

                    <!-- Search product -->
                    <div class="dis-none panel-search w-full p-t-10 p-b-15">
                        <form action="{{route('getproduct')}}" method="post" class="nav-link">
                            @csrf
                            <div class="bor8 dis-flex p-l-15">
                                <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                                @livewire('search')
                            </div>
                        </form>
                        @livewireScripts
                    </div>

                </div>

                <div class="row isotope-grid">
                    @foreach($datalist as $rs)

                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{\App\Http\Controllers\HomeController::getparent($rs->category_id)}}">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="IMG-PRODUCT" style="object-fit: cover">

                                    <a href="{{route('productdetail',['id'=>$rs->id])}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        İncele
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{$rs->title}}
                                        </a>

                                        <span class="stext-105 cl3">
									${{$rs->price}}
								</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>



    @endsection
