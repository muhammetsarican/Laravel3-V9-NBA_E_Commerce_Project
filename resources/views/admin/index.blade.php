@extends('layouts.admin')
@section('title','Admin Anasayfa')

@section('description')
@endsection

@section('keywords')
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
