@extends('layouts.admin')
@section('header')
    <header class="header-v4">
        @include('admin._header')
    </header>
@endsection
@section('content')
    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="" class="stext-109 cl8 hov-cl1 trans-04">
                Anasayfa
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Ürünler
			</span>
        </div>
    </div>


    <!-- Shoping Cart -->
    <section>
        <h4 class="mtext-105 cl2 txt-center p-b-30">
            Ürünler
        </h4>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-12 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <a href="{{route('admin_product_add')}}" class=" bg8 bor13 size-150 hov-btn3">Ürün Ekle</a>
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart table-bordered">
                                <tr class="table_head">
                                    <th class="column-1">Id</th>
                                    <th class="column-1">Kategori</th>
                                    <th class="column-1">Başlık</th>
                                    <th class="column-1">Adet</th>
                                    <th class="column-1">Stok Adedi</th>
                                    <th class="column-1">Fiyat</th>
                                    <th class="column-1">Durum</th>
                                    <th class="column-1">Resim</th>
                                    <th class="column-1">Resim Galerisi</th>
                                    <th class="column-1">Düzenle</th>
                                    <th class="column-1">Sil</th>
                                </tr>
                                @foreach($datalist as $dl)
                                    <tr style="height: 55px">
                                        <td class="column-1">{{$dl->id}}</td>
                                        <td class="column-1">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($dl->category,$dl->category->title)}}</td>
                                        <td class="column-1">{{$dl->title}}</td>
                                        <td class="column-1">{{$dl->total}}</td>
                                        <td class="column-1">{{$dl->stock}}</td>
                                        <td class="column-1">{{$dl->price}}</td>
                                        <td class="column-1">{{$dl->status}}</td>
                                        <td class="column-1">
                                            @if($dl->image)
                                                <img src="{{\Illuminate\Support\Facades\Storage::url($dl->image)}}" height="50" alt="">
                                            @endif
                                        </td>
                                        <td class="column-1"><a href="{{route('admin_image_add',['product_id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')"><img src="{{asset('assets')}}/images/icons/gallery.png" height="25px"></a></td>

                                        <td class="column-1"><a href="{{route('admin_product_edit',['id'=>$dl->id])}}"><img src="{{asset('assets')}}/images/icons/edit.png"> </a></td>
                                        <td class="column-1"><a href="{{route('admin_product_delete',['id'=>$dl->id])}}" onclick="return confirm('Delete! Are you sure ?')"><img src="{{asset('assets')}}/images/icons/delete.png"> </a></td>
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
