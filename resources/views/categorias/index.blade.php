@extends('layouts.app')

@section('title','Categorias')
    
@section('content')

<div class="categorias">
    <table class="categorias">
        <thead>
            <tr>
                <th>{{__('messages.name')}}</th>
                <th>{{__('messages.description')}}</th>
                <th>{{__('messages.actions')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->Nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td>
                    <a href="{{route('categoria.edit',$categoria)}}">
                        <button title="{{__('messages.editCategory')}}">🖋️</button>
                    </a>
                    <form action="{{route('categoria.delete',$categoria)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button title="{{__('messages.deleteCategory')}}">🗑️</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <form method="POST" action="{{route('categoria.store')}}">
                @csrf
                <td><input type="text" name="nombre" id="nombre" placeholder="{{__('messages.name')}}"></td>
                <td><input type="text" name="descripcion" id="descripcion" placeholder="{{__('messages.description')}}"></td>
                <td>
                    <button title="{{__('messages.addCategory')}}">➕</button>
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