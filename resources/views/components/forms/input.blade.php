@props(['name','title','type','id'])

<div class="form-group m-3">
    <label for="{{ $id }}">{{ $title }}</label>
    <input type="{{ $type }}" name="{{ $name }}" {{ $attributes->merge(['class'=>'form-control'])}} id="{{ $id }}" {{ $attributes }}>


</div>