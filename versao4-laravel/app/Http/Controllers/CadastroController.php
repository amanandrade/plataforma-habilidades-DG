<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){

        // echo("cheguei");

        return view('usuarios.editarCadastro');
    }
    public function edit(){


    }
}
