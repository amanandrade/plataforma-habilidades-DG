<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{

  public function create(){
    $cursos= \App\Curso::all();
    $status= \App\Statu::all();
    return view('usuarios.cadastro', compact('cursos', 'status'));
}

  public function store(UsuarioRequest $req){

    $dados=$req->all();
    $usuarios= new \App\User();
    $usuarios->nome=$dados['nome'];
    $usuarios->genero=$dados['genero'];
    $usuarios->email=$dados['email'];
    $usuarios->password=bcrypt($dados['password']);
    $usuarios->telefone=$dados['telefone'];
    $usuarios->nascimento=$dados['nascimento'];
    $usuarios->curso_id=$dados['curso_id'];
    $usuarios->status_id=$dados['status_id'];

    // // pega nome
     // $nome = $dados['nome'];

    $usuarios->save();
    flash('Conta do Usuário criado com sucesso. Digita o seu email e a senha')->success();

    /*--------------------------------------------------------------------------------*/ 

    // // ccontrola sucesso na gravacao
    // $ok = $usuarios->save();

    // if($ok){
    // $usuario =\App\User::where('nome', $nome)->get()->first();

    //$tabela_fotos = \App\Foto_usuario()-get();
     
    // $foto = new \App\Foto_usuario();
     
    // $foto->usuario_id = $usuario['id'];

    // $foto->usuario_id;

    //dd($foto->usuario_id);
    //   $foto->foto = null;

    //   $foto->save();
    //  }
    
    return redirect()->route('usuarios.login');

  }



}
