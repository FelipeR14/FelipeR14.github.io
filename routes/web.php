<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RentaController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\CarroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('sucursals', SucursalController::class)->middleware('auth');
Route::resource('empleados', EmpleadoController::class)->middleware('auth');
Route::resource('clientes', ClienteController::class)->middleware('auth');
Route::resource('carros', CarroController::class)->middleware('auth');
Route::resource('rentas', RentaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');