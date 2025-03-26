@extends('layouts.app')

@section('title','Productos')
    
@section('content')
<table class="categorias">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

        <form method="POST" action="{{route('categoria.update',$categoria)}}">
            <tr>
                @csrf
                @method('PATCH')
                <td><input value="{{old 'nombre', $categoria['nombre']}}" type="text" name="nombre" id="nombre" placeholder="nombre"></td>
                <td><input value="{{old 'descripcion', $categoria['descripcion']}}" type="text" name="descripcion" id="descripcion" placeholder="descripcion"></td>
                <td>
                    <button title="Guardar ediciones">✅</button>
                    <a href="{{route('categoria.index')}}">
                        <button type="button" title="Cancelar ediciones">❌</button>
                    </a>
                </td>
            </tr>
        </form>
    </tbody>
    </table>
@if($errors->any())
    <div class="erorrs">
        @foreach($errors->all() as $error)
            <p class="error">{{$error}}</p>
        @endforeach
    </div>
@endif
@endsection