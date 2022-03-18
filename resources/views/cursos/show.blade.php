@extends('layouts.plantilla')

@section('title', 'Curso'.$curso->name)
    
@section('content')
    <a href="{{route('cursos.index')}}">Volver </a><br>
    <a href="{{route('cursos.edit',$curso)}}">Editar</a>
    <h1> Bienvenido al curso de {{$curso->name}}</h1>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>
@endsection