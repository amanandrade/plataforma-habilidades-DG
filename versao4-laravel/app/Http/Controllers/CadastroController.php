<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){

        // echo("cheguei");
        Auth::user();
        return view('usuarios.editarCadastro');
    }
    public function edit(){


    }
}
