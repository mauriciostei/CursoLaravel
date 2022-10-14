@extends('layouts.base')

@section('title', 'Login Page')

@section('content')

<form method="POST" action="{{ route('tryLogin') }}" class="card w-50 mx-auto mt-5">
    @csrf

    <div class="card-body">

        <x-input type="email" nombre="email" label="Correo Electrónico"/>

        <x-input type="password" nombre="password" label="Contraseña de Usuario"/>

        <input type="submit" value="Ingresar" class="btn btn-primary"/>
        
    </div>
</form>

@endsection