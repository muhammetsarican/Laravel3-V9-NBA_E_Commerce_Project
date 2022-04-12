@foreach($children as $subcategory)
    <li class="active-menu">
        @if(count($subcategory->children))
            <a href="#">{{$subcategory->title}}</a>
            <ul class="sub-menu">
                <li>
                    <a href="#" class="flex-c-m trans-04 p-lr-25">@include('home.categorytree',['children'=>$subcategory->children])</a>
                </li>
            </ul>
            <hr>
        @else
            <a href="{{route('productdetail',['id'=>$subcategory->id])}}" class="flex-c-m trans-04 p-lr-25">{{$subcategory->title}}</a>
        @endif
    </li>
@endforeach
