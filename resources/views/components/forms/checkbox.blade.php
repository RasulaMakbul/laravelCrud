@props(['name','radioUnit','setItemr'])


@foreach($radioUnit as $key=>$item)

<div class="form-group m-3">
    <input type="checkbox" name="{{ $name }}" {{ $attributes->merge(['class'=>'form-checkbox'])}} id="{{ $key }}Input" value="{{$item}}" @if (in_array($item, $setItemr)) checked @endif>

    <label class="form-check-label" for="{{ $key }}Input">{{ $item }}</label>


</div>
@endforeach