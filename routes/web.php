<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\LineaController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\PublicoController;



Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Login');
});
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::get('/create-login', [LoginController::class, 'create'])->name('create_login');
Route::POST('/guardar', [LoginController::class, 'guardar'])->name('guardar');

Route::resource('productos', ProductoController::class);
Route::get('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::resource('clientes', ClienteController::class);
Route::GET('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
Route::resource('categorias', CategoriaController::class);

Route::resource('ventas', VentaController::class);
Route::resource('lineas', LineaController::class);

Route::resource('publico', PublicoController::class);
Route::get('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
Route::get('/ventas/{id}', [VentaController::class, 'destroy'])->name('ventas.destroy');
Route::get('/lineas/{id}', [LineaController::class, 'destroy'])->name('ventas.destroy');

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Login');
});
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::get('/create-login', [LoginController::class, 'create'])->name('create_login');
Route::POST('/guardar', [LoginController::class, 'guardar'])->name('guardar');