@extends('layouts.indexhome', ['current' => 'mensagens'])

@section('titulo', 'Help')
@section('conteudo')

@foreach ($mensagens as $mensagem)

<strong>De: {{$mensagem['remetente_user_id']}}</strong>
<br/>
<strong>Hora: {{$mensagem['hora']}}</strong> 
<br />
<strong>Assunto: {{$mensagem['assunto']}}</strong>
<br />
<strong>Mensagem: {{$mensagem['texto']}}</strong>

<br />

  
@endforeach

@endsection