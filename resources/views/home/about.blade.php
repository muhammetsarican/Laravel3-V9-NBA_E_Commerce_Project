@extends('layouts.home')
@section('title','Hakkımızda')

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
				Hakkımızda
			</span>
        </div>
    </div>
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('assets')}}/images/bg-02.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Hakkımızda
        </h2>
    </section>

    <section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Hikayemiz
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        NBA Store, Doğuş Grubu ile Güney Kore’nin en büyük teknoloji gruplarından SK Group’un ortaklığında Doğuş Planet çatısı altında Mart 2013’te kurulmuştur. Tüm kategorilerde 20 milyondan fazla ürün ve 270 binden fazla kayıtlı iş ortağını 23 milyondan fazla kayıtlı kullanıcıyla buluşturan ve alışveriş yaptıkça kazandıran yapısı ile üyelerine yeni bir alışveriş deneyimi sunan NBA Store Türkiye’nin öncü açık pazar konseptli alışveriş platformlarından biridir. NBA Store, sürdürülebilir ve teknolojik yatırımlarıyla müşteriler tarafında güven ve kolaylık, mağazalar tarafında ise iş birliği ve e-ticareti geliştirme odaklı bir yaklaşım izlemektedir. Türkiye’de e-ticaret sektörünün lideri olmak vizyonu ile hareket eden NBA Store hem müşterilerine hem de iş ortaklarına yenilikçi hizmet sunmayı hedeflemektedir.
                    <p class="stext-113 cl6 p-b-26">
                        Müşterilerine ve e-ticaret faaliyetlerinde kendilerini tercih eden işletmelere ‘kusursuz’ bir platform sunmak için yatırımlarını hayata geçiren NBA Store, KOBİ’lerin e-ticarete katılımının teşvik edilmesi kapsamında Mağaza Destek Merkezleri, NBA Storemağazam, NBA Storecloud, NBA Storefaturam, NBA Storedepom ve e-ihracat (Cross Border Trade) gibi projelerle çalışmalarını sürdürüyor                    </p>

                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="{{asset('assets')}}/images/about-01.jpg" alt="IMG">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Misyonumuz
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        Kullanıcılarımıza ve iş ortaklarımıza yenilikçi hizmetler sunarak dijital dönüşüm öncüsü olmak ve Türkiye’de e-ticaret sektörünün yeniden şekillenmesine liderlik etmek.                    </p>

                    <div class="bor16 p-l-29 p-b-9 m-t-22">
                        <p class="stext-114 cl6 p-r-40 p-b-11">
                            Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
                        </p>

                        <span class="stext-111 cl8">
								- Steve Job’s
							</span>
                    </div>
                </div>
            </div>

            <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="{{asset('assets')}}/images/about-03.jpg" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
