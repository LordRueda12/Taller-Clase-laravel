<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaBlogController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ProductoController;
use App\Models\Comentario;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

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

Route::get('/categorias',[CategoriaController::class,'index'])->name('categoria.index');

Route::post('/categoria/store',[CategoriaController::class,'store'])->name('categoria.store');

Route::get('/categoria/edit/{categoria}',[CategoriaController::class,'edit'])->name('categoria.edit');

Route::delete('/categoria/{categoria}',[CategoriaController::class,'destroy'])->name('categoria.delete');

Route::patch('/categoria/{categoria}',[categoriaController::class,'update'])->name('categoria.update');

Route::get('/articulos',[ArticuloController::class,'index'])->name('articulo.index');

Route::get('/articulo/nuevo',[ArticuloController::class,'create'])->name('articulo.create');

Route::get('/articulo/ver/{articulo}',[ArticuloController::class,'show'])->name('articulo.show');

Route::post('/articulo/store',[ArticuloController::class,'store'])->name('articulo.store');

Route::delete('/articulo/{articulo}',[ArticuloController::class,'destroy'])->name('articulo.delete');

Route::get('/articulo/editar/{articulo}/',[ArticuloController::class,'edit'])->name('articulo.edit');

Route::patch('/articulo/{articulo}',[ArticuloController::class,'update'])->name('articulo.update');

Route::get('/categoriasBlog',[CategoriaBlogController::class,'index'])->name('categoriaBlog.index');

Route::post('/categoriaBlog/store',[CategoriaBlogController::class,'store'])->name('categoriaBlog.store');

Route::get('/categoriaBlog/edit/{categoriaBlog}',[CategoriaBlogController::class,'edit'])->name('categoriaBlog.edit');

Route::delete('/categoriaBlog/{categoriaBlog}',[CategoriaBlogController::class,'destroy'])->name('categoriaBlog.delete');

Route::patch('/categoriaBlog/{categoriaBlog}',[CategoriaBlogController::class,'update'])->name('categoriaBlog.update');

Route::post('/comentario/store',[ComentarioController::class,'store'])->name('comentario.store');

Route::get('/comentario/editar/{comentario}/',[ComentarioController::class,'edit'])->name('comentario.edit');

Route::delete('/comentario/{comentario}',[ComentarioController::class,'destroy'])->name('comentario.delete');

Route::patch('/comentario/{comentario}',[ComentarioController::class,'update'])->name('comentario.update');

