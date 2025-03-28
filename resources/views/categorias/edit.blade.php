@extends('layouts.app')

@section('title','Productos')
    
@section('content')
<table class="categorias">
    <thead>
        <tr>
            <th>{{__('messages.name')}}</th>
            <th>{{__('messages.description')}}</th>
            <th>{{__('messages.actions')}}</th>
        
        </tr>
    </thead>
    <tbody>

        <form method="POST" action="{{route('categoria.update',$categoria)}}">
            <tr>
                @csrf
                @method('PATCH')
                <td><input value="{{old ('nombre', $categoria['nombre'])}}" type="text" name="nombre" id="nombre" placeholder="{{__('messages.name')}}"></td>
                <td><input value="{{old ('descripcion', $categoria['descripcion'])}}" type="text" name="descripcion" id="{{__('messages.description')}}" placeholder="descripcion"></td>
                <td>
                    <button title="{{__('messages.saveChanges')}}">✅</button>
                    <a href="{{route('categoria.index')}}">
                        <button type="button" title="{{__('messages.deleteChanges')}}">❌</button>
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