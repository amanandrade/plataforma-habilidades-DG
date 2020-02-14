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
       
        $tag_busca = $request['habilidade_pesquisada'];
        
        $usuarios = \App\User::get();

        // ------------------------------------------------------------------------------------
        $buscas = (\App\User::query()->WhereHas('habilidades', function($query) use ($tag_busca) {
            return $query->where('habilidades', 'LIKE', "%{$tag_busca}%");
        })->orWhere('nome', 'LIKE', "%{$tag_busca}%")->get());
        // ------------------------------------------------------------------------------------
        
        // dd($buscas);
        
        // $usuarios = [];
        // foreach ($buscas as $busca) {
        //     $usuarios[] = $busca;
        // }

        // $habilidades = "";
        // dd($array_buscas);

        // foreach ($usuarios as $usuario) {
        //     // $habilidades = $usuario->habilidades()->where('habilidades', 'LIKE',"%{$tag_busca}%")->get();
        // }

        return view('usuarios.habilidadesBusca', compact('buscas', 'tag_busca'));

        // return view('usuarios.habilidadesBusca', compact('usuarios', 'habilidades','tag_busca'));

        // foreach ($usuarios as $usuario) {
        //     $habilidades = $usuario->habilidades()->where('habilidades', 'LIKE',"%{$tag_busca}%")->get();
        // }

        // return view('usuarios.habilidadesBusca', compact('usuarios', 'habilidades','tag_busca'));

        // -----------------------------------------------------------------------------------
        // $usuario = \App\User::where('nome', 'LIKE', "%{$tag_busca}%")->get();

        // if(count($usuario) > 0){
        //     foreach ($usuario as $user) {
        //         $usuario_habilidades = $user->habilidades()->get();
        //     }
        //     return view('usuarios.habilidadesBuscaPessoaConcreta', compact('usuario', 'usuario_habilidades'));
        // }
        // else{
        //     $usuario = null; 
        //     $usuario_habilidades =null;
        //     return view('usuarios.habilidadesBuscaPessoaConcreta', compact('usuario', 'usuario_habilidades'));
        // }
        // -------------------------------------------------------------------------------------

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

    public function buscapessoaconcreta(Request $request) {

         $usuario = \App\User::where('nome', 'LIKE', "%{$request['nome']}%")->get();

         if(count($usuario) > 0){
            foreach ($usuario as $user) {
                $usuario_habilidades = $user->habilidades()->get();
            }
            return view('usuarios.habilidadesBuscaPessoaConcreta', compact('usuario', 'usuario_habilidades'));
         }
         else{
            $usuario = null; 
            $usuario_habilidades =null;
            return view('usuarios.habilidadesBuscaPessoaConcreta', compact('usuario', 'usuario_habilidades'));
         }
         
    }
}
