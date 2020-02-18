<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){
        $cursos = \App\Curso::All();
        $status = \App\Statu::All();
        return view('usuarios.editarCadastro', compact('cursos', 'status'));
    }
    public function edit(){


    }
}
