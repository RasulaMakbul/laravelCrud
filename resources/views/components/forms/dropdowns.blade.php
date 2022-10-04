@props(['name','dropItems'])
<select class="btn dropdown-toggle col-8 m-3 btn-outline-secondary" name="{{$name}}" {{ $attributes }}>



    <div class="dropdown-menu dropdown-menu-right">
        @foreach($dropItems as $key=>$item)
        <option class="dropdown-item" type="button">{{ $item }}</option>

        @endforeach
    </div>
</select>