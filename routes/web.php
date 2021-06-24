<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\SedeController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/consulta', function () {
    return view('paises/show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'getUser']);

Route::resource('paises', 'App\Http\Controllers\CbPaisesController');
Route::resource('paisesu', 'App\Http\Controllers\CbPaises2Controller');
Route::resource('representantes', 'App\Http\Controllers\CbRepresentantesController');
Route::resource('representantesu', 'App\Http\Controllers\CbRepresentantes2Controller');
Route::resource('relaciones', 'App\Http\Controllers\CbRelacionesController');
Route::resource('relacionesu', 'App\Http\Controllers\CbRelaciones2Controller');
Route::resource('exportaciones', 'App\Http\Controllers\CbExportacionesController');
Route::resource('exportacionesu', 'App\Http\Controllers\CbExportaciones2Controller');
Route::resource('productos', 'App\Http\Controllers\CbProductosController');
Route::resource('productos2', 'App\Http\Controllers\CbProductos2Controller');
Route::resource('productos3', 'App\Http\Controllers\CbProductos3Controller');
Route::resource('productos4', 'App\Http\Controllers\CbProductos4Controller');
Route::resource('productos5', 'App\Http\Controllers\CbProductos5Controller');
Route::resource('productos6', 'App\Http\Controllers\CbProductos6Controller');
