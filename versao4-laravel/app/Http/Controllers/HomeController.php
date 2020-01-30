<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(){
        $user=Auth::User();
        return view('usuarios.home', compact('user'));
    }

    public function update(Request $req){
        $dados=$req->all();

        if($req->hasFile('foto')){
            $imagem=$req->file('foto');
            $num=rand(111111,99999999);
            $dir="img/fotos/";
            $ex=$imagem->guessClientExtension();
            $nomeImagem="foto_".".$num."."$ex";
            $imagem->move($dir,$nomeImagem);
            $dados['foto']=$dir."/".$nomeImagem;
        }
            Auth::User()->update($dados);
        // $user=Auth::User();
        // $user->nome=$dados['nome'];
        // $user->foto=$dados['foto'];
        // $user->save();

        return redirect()->route('usuarios.home');
    }
}
