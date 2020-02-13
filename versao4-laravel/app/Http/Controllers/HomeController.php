<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    public function index(){

        $user=Auth::User();
        $tags=$user->habilidades;
        $habilidades= \App\Tab_habilidade::all();
        $publicacao = \App\Msg_emissor_feed::orderBy('id','DESC')->get();
        $comentarios= \App\Msg_receptor_feed::orderBy('id','DESC')->get();

        // $publicacao_array = \App\Msg_emissor_feed::select('id', 'mensagem')->get();
        // $comentario_array = \App\Msg_receptor_feed::select('mensagem', 'emissor_id')->get();

        // $control = \App\Msg_receptor_feed::select('mensagem', 'emissor_id')->get();
        // $control = \App\Msg_receptor_feed::select('mensagem')->where('emissor_id', 6)->get();
        // $control = \App\Msg_receptor_feed::select('mensagem')->where('emissor_id', 7)->get()->count();

        // select count(emissor_id) from msg_receptor_feeds where emissor_id = 6;

        return view('usuarios.home', compact('user', 'tags', 'habilidades', 'publicacao','comentarios'));
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

    public function addTags(Request $req){

        /*-------------------------------------------------------------------------*/
        // $req->validate([
        //     'habilidade_id'=>'unique:tags',
        // ]);

        // $recupera = \App\Tab_habilidade::find($req['habilidade_id']);
        // dd($recupera['habilidades']);

        // $user=\App\User::find($req['usuario_id']);
       
        // carregando habiliades ta tabelas tag_habilidades
        // $habilidades = \App\Tab_habilidade::all();
        // $array_habilidades = [];
        // foreach ($habilidades as $key => $value) {
        //     $array_habilidades[] = $value['habilidades'];
        // }
        // dd($array_habilidades);

        // carregando habiliades da conta
        // $teste = $user->habilidades()->get();
        // $array = [];
        // foreach ($teste as $key => $value) {
        //   $array[] = $value['habilidades'];
        // }
        /*-------------------------------------------------------------------------*/

      $recupera_habilidade = \App\Tab_habilidade::find($req['habilidade_id']);
      $recupera_user = \App\User::find($req['usuario_id']);
      $habilidades_usuario = $recupera_user->habilidades()->get();

       $control = false;
       foreach ($habilidades_usuario as $key => $value) {
           if($value['habilidades'] == $recupera_habilidade['habilidades']){
               $control = true;
           }
       }

       if($control == false){
        $recupera_user->habilidades()->attach($req['habilidade_id']);
       }

        /*-------------------------------------------------------------------------*/   
        // dd($array);
        // $user->habilidades()->attach($req['habilidade_id']);
        /*-------------------------------------------------------------------------*/

    
        return redirect()->route('usuarios.home');

    }

    // Post
    public function mensagensEmissor(Request $request) {
        $dados = $request->all();

        $emissor = \App\Msg_emissor_feed::create($dados);

        return redirect()->route('usuarios.home');
    }

    public function destroyEmissor($id){

        $emissor = \App\Msg_emissor_feed::find($id);
        $emissor->receptors()->delete();
        $emissor->delete();

        return redirect('/home');
    }

    // Comentarios
    public function mensagensReceptor(Request $request){

          $dados=$request->all();

          $receptor= \App\Msg_receptor_feed::create($dados);

          return redirect()->route('usuarios.home');
    }

    // public function updateReceptor(Request $request, $id){
    //     $receptor = \App\Msg_receptor_feed::find($id);

    //     $data = $request->only([
    //         'mensagem'
    //     ]);

    //     $receptor->mensagem = $data['mensagem'];
    //     $receptor->save();

    //     return redirect('/home');
    // }

    public function destroyReceptor($id){

        $receptor = \App\Msg_receptor_feed::find($id);
        $receptor->delete();

        return redirect('/home');
    }
}
