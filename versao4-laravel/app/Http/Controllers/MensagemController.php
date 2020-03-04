<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class MensagemController extends Controller
{
    public function index(){
        $user = Auth::user( );
        $mensagens = $user->mensagensRecebidas;

        return view('usuarios.mensagem', compact('mensagens', 'user'));
    }

    public function mensagemRemetente(Request $request){
        $dados = $request->all();

        $remetente = \App\Mensagens::create($dados);

        return redirect()->route('usuarios');
    }

}
