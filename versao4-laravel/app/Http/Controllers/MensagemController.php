<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class MensagemController extends Controller
{
    public function index(){
        $user = Auth::user( );
        $mensagens = \App\Mensagens::all();

        return view('usuarios.mensagem', compact('mensagens'));
    }

    public function mensagemEmissor(Request $request){
        
    }

    public function mensagemDestino(Request $request){

    }
}
