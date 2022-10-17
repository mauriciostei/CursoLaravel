@extends('layouts.base')

@section('content')

<div class="navbar bg-light border-bottom">
    <div class="container-fluid">
        <div>Marca</div>
        <div>Usuario</div>
    </div>
</div>



<div class="row">
    <div class="col-2">
        <a href="{{ route('home') }}">Home</a> <br/>
        <a href="{{ route('users.index') }}">Usuarios</a> <br/>
    </div>
    <div class="col-10 p-3">
        <div class="card">
            <div class="card-body">
                @yield('contenido')
            </div>
        </div>
    </div>
</div>


@endsection