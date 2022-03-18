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
            
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>

        <br>
        @error('name')
            <small>*{{$message}}</small>
        @enderror
        <br>
        <label>
            Descripcion:
            
            <textarea  name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>   
        <br>
        @error('descripcion')
            <small>*{{$message}}</small>
        @enderror
        <br>
        <label>
            Categoria:
            
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label> 
        <br>
        @error('categoria')
            <small>*{{$message}}</small>
        @enderror
        <br>
        <button type="submit">Actualizar Curso</button>
    </form>
@endsection