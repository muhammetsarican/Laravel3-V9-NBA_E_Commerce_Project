<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')Sipariş Düzenle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Kuşbabalı Mahoni">
{{--Tab Icon--}}
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets')}}/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/main.css">
    <!--===============================================================================================-->
{{--Summernote--}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
<section>
        <!-- breadcrumb -->
        <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                <a href="{{route('admin_order_edit',['id'=>$data->id])}}" class="stext-109 cl8 hov-cl1 trans-04">
                    Siparişler
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>
                <span class="stext-109 cl4">
				Düzenle &nbsp; > &nbsp; {{$data->id}}
			</span>
            </div>
        </div>

        <div class="container">
            <div class="row flex-w flex-tr">
                <div class="col-xl-12 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    @include('home.message')
                    <form role="form" action="{{route('admin_order_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Sipariş Düzenle
                        </h4>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" value="Ürün Id: {{$data->id}}">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" value="Alıcı: {{$data->user->name}}">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" value="{{$data->product->title}}">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" value="Satıcı: {{$data->product->user->name}}">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" value="Sipariş Tarihi: {{$data->order_date}}">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" value="Adet: {{$data->total}}">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" value="Fiyatı: {{$data->price}} $">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" value="Ödeme Yöntemi: {{$data->payment}}">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <textarea id="summernote" name="note">{{$data->note}}</textarea>
                            <script>
                                $(document).ready(function() {
                                    $('#summernote').summernote({
                                        placeholder: 'Not Ekleyin',
                                        tabsize: 2,
                                        height: 120,
                                    });
                                });
                            </script>
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            Status
                            <select class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="status" style="width: 100%">
                                <option @if ($data->status=='Onaylandı') selected="selected" @endif>Onaylandı</option>
                                <option @if ($data->status=='Reddedildi') selected="selected" @endif>Reddedildi</option>
                            </select>
                        </div>
                        <button class="size-101 flex-c-m stext-101 cl0 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Kaydet
                        </button>
                    </form>
                    <table class="table-shopping-cart table-bordered">
                        <tr class="table_head">
                            <th class="column-1">Id</th>
                            <th class="column-1">Alıcı</th>
                            <th class="column-1">Ürün</th>
                            <th class="column-1">Admin Notu</th>
                            <th class="column-1">Durum</th>
                            <th class="column-1">Düzenle</th>
                        </tr>
                        @foreach($datalist as $dl)
                            <tr style="height: 55px">
                                <td class="column-1">{{$dl->id}}</td>
                                <td class="column-1">{{$dl->user->name}}</td>
                                <td class="column-1">{{$dl->product->title}}</td>
                                <td class="column-1">{{$dl->note}}</td>
                                <td class="column-1">{{$dl->status}}</td>
                                <td class="column-1"><a href="{{route('admin_order_edit',['id'=>$dl->id])}}"><img src="{{asset('assets')}}/images/icons/edit.png"> </a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </section>
</body>
