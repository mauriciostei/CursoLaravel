@extends('layouts.admin')

@section('contenido')

<h2 class="mb-3"> Edición de Usuario </h2>

<div class="card">
    <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}" class="card-body">
        @csrf
        
        <x-input nombre="name" label="Nombre de usuario" value="{{ old('name', $user->name) }}" />
            
        <x-input type="email" nombre="email" label="Correo de usuario" value="{{ old('email', $user->email) }}"/>
            
        <x-input type="password" nombre="password" label="Contraseña de usuario"/>
        
        <input type="submit" value="Actualizar" class="btn btn-myColor shadow"/>
                
    </form>
</div>

@endsection