@props([
    'type' => 'text',
    'nombre',
    'label' => '',
    'value' => '',
])

<div {{ $attributes->merge(['class' => 'form-floating mb-3']) }}>
    <input type="{{$type}}" name="{{$nombre}}" class="form-control" id="{{$nombre}}" value="{{$value}}"/>
    <label for="{{$nombre}}"> {{$label}} </label>
    @error($nombre)
        <div class="text-center text-danger"> {{$message}} </div>
    @enderror
</div>