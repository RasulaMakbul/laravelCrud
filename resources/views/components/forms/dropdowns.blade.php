@props(['name','dropItems', 'setItem'])

<select class="btn dropdown-toggle col-8 m-3 btn-outline-secondary" name="{{$name}}">

    <div class="dropdown-menu dropdown-menu-right">
        @foreach($dropItems as $key=>$item)
        <option class="dropdown-item" type="button" @if (in_array($item, $setItem)) selected @endif>{{ $item }}</option>
        @endforeach
    </div>
</select>