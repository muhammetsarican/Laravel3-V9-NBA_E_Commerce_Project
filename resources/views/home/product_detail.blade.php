@extends('layouts.home')
@section('title',$data->title)

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
				Ürün &nbsp;>&nbsp;{{$data->title}}
			</span>
        </div>
    </div>
    <!-- modal1 -->
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">

                <div class="row">
                    <div class="col-md-6 col-lg-7 p-b-30">
                        @include('home.message')
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3"
                                         data-thumb="{{\Illuminate\Support\Facades\Storage::url($data->image)}}">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"
                                                 alt="IMG-PRODUCT">

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                               href="images/product-detail-01.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @foreach($image as $im)
                                        <div class="item-slick3"
                                             data-thumb="{{\Illuminate\Support\Facades\Storage::url($im->image)}}">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="{{\Illuminate\Support\Facades\Storage::url($im->image)}}"
                                                     alt="IMG-PRODUCT">

                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                   href="images/product-detail-02.jpg">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <form role="form" action="{{route('admin_shopcart_add',['id'=>$data->id])}}"
                                          method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="flex-w flex-m m-r-20 m-tb-5">
                                            <select class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" name="quantity">
                                                @for($i=1;$i<=$data->stock;$i++)
                                                    <option>{{$i}}</option>
                                                @endfor
                                            </select>
                                            <button class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5" type="submit">
                                                Sepete Ekle
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                {{$data->title}}
                            </h4>

                            <span class="mtext-106 cl2">
								${{$data->price}}
							</span>

                            <p class="stext-102 cl3 p-t-23">
                                {!! $data->detail !!}
                            </p>

                        </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div class="flex-m bor9 p-r-10 m-r-11">
                                <a href="#"
                                   class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100"
                                   data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i>
                                </a>
                            </div>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                               data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                               data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                               data-tooltip="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
