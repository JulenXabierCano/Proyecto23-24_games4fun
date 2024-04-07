<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crearJuego', [SalasController::class, 'crearSala']);