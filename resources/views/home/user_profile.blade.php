@extends('layouts.home')
@section('title','Profilim')

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
				Profilim
			</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-12 m-lr-auto m-b-50">
                @include('profile.showx')
            </div>
        </div>
    </div>




    {{--    <div class="overlay" style="background-image: url('{{asset('assets')}}/images/slider_10.jpg');height: 300px">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-center text-center">--}}
    {{--                <div class="col-lg-6 align-self-center">--}}
    {{--                    <h1  class="heading mb-3 text-white" style="margin-top: 150px">User Profile</h1>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="site-section">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12 ml-auto">--}}
    {{--                    <div class="card shadow mb-4">--}}
    {{--                        <div class="card-body">--}}
    {{--                            <div class="table-responsive">--}}
    {{--                                @include('profile.show')--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
