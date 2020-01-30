<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(){
        return view('usuarios.perfilLateral');
    }

    public function create(){
        return view('usuarios.perfilLateralcreate');
    }
}
