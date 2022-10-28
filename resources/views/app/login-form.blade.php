@extends('layouts.base')

@section('title', 'Login Page')

@section('content')

<form method="POST" action="{{ route('tryLogin') }}" class="card w-90 w-md-75 w-lg-25 mx-auto mt-5">
    @csrf

    <div class="card-body d-flex flex-column align-items-center">

        <img src="{{ asset('img/logo.png') }}" class="mb-3" />

        <x-input type="email" nombre="email" label="Correo Electrónico" class="w-100" value="{{ old('email') }}"/>

        <x-input type="password" nombre="password" label="Contraseña de Usuario" class="w-100"/>

        <input type="submit" value="Ingresar" class="btn btn-myColor shadow"/>
        
    </div>
</form>

@endsection