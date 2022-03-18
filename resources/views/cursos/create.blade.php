@extends('layouts.plantilla')

@section('title', 'Create')
    
@section('content')
    <h1> Formulario</h1>
    <br>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            
            <input type="text" name="name">
        </label>
        <br>
        <br>
        <label>
            Descripcion:
            
            <textarea  name="descripcion" rows="5"></textarea>
        </label>   
        <br>
        <br>
        <label>
            Categoria:
            
            <input type="text" name="categoria">
        </label> 
        <br><br>
        <button type="submit">Enviar</button>
    </form>
@endsection