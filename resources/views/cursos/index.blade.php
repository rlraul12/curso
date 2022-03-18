@extends('layouts.plantilla')

@section('title', 'Cursos')
    
@section('content')
    <h1> Bienvenidos a la pagina principal</h1>
    <br>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <br>
    <br> 
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a>
            </li>
            
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection