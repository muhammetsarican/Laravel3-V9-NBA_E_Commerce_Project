@extends('layouts.home')
@section('title','Bize Ulaşın')

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
				Bize Ulaşın
			</span>
        </div>
    </div>
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('assets')}}/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Bize Ulaşın
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">

                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Adres
							</span>

                            <p class="stext-115 cl6 size-213 p-t-18">
                                {{$uinf->address}}
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Haydi Konuşalım
							</span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{$uinf->phone}}
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
                                Destek
							</span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{$uinf->email}}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    @include('home.message')
                    <form action="{{route('home_sendmessage')}}" method="post">
                        @csrf
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Bize Mesajınızı Gönderin
                        </h4>
                        <div class="row form-group">
                            <div class="col-md-6 bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" placeholder="Ad Soyad">
                            </div>
                            <div class="col-md-6 bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="phone" placeholder="Telefon">
                            </div>
                        </div>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="E-Posta Adresiniz">
                        </div>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="subject" placeholder="Konu Nedir?">
                        </div>

                        <div class="bor8 m-b-30">
                            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="message" placeholder="Size Nasıl Yardımcı Olabiliriz?"></textarea>
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Gönder
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>


    <!-- Map -->
    <div class="map">
        <div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
    </div>
@endsection
