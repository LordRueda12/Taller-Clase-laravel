@extends('layouts.app')

@section('title','Editar articulo')
    
@section('content')

<form method="POST" action="{{route('articulo.update', $articulo)}}" class="articulo_nuevo">
    @csrf
    @method('PATCH')
    <fieldset>
        <legend>Url de la imagen  del articulo</legend>
        <input value="{{old('imagen_destacada',$articulo['imagen_destacada'])}}" type="url" name="imagen_destacada" id="url">
    </fieldset>

    <fieldset>
        <legend>Titulo del articulo</legend>
        <input  value="{{old('titulo',$articulo['titulo'])}}" type="text" name="titulo" id="titulo">
    </fieldset>
    
    <fieldset>
        <legend>Contenido del articulo</legend>
        <textarea type="text" name="contenido" id="" id="contenido">{{old('contenido',$articulo['contenido'])}}</textarea>
        
    </fieldset>

    <fieldset>
        <legend>Autor </legend>
        <input value="{{old('autor',$articulo['autor'])}}" type="text" name="autor" id="autor">
    </fieldset>

    <fieldset>
        <legend>Categoria del blog</legend>
        <select name="categoria_blog_id" id="categoria_blog_id" autocomplete="off">
        @foreach($categoriasBlog as $categoriaBlog)
        <option value="{{$categoriaBlog->id}}" @if(old('categoria_blog_id',$articulo['categoria_blog_id'])==$categoriaBlog->id) selected @endif>{{$categoriaBlog->nombre}}</option>
        @endforeach
        </select>
    </fieldset>

    <fieldset>
        <legend>Fecha de publicacion</legend>
        <input value="{{old('fecha_publicaion',$articulo['fecha_publicacion'])}}" type="date" name="fecha_publicacion" id="fecha_publicacion">
    </fieldset>
    <button>Publicar articulo</button>
</form>


@if($errors->any())
    <div class="erorrs">
        @foreach($errors->all() as $error)
            <p class="error">{{$error}}</p>
        @endforeach
    </div>
@endif
@endsection