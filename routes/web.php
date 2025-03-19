<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/productos',[ProductoController::class,'index'])->name('producto.index');
Route::get('/producto/nuevo',[productoController::class,'create'])->name('producto.create');
Route::post('/producto/store',[productoController::class,'store'])->name('producto.store');