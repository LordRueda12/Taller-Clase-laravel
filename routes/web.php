<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaBlogController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ProductoController;
use App\Models\Comentario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/productos',[ProductoController::class,'index'])->name('producto.index');

Route::get('/producto/nuevo',[productoController::class,'create'])->name('producto.create') ->middleware('auth');

Route::get('/producto/ver/{producto}',[productoController::class,'show'])->name('producto.show');

Route::post('/producto/store',[productoController::class,'store'])->name('producto.store') ->middleware('auth');

Route::delete('/producto/{producto}',[productoController::class,'destroy'])->name('producto.delete') ->middleware('auth');

Route::get('/producto/editar/{producto}/',[productoController::class,'edit'])->name('producto.edit') ->middleware('auth');

Route::patch('/producto/{producto}',[productoController::class,'update'])->name('producto.update') ->middleware('auth');

Route::get('/categorias',[CategoriaController::class,'index'])->name('categoria.index');

Route::post('/categoria/store',[CategoriaController::class,'store'])->name('categoria.store') ->middleware('auth');;

Route::get('/categoria/edit/{categoria}',[CategoriaController::class,'edit'])->name('categoria.edit') ->middleware('auth');

Route::delete('/categoria/{categoria}',[CategoriaController::class,'destroy'])->name('categoria.delete') ->middleware('auth');

Route::patch('/categoria/{categoria}',[categoriaController::class,'update'])->name('categoria.update') ->middleware('auth');

Route::get('/articulos',[ArticuloController::class,'index'])->name('articulo.index');

Route::get('/articulo/nuevo',[ArticuloController::class,'create'])->name('articulo.create') ->middleware('auth');

Route::get('/articulo/ver/{articulo}',[ArticuloController::class,'show'])->name('articulo.show');

Route::post('/articulo/store',[ArticuloController::class,'store'])->name('articulo.store') ->middleware('auth');

Route::delete('/articulo/{articulo}',[ArticuloController::class,'destroy'])->name('articulo.delete') ->middleware('auth');

Route::get('/articulo/editar/{articulo}/',[ArticuloController::class,'edit'])->name('articulo.edit') ->middleware('auth');

Route::patch('/articulo/{articulo}',[ArticuloController::class,'update'])->name('articulo.update') ->middleware('auth');

Route::get('/categoriasBlog',[CategoriaBlogController::class,'index'])->name('categoriaBlog.index');

Route::post('/categoriaBlog/store',[CategoriaBlogController::class,'store'])->name('categoriaBlog.store') ->middleware('auth');

Route::get('/categoriaBlog/edit/{categoriaBlog}',[CategoriaBlogController::class,'edit'])->name('categoriaBlog.edit') ->middleware('auth');

Route::delete('/categoriaBlog/{categoriaBlog}',[CategoriaBlogController::class,'destroy'])->name('categoriaBlog.delete') ->middleware('auth');

Route::patch('/categoriaBlog/{categoriaBlog}',[CategoriaBlogController::class,'update'])->name('categoriaBlog.update') ->middleware('auth');

Route::post('/comentario/store',[ComentarioController::class,'store'])->name('comentario.store') ->middleware('auth');

Route::get('/comentario/editar/{comentario}/',[ComentarioController::class,'edit'])->name('comentario.edit') ->middleware('auth');

Route::delete('/comentario/{comentario}',[ComentarioController::class,'destroy'])->name('comentario.delete') ->middleware('auth');

Route::patch('/comentario/{comentario}',[ComentarioController::class,'update'])->name('comentario.update') ->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') ->middleware('auth');


