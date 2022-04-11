@extends('layouts.admin')
@section('header')
    <header class="header-v4">
        @include('admin._header')
    </header>
@endsection
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@section('content')
<section >
    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{route('admin_home')}}" class="stext-109 cl8 hov-cl1 trans-04">
                Anasayfa
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
            <a href="{{route('admin_product')}}" class="stext-109 cl8 hov-cl1 trans-04">
                Ürünler
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
            <span class="stext-109 cl4">
				Ekle
			</span>
        </div>
    </div>

    <div class="container">
        <div class="row flex-w flex-tr">
            <div class="col-xl-12 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form role="form" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Ürün Ekle
                    </h4>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <select class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="category_id" style="width: 100%">
                            <option value="0"selected="selected">Ana Kategori</option>
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}">
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="title" placeholder="Başlık">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="keywords" placeholder="Anahtar Kelimeler">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="description" placeholder="Betimlemeler">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="integer" name="stock" placeholder="Stok Adedi">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="integer" name="total" placeholder="Adet">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="integer" name="price" placeholder="Fiyat">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <textarea id="summernote" name="detail"></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote({
                                    placeholder: 'Detail',
                                    tabsize: 2,
                                    height: 120,
                                });
                            });
                        </script>
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        Status
                        <select class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="status" style="width: 100%">
                            <option selected="selected">False</option>
                            <option>True</option>
                        </select>
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="file" name="image">
                    </div>
                    <button class="size-101 flex-c-m stext-101 cl0 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Kaydet
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
