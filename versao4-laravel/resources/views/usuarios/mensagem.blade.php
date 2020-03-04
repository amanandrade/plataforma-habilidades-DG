@extends('layouts.indexhome', ['current' => 'mensagens'])

@section('titulo', 'Help')
@section('conteudo')

@foreach ($mensagens as $mensagem)

<div class="container">
  <div class="row">
      <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$mensagem['assunto']}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$mensagem['remetente_user_id']}}</h6>
          <p class="card-text">{{$mensagem['texto']}}</p>
          <small>{{$mensagem['hora']}}</small>
          
        </div>
      </div>
    </div>
  </div>
</div>

  
@endforeach

@endsection