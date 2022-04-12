<?php
$countshopcart=\App\Http\Controllers\ShopcartController::countshopcart();
$gettotal=\App\Http\Controllers\ShopcartController::gettotal();
?>
@extends('layouts.home')
@section('header')
    <header class="header-v4">
        @include('home._header')
    </header>
@endsection
@section('content')
    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                Anasayfa
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Sepetim
			</span>
        </div>
    </div>


    <!-- Shoping Cart -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Ürün</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Birim Fiyatı</th>
                                    <th class="column-4">Adet</th>
                                    <th class="column-5">Toplam</th>
                                </tr>
                                @foreach($datalist as $dl)
                                <tr class="table_row">
                                    <td class="column-1">
                                        <a href="{{route('admin_shopcart_delete',['id'=>$dl->id])}}">
                                        <div class="how-itemcart1">
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($dl->product->image)}}" alt="IMG">
                                        </div>
                                        </a>
                                    </td>
                                    <td class="column-2">{{$dl->product->title}}</td>
                                    <td class="column-3">$ {{$dl->product->price}}</td>
                                    <td class="column-4">{{$dl->quantity}} X</td>
                                    <td class="column-5">$ {{$dl->quantity*$dl->product->price}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                            </div>
                            <a href="{{route('allproduct')}}">
                            <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                Alışverişe Devam Et
                            </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Sepet Tutarı
                        </h4>

                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
								<span class="stext-110 cl2">
									Ara Toplam:
								</span>
                            </div>

                            <div class="size-209">
								<span class="mtext-110 cl2">
									${{$gettotal}}
								</span>
                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Özet:
								</span>
                            </div>
                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                </p>
                            </div>
                            @foreach($datalist as $dl)

                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                        {{$dl->product->title}}
                                </p>
                            </div>

                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                </p>
                            </div>
                            @endforeach

                        </div>


                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
								<span class="mtext-101 cl2">
									Toplam:
								</span>
                            </div>

                            <div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									${{$gettotal}}
								</span>
                            </div>
                        </div>
                        <form role="form" action="{{route('user_order_add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <select class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="payment">
                                    <option>Ödeme Yöntemi Seçiniz...</option>
                                    <option value="Kapıda Ödeme">Kapıda Ödeme</option>
                                    <option value="Kart ile Ödeme">Kart ile Öde</option>
                                    <option value="Banka Havalesi">Banka Havalesi</option>
                                </select>
                            </div>
                            <button class="size-101 flex-c-m stext-101 cl0 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                Alışverişi Tamamla
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
