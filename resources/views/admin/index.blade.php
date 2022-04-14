@extends('layouts.admin')
@section('header')
    <header class="header-v4">
        @include('admin._header')
    </header>
@endsection
@section('content')
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Nba Store Admin Sayfasına Hoşgeldiniz.
                        </h3>
                        <p class="stext-113 cl6 p-b-26">
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                        </p>
                        <p class="stext-113 cl6 p-b-26">
                            National Basketball Association (Türkçe: Ulusal Basketbol Birleşimi) veya kısaca NBA, ABD'de kurulmuş profesyonel basketbol ligi organizasyonudur.

                            Tüm dünyada en çok izlenen spor organizasyonlarından biridir. 1995 yılında lige 2 tane Kanada takımı katılmıştır.Bu takımlar Toronto Raptors ve Vancouver Grizzlies'tir. Toronto Raptors hala Kanada takımı olsa da Vancouver Grizzlies kurulduğu bölgede yeterli ilgiyi bulamadığından dolayı Amerika'nın Memphis şehrine taşınmıştır. Bundan dolayı Raptors NBA'deki Amerikan olmayan tek takımdır.

                            NBA'in resmî logosunda eski Los Angeles Lakers'lı oyuncu Jerry West'in silüeti bulunmaktadır.
                        </p>

                        {{--<p class="stext-113 cl6 p-b-26">
                            Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                        </p>--}}
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="{{asset('assets')}}/images/about-02.jpg" alt="IMG" style="object-fit: cover;min-height: 400px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
