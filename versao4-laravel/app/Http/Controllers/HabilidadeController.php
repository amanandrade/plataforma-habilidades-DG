<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabilidadeController extends Controller
{
    public function index(){
        return view('usuarios.habilidades');
    }

    public function create(){
        return view('usuarios.habilidadesBusca');
    }
}
