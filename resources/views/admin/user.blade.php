@extends('layouts.admin')
@section('header')
@section('title','Kullanıcılar')

@section('description')
@endsection

@section('keywords')
@section('header')
    <header class="header-v4">
        @include('admin._header')
    </header>
@endsection
@section('content')
    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{route('admin_home')}}" class="stext-109 cl8 hov-cl1 trans-04">
                Anasayfa
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Kullanıcılar
			</span>
        </div>
    </div>


    <!-- Shoping Cart -->
    <section>
        <h4 class="mtext-105 cl2 txt-center p-b-30">
            Kullanıcılar
        </h4>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-12 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart table-bordered">
                                <tr class="table_head">
                                    <th class="column-1">Id</th>
                                    <th class="column-1">Profil Resmi</th>
                                    <th class="column-1">İsim Soyisim</th>
                                    <th class="column-1">E-Posta</th>
                                    <th class="column-1">Adres</th>
                                    <th class="column-1">Telefon</th>
                                    <th class="column-1">Rol</th>
                                    <th class="column-1">Düzenle</th>
                                    <th class="column-1">Sil</th>
                                </tr>
                                @foreach($datalist as $dl)
                                    <tr style="height: 55px">
                                        <td class="column-1">{{$dl->id}}</td>
                                        <td class="column-1">
                                            @if($dl->profile_photo_path)
                                                <img
                                                    src="{{\Illuminate\Support\Facades\Storage::url($dl->profile_photo_path)}}"
                                                    height="50" style="border-radius: 10px" alt="">
                                            @endif
                                        </td>
                                        <td class="column-1">{{$dl->name}}</td>
                                        <td class="column-1">{{$dl->email}}</td>
                                        <td class="column-1">{{$dl->address}}</td>
                                        <td class="column-1">{{$dl->phone}}</td>
                                        <td class="column-1">
                                            @foreach($dl->roles as $row)
                                                {{$row->name}},&nbsp;
                                            @endforeach

                                            <a href="{{route('user_role',['id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">
                                                <img src="{{asset('assets')}}/images/icons/addrole.png">
                                            </a>
                                        </td>
                                        <td class="column-1"><a href="{{route('admin_user_edit',['id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')"><img src="{{asset('assets')}}/images/icons/edit.png"> </a></td>
                                        <td class="column-1"><a href="{{route('admin_user_delete',['id'=>$dl->id])}}" onclick="return confirm('Delete! Are you sure ?')"><img src="{{asset('assets')}}/images/icons/delete.png"> </a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
