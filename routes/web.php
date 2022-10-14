<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('tryLogin');

Route::middleware('auth')->group(function(){

    Route::get('/', function () {
        return view('welcome');
    })->name('home');

});

