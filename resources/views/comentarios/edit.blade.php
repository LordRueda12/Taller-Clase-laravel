@extends('layouts.app')

@section('title','Editar comentario')
    
@section('content')
<form  method="POST" action="{{route('comentario.update',$comentario)}}" class="editar_comentario">
    @csrf
    @method('PATCH')
    <input type="hidden" name="articulo_id" value="{{$comentario->articulo_id}}">
    <fieldset>
        <legend>Nombre del usuario</legend>
        <input type="text" name="nombre_usuario" value="{{old('nombre_usuario',$comentario['nombre_usuario'])}}" placeholder="Tu nombre" name="nombre_usuario" id="nombre_usuario" required>
    </fieldset>

    <fieldset>
        <legend>Email del usuario</legend>
        <input type="email" name="email" id="email" value="{{old('email',$comentario['email'])}}" placeholder="Tu email" autocomplete="off">
    </fieldset>

    <fieldset>
        <legend>Contenido del comentario</legend>
        <textarea name="contenido" id="contenido"  placeholder="Escribe tu comentario" required>{{old('contenido',$comentario['contenido'])}}</textarea>
    </fieldset>
    <button>Guardar Ediciones</button>
    
</form>

@if($errors->any())
    <div class="erorrs">
        @foreach($errors->all() as $error)
            <p class="error">{{$error}}</p>
        @endforeach
    </div>
@endif
@endsection