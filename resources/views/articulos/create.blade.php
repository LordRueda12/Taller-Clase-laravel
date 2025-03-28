@extends('layouts.app')

@section('title','Nuevo articulo')
    
@section('content')

<form method="POST" action="{{route('articulo.store')}}" class="articulo_nuevo">
    @csrf
    <fieldset>
        <legend>{{__('messages.urlOfTheImage')}}</legend>
        <input type="url" name="imagen_destacada" id="url">
    </fieldset>
    <fieldset>
        <legend>{{__('messages.tittleOfTheArticle')}}</legend>
        <input type="text" name="titulo" id="titulo">
    </fieldset>
    <fieldset>
        <legend>{{__('messages.contentOfTheArticle')}}</legend>
        <input type="text" name="contenido" id="contenido">
    </fieldset>
    <fieldset>
        <legend>{{__('messages.autor')}} </legend>
        <input type="text" name="autor" id="autor">
    </fieldset>
    <fieldset>
        <legend>{{__('messages.blogCategory')}}</legend>
        <select type="text" name="categoria_blog_id" id="categoria_blog_id" autocomplete="off">
        <option value="null" selected disabled hidden>Categoria del blog</option>
        @foreach($categoriasBlog as $categoriaBlog)
        <option value="{{$categoriaBlog->id}}">{{$categoriaBlog->nombre}}</option>
        @endforeach
        </select>
    </fieldset>
    <fieldset>
        <legend>{{__('messages.dateOfPublish')}}  </legend>
        <input type="date" name="fecha_publicacion" id="fecha_publicacion">
    </fieldset>
    <button>{{__('messages.publishArticle')}}</button>
</form>


@if($errors->any())
    <div class="erorrs">
        @foreach($errors->all() as $error)
            <p class="error">{{$error}}</p>
        @endforeach
    </div>
@endif
@endsection