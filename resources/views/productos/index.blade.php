@extends('layouts.app')

@section('title','Productos')
    
@section('content')
<form method="GET" action="{{route('producto.index')}} " class="filtrar-productos">
    <label for="categoria">filtrar por categoria</label>
    <select name="categoria" id="categoria" onchange="this.form.submit()">
        <option value="">Todas</option>
        @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}" {{request('categoria')== $categoria->id ? 'selected' : ''}}>{{$categoria->nombre}}</option>
        @endforeach
    </select>
</form>

<div class="productos">
    @foreach($productos as $producto)
    <div class="producto">
        <img src="{{$producto->imagen}}" alt="">
        <h2>{{$producto->nombre}}</h2>
        <span class="precio">{{$producto->precio}}</span>
        <button title="añadir al carrito" class="agregar-compra">🛒</button>
        <div class="detalles">
            <a href="{{route('producto.show',$producto)}}"> ver detalles</a>
            <a href="{{route('producto.edit',$producto)}}"> 
                <button title="editar producto">🖋️</button>
            </a>
            <form action="{{route('producto.delete',$producto)}}" method="POST">
                @csrf
                @method('DELETE')
                <button title="Eliminar producto">🗑️</button>
            </form>
        </div>
    </div>


    @endforeach
    </div>

    <a class="nav-bar" href="{{route('producto.create')}}">Añadir un nuevo producto</a>
@endsection