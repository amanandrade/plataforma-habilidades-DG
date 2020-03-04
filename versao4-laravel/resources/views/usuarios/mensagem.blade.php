@extends('layouts.indexhome', ['current' => 'mensagens'])

@section('titulo', 'Help')
@section('conteudo')

@foreach ($mensagens as $mensagem)

<div class="container">
  <div class="row">
      <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$mensagem->remetente->nome}}</h5>
          <h5 class="card-subtitle mb-2 text-muted">{{$mensagem['assunto']}}</h5>
          <p class="card-text">{{$mensagem['mensagem']}}</p>
          <small>{{$mensagem['created_at']}}</small>
      </div>
    </div>
  </div>
</div>

  
@endforeach

@endsection