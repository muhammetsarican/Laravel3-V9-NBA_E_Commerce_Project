<div>
    <input wire:model="search" name="search" type="text" class="mtext-107 cl2 size-114 plh2 p-r-15" list="mylist" placeholder="Ürünlerde Ara..."/>

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
    {{-- The best athlete wants his opponent at his best. --}}
</div>
