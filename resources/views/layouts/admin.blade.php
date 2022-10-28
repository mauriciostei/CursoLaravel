@extends('layouts.base')

@section('content')

<div class="navbar bg-light border-bottom">
    <div class="container-fluid">
        <div class="d-flex flex-row">
            <img src="{{ asset('img/logo.png') }}" width="70" class="d-none d-lg-flex"/>
            <button class="d-flex d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menuLateral" aria-controls="menuLateral">
                Menu
            </button>
        </div>
        <div>
            Usuario
            <a href="{{ route('logout') }}">Cerrar Sistema</a>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="menuLateral">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu de Aplicación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex flex-column">
            <x-menu/>
        </div>
    </div>
</div>


<div class="d-flex flex-row justify-content-between">
    <div class="d-none d-lg-flex flex-lg-column w-10 pt-2">
        <x-menu/>
    </div>
    <div class="w-100 w-lg-90 ms-3 me-3 mt-3">
        @yield('contenido')
    </div>
</div>


@endsection