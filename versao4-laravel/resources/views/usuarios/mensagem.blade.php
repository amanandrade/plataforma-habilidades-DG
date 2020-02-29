@extends('layouts.indexhome')

@section('titulo', 'Help')
@section('conteudo')

Olá <strong></strong>, Você tem  mensagens.

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="VerMensagem-tab" data-toggle="tab" href="#VerMensagem" role="tab" aria-controls="VerMensagem" aria-selected="true">VerMensagem</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="CriarMensagem-tab" data-toggle="tab" href="#CriarMensagem" role="tab" aria-controls="CriarMensagem" aria-selected="false">CriarMensagem</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="VerMensagem" role="tabpanel" aria-labelledby="VerMensagem-tab">...</div>
  <div class="tab-pane fade" id="CriarMensagem" role="tabpanel" aria-labelledby="CriarMensagem-tab">...</div>
</div>

@endsection