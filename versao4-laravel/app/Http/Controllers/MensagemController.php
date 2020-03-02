<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class MensagemController extends Controller
{
    public function index(){
        
        return view('usuarios.mensagem');
    }
}
