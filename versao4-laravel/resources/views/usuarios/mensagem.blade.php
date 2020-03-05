@extends('layouts.indexhome', ['current' => 'mensagens'])

@section('titulo', 'Help')
@section('conteudo')

<div class="container">
  <div class="row d-flex justify-content-md-between justify-content-center">
    @foreach ($mensagens as $mensagem)
    <div class="card mb-3" style="width: 22rem;">
      <div class="card-body">
        <div class="col-sm-6 col-md-8 col-lg-12">
          <h5 class="card-title">{{$mensagem->remetente->nome}}</h5>
          <h5 class="card-subtitle mb-2 text-muted">{{$mensagem['assunto']}}</h5>
          <p class="card-text">{{$mensagem['mensagem']}}</p>
          <small>{{$mensagem['created_at']}}</small>
          <a class="card-link btn btn-info py-1 px-4 w-100" style="color:#FFFF;" data-toggle="collapse" href="#codigo{{$mensagem->remetente->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">Responder</a>
        </div>
        <!-- mensagem -->
        <div class="collapse mt-1 post-feed" id="codigo{{$mensagem->remetente->id}}">
          <div class="card card-body">
            <form method="post" action="{{route('usuarios.mensagem')}}" enctype="multipart/form-data">
              @csrf
              @method('POST')
              <div class="row">
                <div class="col-sm-8">
                <input type="hidden" name = "remetente_user_id" value = "{{Auth::User()->id}}">
                <input type="hidden" name = "destino_user_id" value = "{{$mensagem->remetente->id}}">
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 py-0 ml-3"
                  id="assunto" name="assunto" placeholder="Assunto" required>
                <input type="textarea" class="form-control border-top-0 border-right-0 border-left-0 py-0 ml-3"
                  id="mensagem" name="mensagem" placeholder="Escreve uma mensagem..." required>
                </div>
              </br>
              <button type="submit" class="btn btn-primary btn-sm mt-2 mb-5">Enviar</button>
            </form>
            </div>
          </div>
        </div>
        <!-- -------------------- -->
      </div>
    </div>
    @endforeach
  </div>
</div>
      
@endsection