<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabilidadeController extends Controller
{
    public function index(){

        $habilidades = \App\Tab_habilidade::all();
        return view('usuarios.habilidades', compact('habilidades'));

    }

    public function create(Request $request){
        // $habilidade_pesquisada = $request['habilidade_pesquisada'];
        // dd($habilidade_pesquisada);

        // $usuarios = \App\User::all();
        // $array_usuarios = [];
        // foreach ($usuarios as $key => $value) {
        //     $array_usuarios[] = $value['nome'];
        // }
        // dd($array_usuarios);


        // $usuario = \App\User::find(3);
        // $habilidades_usuario = $usuario->habilidades()->get();

        // $array_habilidades = [];
        // foreach ($habilidades_usuario as $key => $value) {
        //     $array_habilidades[] = $value['habilidades'];
        // }

        // 1 -----------------------------------------------------------------------------------------------------
        // $usuarios = \App\User::get();
        // foreach ($usuarios as $usuario) {

        //     $habilidades = $usuario->habilidades()->get();
        //     echo "<br>$usuario[nome]<br>";
            
        //     foreach ($habilidades as $key => $value) {
                
        //         echo " $value[habilidades] ";
        //     }

        // }

        // 2 ---------------------------------------------------------------------------------------------------------
        // $usuarios = \App\User::get();
        // foreach ($usuarios as $usuario) {

        //     $habilidades = $usuario->habilidades()->where('habilidades', 'LIKE',"%{$request['habilidade_pesquisada']}%")->get();
        //     echo "<br>$usuario[nome]<br>";

        //     foreach ($habilidades as $key => $value) {
        //         echo " $value[habilidades] ";
        //     }

        // }

        // 3 -----------------------------------------------------------------------------------------------------
        // $usuarios = \App\User::get();
        // foreach ($usuarios as $usuario) {

        //     $habilidades = $usuario->habilidades()->where('habilidades', 'LIKE',"%{$request['habilidade_pesquisada']}%")->get();
            
        //     if(count($habilidades) > 0) {
        //         echo "<br><b>$usuario[nome]</b><br>";
        //     }
            
        //     foreach ($habilidades as $key => $value) {
        //         echo " $value[habilidades] ";
        //     }

        // }

        // 4 -----------------------------------------------------------------------------------------------------------
        $tag_busca = $request['habilidade_pesquisada'];
        $usuarios = \App\User::get();
        foreach ($usuarios as $usuario) {

            $habilidades = $usuario->habilidades()->where('habilidades', 'LIKE',"%{$tag_busca}%")->get();
            
            // if(count($habilidades) > 0) {
            //     echo "<br><b>$usuario[nome]</b><br>";
            // }
            
            // foreach ($habilidades as $key => $value) {
            //     echo " $value[habilidades] ";
            // }

        }

        return view('usuarios.habilidadesBusca', compact('usuarios', 'habilidades','tag_busca'));

    }

    public function buscatag(Request $request) {

        $tag_busca = $request['habilidade_pesquisada'];
        $usuarios = \App\User::get();
        foreach ($usuarios as $usuario) {

            $habilidades = $usuario->habilidades()->where('habilidades', 'LIKE',"%{$tag_busca}%")->get();
            
            // if(count($habilidades) > 0) {
            //     echo "<br><b>$usuario[nome]</b><br>";
            // }
            
            // foreach ($habilidades as $key => $value) {
            //     echo " $value[habilidades] ";
            // }

        }

        return view('usuarios.habilidadesBuscaTag', compact('usuarios', 'habilidades','tag_busca'));
    }

    public function buscapessoa(Request $request) {

        $tag_busca = $request['habilidade_pesquisada'];
        $usuarios = \App\User::get();
        foreach ($usuarios as $usuario) {

            $habilidades = $usuario->habilidades()->where('habilidades', 'LIKE',"%{$tag_busca}%")->get();
            
            // if(count($habilidades) > 0) {
            //     echo "<br><b>$usuario[nome]</b><br>";
            // }
            
            // foreach ($habilidades as $key => $value) {
            //     echo " $value[habilidades] ";
            // }

        }

        return view('usuarios.habilidadesBuscaPessoa', compact('usuarios', 'habilidades','tag_busca'));
    }
}
