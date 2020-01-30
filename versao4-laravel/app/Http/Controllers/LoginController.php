<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Auth;

class LoginController extends Controller
{
    public function index(){

        return view('auth.login');
       }
    
       public function entrar(UserRequest $req){

          // $req->validate([
            //   'email'=>'required|email',
              // 'password'=>'required',
           //]);

            $credenciais=['email'=>$req->email, 'password'=>$req->password];

           if(Auth::attempt($credenciais)){    

            return redirect()->route('usuarios.home');
            
           }else{

             return redirect()->back()->with('msg','Acesso negado para estas credenciais');   // quando o login na bateu com do banco de dados vai direcionar para pagina de login
       }
    }
      
       public function sair(){
           Auth::logout();
           return redirect()->route('usuarios.login');
       }
       
       public function Lembrarsenha(){

        return view('auth.loginLembrarsenha');
      }
   
      public function verificarEmail(){
   
       return view('auth.loginMudarsenha');
   
      }
}
