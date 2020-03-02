<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use Auth;


class CadastroController extends Controller
{
    public function index(){
        $user=Auth::User();
        $cursos = \App\Curso::All();
        $status = \App\Statu::All();
        return view('usuarios.editarCadastro', compact('cursos', 'status','user'));
    }
    public function edit(Request $request){
       $dados=$request->All();
       $usuario=Auth::User();
       $usuario->update($dados);
       return redirect()->route('usuarios.home');
    }
}
