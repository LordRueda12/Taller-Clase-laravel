@extends('layouts.app')

@section('title','Articulos')
    
@section('content')
<div class="articulos">
    @forelse ($articulos as $articulo)
        <article class="articulo">
            <h2>{{ $articulo->titulo }}</h2>
            <p>{{ $articulo->categoriaBlog->nombre }}</p>
            <div class="detalles">
                <a href="{{route('articulo.show',$articulo)}}">Leer</a>
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
        </article>
    @empty
        <li>No hay articulos para mostar</li>
    @endforelse
    {{$articulos->links('pagination::bootstrap-4')}}
</div>
<br>
<div class="nuevo-articulo">
    <a href="{{route('articulo.create')}}">Añadir un nuevo articulo</a>
</div>
@endsection