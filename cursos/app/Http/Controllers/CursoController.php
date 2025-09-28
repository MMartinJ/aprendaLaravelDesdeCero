<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        //$cursos = Curso::all();
        $cursos = Curso::paginate(10);
        return view('cursos.index',compact('cursos'));
    }
    public function show($curso){
        return view('cursos.show',['curso'=>$curso]);
    }
    public function create(){
        return view('cursos.create');
    }
    
}
