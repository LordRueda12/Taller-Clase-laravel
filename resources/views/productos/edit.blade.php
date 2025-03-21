@extends('layouts.app')

@section('title','Editar producto')
    
@section('content')

<form action="{{route('producto.update',$producto)}}" method="POST" class="editar_producto">
@csrf
@method('PATCH')
    <fieldset>
        <legend>Url de la imagen del producto</legend>
        <input type="url" name="imagen" id="url" value="{{old('imagen',$producto['imagen'])}}">
    </fieldset>
    <fieldset>
        <legend>Nombre del producto</legend>
        <input type="text" name="nombre" id="nombre"  value="{{old('nombre',$producto['nombre'])}}">
    </fieldset>
    <fieldset>
        <legend>Descripcion del producto</legend>
        <input type="text" name="descripcion" id="descripcion"  value="{{old('descripcion',$producto['descripcion'])}} ">
    </fieldset>
    <fieldset>
        <legend>stock del producto</legend>
        <input type="number" name="stock" id="stock"  value="{{old('stock',$producto['stock'])}}">
    </fieldset>
    <fieldset>
        <legend>categoria del producto</legend>
        
        <select name="categoria_id" id="categoria" autocomplete="off">
           
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">@if(old('categoria_id',$producto['categoria_id'])==$categoria->id)selected @endif>{{$categoria->nombre}}
        </option>
            @endforeach

        </select>
    </fieldset>
    <fieldset>
        <legend>Precio del producto</legend>
        <input type="number" name="precio" id="precio" value="{{old('precio',$producto['precio'])}}">
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