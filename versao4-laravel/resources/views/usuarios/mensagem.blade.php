@extends('layouts.indexhome', ['current' => 'mensagens'])

@section('titulo', 'Help')
@section('conteudo')

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="VerMensagem-tab" data-toggle="tab" href="#VerMensagem" role="tab" aria-controls="VerMensagem" aria-selected="true">Ver Mensagens</a>
  </li>
</ul>
@foreach ($mensagens as $mensagem)
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="VerMensagem" role="tabpanel" aria-labelledby="VerMensagem-tab">{{$user->mensagensRecebidas()}}</div>
</div>
@endforeach

@endsection