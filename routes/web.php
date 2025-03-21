<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/productos',[ProductoController::class,'index'])->name('producto.index');

Route::get('/producto/nuevo',[productoController::class,'create'])->name('producto.create');

Route::get('/producto/ver/{producto}',[productoController::class,'show'])->name('producto.show');

Route::post('/producto/store',[productoController::class,'store'])->name('producto.store');

Route::delete('/producto/{producto}',[productoController::class,'destroy'])->name('producto.delete');

Route::get('/producto/editar/{producto}/',[productoController::class,'edit'])->name('producto.edit');

Route::patch('/producto/{producto}',[productoController::class,'update'])->name('producto.update');
