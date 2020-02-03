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
            <form>
                <div class="input-group my-2">
                    <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <div class="input-group-prepend">
                    <a class="btn btn-outline-secondary" type="submit" id="buttom-addon1" href="{{route('usuarios.habilidades.busca')}}">
                        <i class="fa fa-search"></i>
                    </a> <!--mudar depois para tag button-->
                    </div>
                </div>
              </form>

        </div>
    </header>

    <main>
        <div class="container">
            <!-- buttons de filtro principal -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-sm-12"><button type="submit" value="pessoas"
                        class="d-flex flex-column btn btn-success align-items-center mt-3 w-100"><i
                            class="material-icons d-flex flex-column">people</i>Pessoas</button></div>
                <div class="col-md-4 col-sm-12"><button type="submit" value="pessoas"
                        class="d-flex flex-column btn btn-danger align-items-center mt-3 w-100"><i
                            class="material-icons d-flex flex-column">extension</i>Habilidades</button></div>
                <div class="col-md-4 col-sm-12"><button type="submit" value="pessoas"
                        class="d-flex flex-column btn btn-info align-items-center mt-3 w-100"><i
                            class="material-icons d-flex flex-column">gamepad</i>Áreas DH</button></div>
            </div>

            <span class="row pt-3 m-2">
                <p>Você pode se interessar também por: </p>
            </span>
        </div>
        <div class="container">
            <div class="row">
                <div class="card-columns col-md-9">
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">CSS</p>
                        </div>
                    </div>
                    <div class="card text-center p-3 btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">Ciência de Dados</p>
                        </div>
                    </div>
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">React</p>
                        </div>
                    </div>
                    <div class="card text-center p-3 btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">Marketing Digital</p>
                        </div>
                    </div>
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">HTML</p>
                        </div>
                    </div>
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">Python</p>
                        </div>
                    </div>
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">PHP</p>
                        </div>
                    </div>
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">Bootstrap</p>
                        </div>
                    </div>
                    <div class="card text-center p-3 btn-outline-info">
                        <div class="card-body px-3 py-md-2 py-sm-0">
                            <p class="card-text">Comunicação em Mídias Sociais</p>
                        </div>
                    </div>
                </div>

                <!-- cards de propaganda -->
                <div class="col-md-3">
                    <aside class="card d-flex card border-0 justify-content-top">
                        <div class="card">
                            <img src="./img/freelancer.webp" class="card-img-top "
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Job na área </h5>
                                <p class="card-text">
                                    <b>João Freitas</b> precisa de alguém com habilidades na área de Front-end!
                                    Percebemos
                                    que
                                    você
                                    indicou essa mesma tag :) Que tal entrar nessa?</p>
                                <a href="#" class="btn btn-primary stretched-link">Participe!</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
@endsection