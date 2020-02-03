@extends('layouts.indexhome')

@section('titulo','Help')
@section('conteudo')
<header class="container-fluid d-flex sticky-top justify-content-center bg-white px-0">
        <div class="container">
            <!-- navbar -->
            <div class="row">
                <nav class="navbar navbar-expand-md navbar-light col-12">
                   
                    <button class="border-0 navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
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
            <!-- busca -->
            <div class="row d-flex justify-content-center">
                <div class="col-12 py-2 text-center">
                    <form>
                        <div class="input-group my-2">
                            <input type="text" class="form-control" placeholder="Pesquisar"
                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-prepend">
                                <a class="btn btn-outline-secondary" type="submit" id="buttom-addon1"
                                    href="./buscaResultado.html">
                                    <i class="fa fa-search"></i>
                                </a>
                                <!--mudar depois para tag button-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <span class="pt-3 my-2 col-12">
                <p>Resultado da busca: </p>
            </span>
        </div>
    </div>
    <main class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- epaço lateral para colocar filtros -->
            </div> 
            <!-- cards de resultado da busca -->
            <div class="d-flex col-md-6 justify-content-center">
                <div class="container p-0">
                    <div class="row mx-1 d-flex justify-content-md-between justify-content-center">
                        <div class="card mb-3" style="width: 40rem; height: 13rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="{{asset('img/mulher1.JPG')}}"
                                        alt="Foto Maria da Graça">
                                    <h5 class="card-title my-0 ml-2">Maria da Graça</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text">PHP, Laravel, <mark>CSS</mark></p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-light text-primary py-1 px-4">Perfil</a>
                                    <a href="#" class="btn btn-info py-1 px-4">Chat</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="{{asset('img/homem1.JPG')}}"
                                        alt="Foto Josias Ricardo">
                                    <h5 class="card-title my-0 ml-2">Josias Ricardo</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text"><mark>CSS</mark>, Marketing Digital, Design</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-light text-primary py-1 px-4">Perfil</a>
                                    <a href="#" class="btn btn-info py-1 px-4">Chat</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="{{asset('img/homem2.JPG')}}"
                                        alt="Foto Samuel Francisco">
                                    <h5 class="card-title my-0 ml-2">Samuel Francisco</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text">PHP, <mark>CSS</mark>, Data Analytics</p>
                                <div class="d-flex justify-content-between">
                                    <button href="#" class="btn btn-light text-primary py-1 px-4">Perfil</button>
                                    <button href="#" class="btn btn-info py-1 px-4">Chat</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="{{asset('img/mulher2.JPG')}}"
                                        alt="Foto Susana Alencar">
                                    <h5 class="card-title my-0 ml-2">Susana Alencar</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text">PHP, Laravel, <mark>CSS</mark></p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-light text-primary py-1 px-4">Perfil</a>
                                    <a href="#" class="btn btn-info py-1 px-4">Chat</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="{{asset('img/mulher3.JPG')}}"
                                        alt="Foto Marina Ribeiro">
                                    <h5 class="card-title my-0 ml-2">Marina Ribeiro</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text"><mark>CSS</mark>, Marketing Digital, Design</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-light text-primary py-1 px-4">Perfil</a>
                                    <a href="#" class="btn btn-info py-1 px-4">Chat</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="{{asset('img/homem3.JPG')}}"
                                        alt="Foto Hugo Leal">
                                    <h5 class="card-title my-0 ml-2">Hugo Leonardo</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text">PHP, <mark>CSS</mark>, Data Analytics</p>
                                <div class="d-flex justify-content-between">
                                    <button href="#" class="btn btn-light text-primary py-1 px-4">Perfil</button>
                                    <button href="#" class="btn btn-info py-1 px-4">Chat</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- aside cards de propaganda -->
            <aside class="card d-flex card border-0 col-md-3 justify-content-top">
                <div class="card">
                    <img src="{{asset('img/freelancer.webp')}}" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Job na área </h5>
                        <p class="card-text">
                            <b>João Freitas</b> precisa de alguém com habilidades na área de Front-end! Percebemos que
                            você
                            indicou essa mesma tag :) Que tal entrar nessa?</p>
                        <a href="#" class="btn btn-primary stretched-link">Participe!</a>
                    </div>
                </div>
                <div class="card mt-4">
                    <img src="{{asset('img/pagodigital.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Adicione na agenda!</h5>
                        <p class="card-text"> Nesse encontro, professores apresentam os cursos oferecidos na DH e as
                            oportinidades de trabalho
                            de acordo com cada um deles. Tire suas dúvidas com as pessoas certas!!</p>
                        <a href="#" class="btn btn-primary stretched-link">Inscreva-se!</a>
                    </div>
                </div>
            </aside>
        </div>
    </main>
@endsection