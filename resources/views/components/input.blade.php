@props([
    'type' => 'text',
    'nombre',
    'label' => '',
])

<div class="form-floating mb-3">
    <input type="{{$type}}" name="{{$nombre}}" class="form-control" id="{{$nombre}}"/>
    <label for="{{$nombre}}"> {{$label}} </label>
    @error($nombre)
        <div class="text-center text-danger"> {{$message}} </div>
    @enderror
</div>