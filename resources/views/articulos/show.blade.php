@extends('layouts.app')

@section('title','Nuevo articulo')
    
@section('content')
<div class="articulo">
    <h2>{{$articulo->titulo}}</h2>
    <p class="autor">{{$articulo->autor}}</p>
    <p class="categoria">{{$articulo->categoriaBlog->nombre}}</p>
    <p class="contenido">{{$articulo->contenido}}</p>
    <p class="fecha-publicacion">{{$articulo->fecha_publicacion}}</p>
    <img title="imagen-destacada" src="{{$articulo->imagen_destacada}}" alt="">
    <div class="actions">
        <a href="{{route('articulo.edit',$articulo)}}">
            <button title="Editar articulo">🖋️</button>
        </a>
        <form action="{{route('articulo.delete',$articulo)}}" method="POST">
            @csrf
            @method('DELETE')
            <button title="Eliminar articulo">🗑️</button>
        </form>
    </div>
</div>
@endsection