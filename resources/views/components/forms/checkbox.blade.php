@props(['name','radioUnit'])


@foreach($radioUnit as $key=>$item)

<div class="form-group m-3">
    <input type="radio" name="{{ $name }}" {{ $attributes->merge(['class'=>'form-checkbox'])}} id="{{ $key }}Input" value="{{$item}}" {{ $attributes }}>

    <label class="form-check-label" for="{{ $key }}Input">{{ $item }}</label>


</div>
@endforeach