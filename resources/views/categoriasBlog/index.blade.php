@extends('layouts.app')

@section('title','Categorias')
    
@section('content')

<div class="categorias">
    <table class="categorias">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categoriaBlogs as $categoriaBlog)
            <tr>
                <td>{{$categoriaBlog->nombre}}</td>
                <td>{{$categoriaBlog->descripcion}}</td>
                <td>
                    <a href="{{route('categoria.edit',$categoriaBlog)}}">
                        <button title="Editar categoria">🖋️</button>
                    </a>
                    <form action="{{route('categoria.delete',$categoriaBlog)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button title="Eliminar categoria">🗑️</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <form method="POST" action="{{route('categoria.store')}}">
                @csrf
                <td><input type="text" name="nombre" id="nombre" placeholder="nombre"></td>
                <td><input type="text" name="descripcion" id="descripcion" placeholder="descripcion"></td>
                <td>
                    <button title="Agregar categoria">➕</button>
                </td>
            </form>
        </tbody>
    </table>
</div>

@if($errors->any())
    <div class="erorrs">
        @foreach($errors->all() as $error)
            <p class="error">{{$error}}</p>
        @endforeach
    </div>
@endif
@endsection