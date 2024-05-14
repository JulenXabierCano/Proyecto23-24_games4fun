<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalasController;
use App\models\SalaDamas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/crearSala', [SalasController::class, 'crearSala']);

Route::get('/datosSala', [SalasController::class, 'datosSala']);

Route::get('/salasPublicas', [SalasController::class, 'salasPublicas']);

Route::get('/entrar', [SalasController::class, 'entrar']);

Route::get('/unirse', function () {
    return view('unirse');
});

Route::get('/sala', function () {
    return view('sala');
});