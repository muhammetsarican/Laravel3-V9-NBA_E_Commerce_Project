@extends('layouts.home')
{{--@section('title','Profile Settings')--}}

{{--@section('description')--}}
{{--@endsection--}}

{{--@section('keywords','boş')--}}
@section('header')
    <header class="header-v4">
        @include('home._header')
    </header>
@endsection


@section('content')
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
