@extends('layouts.indexhome', ['current' => 'mensagens'])

@section('titulo', 'Help')
@section('conteudo')

@foreach ($mensagens as $mensagem)
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="VerMensagem-tab" data-toggle="tab" href="#VerMensagem" role="tab" aria-controls="VerMensagem" aria-selected="true">Ver Mensagem</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="VerMensagem" role="tabpanel" aria-labelledby="VerMensagem-tab">{{$mensagem->mensagensRecebidas}}</div>
</div>
@endforeach

@endsection