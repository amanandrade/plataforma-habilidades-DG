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
   

      public function verificarEmail(Request $req){
  
        $email=$req['email'];
      
        //dd($email);
        $email_user= \App\User::where('email',$email)->get()->first();
      
       //dd($email_user);
      
          if($email_user){
      
            $verificado=$email_user;
             
            return view('Auth.loginMudarsenha', compact('verificado'));
      
          }else{
      
            return redirect()->back()->with('msg','O email não corresponde');;
          }
      
      }
      
      public function updateSenha(Request $req, $id){
        $dados=$req->all();
        $update= \App\User::find($id);
        $update->password=bcrypt($dados['password']);
        $update->save();
         
        return redirect()->route('usuarios.login');
      
      
      }
      
}
