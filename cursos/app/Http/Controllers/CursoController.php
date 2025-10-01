<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\DataFormCursos;

class CursoController extends Controller
{
    public function index(){
        //$cursos = Curso::all();
        $cursos = Curso::orderBy('id','desc')->paginate(10);
        return view('cursos.index',compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }
    public function dataFormCursos(DataFormCursos $request){
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso->id);
    }
    public function show($id){
        $curso = Curso::find($id);
        return view('cursos.show',['curso'=>$curso]);
    }
    public function edit($id){
        $curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }
    public function update(Request $request){

         //request validate
        $request->validate([
            'nombre'=> 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $curso = Curso::find($request->id);
        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }
    public function destroy($id){
        $curso = Curso::find($id);
        $curso->delete();
        return redirect()->route('cursos.index');
    }
    
}
