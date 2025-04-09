@extends('layouts.app')

@section('title','Categorias')
    
@section('content')

<div class="categorias">
    <table class="categorias">
        <thead>
            <tr>
                <th>{{__('messages.name')}}</th>
            <th>{{__('messages.description')}}</th>
           @auth <th>{{__('messages.actions')}}</th>@endauth
            </tr>
        </thead>
        <tbody>
            @foreach($categoriaBlogs as $categoriaBlog)
            <tr>
                <td>{{$categoriaBlog->nombre}}</td>
                <td>{{$categoriaBlog->descripcion}}</td>
                @auth
                    
                
                <td>
                    <a href="{{route('categoria.edit',$categoriaBlog)}}">
                        <button title="{{__('messages.saveChanges')}}">🖋️</button>
                    </a>
                    <form action="{{route('categoria.delete',$categoriaBlog)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button title="{{__('messages.deleteChanges')}}">🗑️</button>
                    </form>
                </td>
                @endauth
            </tr>
            @endforeach
            @auth
            <form method="POST" action="{{route('categoria.store')}}">
                @csrf
                <td><input type="text" name="nombre" id="nombre" placeholder="{{__('messages.name')}}"></td>
                <td><input type="text" name="descripcion" id="descripcion" placeholder="{{__('messages.description')}}"></td>
                <td>
                    <button title="{{__('messages.addCategory')}}">➕</button>
                </td>
            </form>
            @auth
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