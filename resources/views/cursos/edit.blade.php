@extends('layouts.plantilla')

@section('title', 'Editar Curso')
    
@section('content')
    <h1> Formulario Editar </h1>
    <br>
    <form action="{{route('cursos.update',$curso)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <br>
        <label>
            Descripcion:
            
            <textarea  name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>   
        <br>
        <br>
        <label>
            Categoria:
            
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label> 
        <br><br>
        <button type="submit">Actualizar Curso</button>
    </form>
@endsection