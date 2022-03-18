<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id','desc')->paginate(20);

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show',$curso->id);
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    //Variante optimizada
    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    /* Forma normal sin optimizar
    public function edit($id){
        $curso = Curso::find($id);

        return $curso;
    }*/

    public function update(Request $request,Curso $curso){

        $request->validate([
            'name'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show',$curso);
    }
}
