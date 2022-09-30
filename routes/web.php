<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\DetallesController;
Use App\Http\Controllers\Controller;
use App\Http\Controllers\PDFController;
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
    return view('principal');
})->name('principal');


Route::get('/Productos/registro',[ProductosController::class,'create'])->name('productos.registro');
Route::get('/Productos/list',[ProductosController::class,'list'])->name('productos.list');
Route::post('/Productos/guardar', [ProductosController:: class,'guardar'])->name('productos.guardar');
Route::get('/Productos/editar/{iden}', [ProductosController::class, 'editar'])->name('productos.editar');
Route::put('Productos/{product}', [ProductosController::class, 'updatee'])->name('productos.updatee');
Route::get('Productos/borrar{iden}', [ProductosController::class, 'borrar'])->name('productos.borrar');


Route::get('/Compras/registro',[ComprasController::class,'create'])->name('compras.registro');
Route::get('/Compras/list',[ComprasController::class,'list'])->name('compras.list');
Route::post('/Compras/guardar', [ComprasController:: class,'guardar'])->name('compras.guardar');
Route::get('/Compras/editar/{iden}', [ComprasController::class, 'editar'])->name('compras.editar');
Route::put('Compras/{compras}', [ComprasController::class, 'updatee'])->name('compras.updatee');
Route::get('Compras/borrar{iden}', [ComprasController::class, 'borrar'])->name('compras.borrar');
Route::get('Compras/agregar', [ComprasController::class, 'agregar'])->name('compras.agregar');


Route::post('/Detalles/guardar', [DetallesController:: class,'guardar'])->name('detalle.guardar');
Route::get('/Compras/factura',[DetallesController::class,'factura'])->name('detalle.factura');
Route::get('Detalles/eliminar{iden}', [DetallesController::class, 'eliminar'])->name('detalle.eliminar');

Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('descargar.pdf');

Route::get('/logout', [Controller::class, 'logout'])->name('logout');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/principal', function () {
        return view('principal');
    })->name('dashboard');
});
