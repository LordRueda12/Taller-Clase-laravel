@extends('layouts.app')

@section('title','Productos')
    
@section('content')

<form action="{{route('producto.store')}}" method="post" class="producto_nuevo">
@csrf

    <fieldset>
        <legend>Url de la imagen del producto</legend>
        <input type="url" name="imagen" id="url">
    </fieldset>
    <fieldset>
        <legend>Nombre del producto</legend>
        <input type="text" name="nombre" id="nombre">
    </fieldset>
    <fieldset>
        <legend>Descripcion del producto</legend>
        <input type="text" name="descripcion" id="descripcion">
    </fieldset>
    <fieldset>
        <legend>stock del producto</legend>
        <input type="number" name="stock" id="stock">
    </fieldset>
    <fieldset>
        <legend>categoria del producto</legend>
        
        <select name="categoria_id" id="categoria" autocomplete="off">
            <option value="null" selected disabled hidden>Categoria</option>
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <legend>Precio del producto</legend>
        <input type="number" name="precio" id="precio">
    </fieldset>
    <button>Agregar producto</button>
    
</form>
@if($errors->any())
    <div class="erorrs">
        @foreach($errors->all() as $error)
            <p class="error">{{$error}}</p>
        @endforeach
    </div>
@endif
@endsection