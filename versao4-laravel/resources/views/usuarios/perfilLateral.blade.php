@extends('layouts.indexhome')

@section('titulo','Help')
@section('conteudo')
<div class="container">

<!-- Navbar / Botao de menu -->
<div class="row">
    <nav class="navbar navbar-expand-md navbar-light col-12">

    <a class="navbar-item" href="#">
        <img src="{{asset('img/help_logo.jpg')}}" alt="logo" style="width: 57px" class="rounded">
    </a>
     
      <button class="border-0 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <div class="justify-content-end">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link align-items text-right" href="{{route('usuarios.home')}}">Home<span
                                            class="sr-only">(atual)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-items text-right" href="./cadastro.html">Meu
                                        Cadastro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-items text-right"
                                        href="{{route('usuarios.habilidades')}}">Habilidades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-items text-right"
                                        href="{{route('usuarios.perfil')}}">Meu Perfil</a>
                                </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu">
                                @if(Auth::guest())
                                <h4 class="text-center text-white" href="{{route('usuarios.login')}}"></h4>
                                @else
                                <a class="dropdown-item" href="{{route('usuarios.login.sair')}}">Sair</a>
                                @endif
                               
      
    </div>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
<div class="pt-3 row">
    <!-- Parte superior FOTO-NOME-DESCRICAO -->
    <div class="col-lg-12">

        <!-- Foto de Perfil -->
        <div class=" d-flex justify-content-center ">
        <img class="rounded-circle  border border-white d-flex" style="width: 150px" src="{{asset(Auth::User()->foto)}}">
        </div>

        <!-- Nome / Descricao -->
        <div class="d-flex flex-column ">
            <h3>{{Auth::User()->nome}}</h3>
            <p>Sou uma pessoa que adora descobrir coisas novas! Eu canto nas horas vagas e adoro cozinhar comida japonesa.</p>
            <a class="navbar-item d-flex mb-2" href="{{route('usuarios.perfil.create')}}">
                Editar habilidades<i class="material-icons ml-1" style="font-size: 20px;">edit</i>
            </a>
        </div>
    </div>


    <!-- Botoes de navegacao -->
    <div class="row">
        <div class="pt-3 col-lg-12 col-md-8 cold-sm-6 col-xs-3">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a style="color: rgb(136, 136, 136)" class="nav-item nav-link active" id="nav-notificacao-tab" data-toggle="tab" href="#nav-notificacao" role="tab" aria-controls="nav-notificacao"
                        aria-selected="true">Notificação</a>
                    <a style="color: rgb(136, 136, 136)" class="nav-item nav-link" id="nav-mensagens-tab" data-toggle="tab" href="#nav-mensagens" role="tab" aria-controls="nav-mensagens"
                        aria-selected="false">Mensagens</a>
                </div>
            </nav>

            <!-- Conteudo da navegacao  -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-notificacao" role="tabpanel" aria-labelledby="nav-notificacao-tab">
                        <!-- lista de notificacoes -->
                        <ul style="list-style-type: none;" class="list-group">
                            <!-- Lista com foto de perfil e messagem da notificacao -->
                            <li>
                                <div class="d-flex pt-4">
                                <img src="{{asset('img/homem1.JPG')}}" alt="" class="rounded-circle border border-white" style="width: 70px; height: 70px;">
                                    <div class="card border-silver rounded mb-3 rounded">
                                        <div class="card-body">
                                            <p class="card-text">Justem Dombaxe busca por ajuda em
                                                <mark>PHP</mark>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                <img src="{{asset('img/mulher3.JPG')}}" alt="" class="rounded-circle border border-white"style="width: 70px; height: 70px;">
                                    <div class="card border-silver rounded mb-3 rounded">
                                        <div class="card-body">
                                            <p class="card-text">Amanda Andrade busca por ajuda em
                                                <mark>Data Science</mark>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                <img src="{{asset('img/mulher2.JPG')}}" alt="" class="rounded-circle border border-white" style="width: 70px; height: 70px;">
                                    <div class="card border-silver rounded mb-3 rounded">
                                        <div class="card-body">
                                            <p class="card-text">Juliana oferece oportuidade em
                                                <mark>Mídias Digitais</mark>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                <img src="{{asset('img/mulher1.JPG')}}" alt="" class="rounded-circle border border-white" style="width: 70px; height: 70px;">
                                    <div class="card border-silver rounded mb-3 rounded">
                                        <div class="card-body">
                                            <p class="card-text">Beatriz Amorim busca por ajuda em
                                                <mark>CSS</mark>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                <img src="{{asset('img/homem2.JPG')}}" alt="" class="rounded-circle border border-white" style="width: 70px; height: 70px;">
                                    <div class="card border-silver rounded mb-3 rounded">
                                        <div class="card-body">
                                            <p class="card-text">Felgueiras busca por ajuda em
                                                <mark>JAVA</mark>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-mensagens" role="tabpanel" aria-labelledby="nav-mensagens-tab">
                        <!-- lista de mensagens -->
                        <ul style="list-style-type: none;" class="list-group">
                            <!-- Lista com foto de perfil e notificao de mensagens -->
                            <li>
                                <div class="d-flex pt-4">
                                <img src="./img/homem1.JPG" alt="" class="rounded-circle border border-white" style="width: 70px; height: 70px;">
                                    <div class="card border-silver rounded mb-3 rounded">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <mark>Justem Dombaxe:</mark> Olá, Vi sua postagem! Gostaria de ajudar =)
                                                Quer conversar sobre?
                                            </p>
                                            <button type="submit" value="" class="p-1 m-1 btn btn-success">Aceitar</button>
                                            <button type="submit" value="" class="p-1 m-1 btn btn-danger">Rejeitar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                <img src="./img/homem2.JPG" alt="" class="rounded-circle border border-white" style="width: 70px; height: 70px;">
                                    <div class="card border-silver rounded mb-3 rounded">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <mark>Felgueiras:</mark> Olá, Vi sua postagem! Gostaria de ajudar =) Quer
                                                conversar sobre?
                                            </p>
                                            <button type="submit" value="" class="p-1 m-1 btn btn-success">Aceitar</button>
                                            <button type="submit" value="" class="p-1 m-1 btn btn-danger">Rejeitar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                <img src="./img/mulher3.JPG" alt="" class="rounded-circle border border-white" style="width: 70px; height: 70px;">
                                    <div class="card border-silver rounded mb-3 rounded">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <mark>Amanda Andrade:</mark> Olá, quer conversar sobre Bootstrap.</p>
                                            <button type="submit" value="" class="p-1 m-1 btn btn-success">Aceitar</button>
                                            <button type="submit" value="" class="p-1 m-1 btn btn-danger">Rejeitar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                <img src="./img/mulher1.JPG" alt="" class="rounded-circle border border-white" style="width: 70px; height: 70px;">
                                    <div class="card border-silver rounded mb-3 rounded">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <mark>Beatriz Amorim:</mark> Olá, Vi sua postagem! Gostaria de ajudar =)
                                                Quer conversar sobre?
                                            </p>
                                            <button type="submit" value="" class="p-1 m-1 btn btn-success">Aceitar</button>
                                            <button type="submit" value="" class="p-1 m-1 btn btn-danger">Rejeitar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                <img src="./img/mulher2.JPG" alt="" class="rounded-circle border border-white" style="width: 70px; height: 70px;">
                                    <div class="card border-silver rounded mb-3 rounded">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <mark>Juliana:</mark> Olá, gostaria de tirar algumas dúvidas sobre PHP.</p>
                                            <button type="submit" value="" class="p-1 m-1 btn btn-success">Aceitar</button>
                                            <button type="submit" value="" class="p-1 m-1 btn btn-danger">Rejeitar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection