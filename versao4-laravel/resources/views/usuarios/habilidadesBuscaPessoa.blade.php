@extends('layouts.indexhome')

@section('titulo','Help')
@section('conteudo')

    <main class="container">

            <!-- buttons de filtro principal -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-sm-12">
                    <button type="submit" value="pessoas" class="d-flex flex-column btn btn-success align-items-center mt-3 w-100">
                        <i class="material-icons d-flex flex-column">people</i>
                        Pessoas
                    </button>
                </div>

                <div class="col-md-4 col-sm-12">
                    <a href="{{route('usuarios.habilidades')}}" class="d-flex flex-column btn btn-danger align-items-center mt-3 w-100">
                        <i class="material-icons d-flex flex-column">extension</i>
                        Habilidades
                    </a>
                </div>

                <div class="col-md-4 col-sm-12">
                    <button type="submit" value="pessoas" class="d-flex flex-column btn btn-info align-items-center mt-3 w-100">
                        <i class="material-icons d-flex flex-column">gamepad</i>
                        Áreas DH
                    </button>
                </div>
            </div>

             <!-- busca -->
             <form method="POST" action="{{route('usuarios.habilidades.buscapessoaconcreta')}}">
                 @csrf
                 <div class="d-flex justify-content-end">
                    <div class="input-group col-md-4 col-sm-12 my-4 pr-0">
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Pesquisar" aria-label="Example text with button addon" aria-describedby="button-addon1" required>
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button> <!--mudar depois para tag button-->
                        </div>
                    </div>
                </div>
            </form>



        <div class="row">
            <!-- cards de resultado da busca -->
            <div class="d-flex col-md-8 justify-content-center">
                <div class="container p-0">

                    <div class="row mx-1 d-flex justify-content-md-between justify-content-center">
                        @foreach ($usuarios as $usuario)
                            @if($usuario['nome'] != Auth::User()->nome)
                                        <!-- {{$habilidades = $usuario->habilidades()->where('habilidades', 'LIKE',"%{$tag_busca}%")->get()}} -->
                                    @if(count($habilidades) > 0)
                                        <div class="card mb-3" style="width: 22rem;">
                                            <div class="card-body">
                                                <div class="row align-items-center mx-auto">
                                                    <img class="card-img-top rounded-circle w-25" src="{{asset($usuario['foto'])}}"
                                                        alt="">
                                                    <h5 class="card-title my-0 ml-2"> {{$usuario['nome']}}</h5>
                                                </div>

                                                <!-- <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>

                                                @foreach ($habilidades as $key => $value)
                                                    <p class="card-text">{{$value['habilidades']}}</p>
                                                @endforeach -->

                                                <div class="d-flex justify-content-between">
                                                    <!-- <a href="#" class="btn btn-light text-primary py-1 px-4">Perfil</a> -->
                                                    <button type="button" class="btn btn-light text-primary py-1 px-4 w-100 mt-2" data-toggle="modal" data-target="#perfil">
                                                        botao  perfil
                                                    </button>
                                                    <!-- <a href="#" class="btn btn-info py-1 px-4">Chat</a> -->
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="perfil" tabindex="-1" role="dialog" aria-labelledby="perfilTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="perfilTitle"><b>Perfil</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            <div class="d-flex justify-content-center align-items-center flex-column flex-wrap ">


                            <img id="perfil" src="./img/foto.png" alt="" class="rounded-circle  mt-4">
                            <h4 id="nome" class="text-center text">Beatriz Matos</h4>
                            <h5 id="email" class="mb-4 text">bia@bia.com</h5>

                        </div>


                            <div class="toast-header">
                                <strong class="mr-auto">Selecione aqui conhecimentos que queira compartilhar..</strong>
                                <a href="./issues copy/icons/add-24px.svg"></a>
                            </div>
                            <div class="toast-header">
                                <i class="material-icons" style="color:#4CAF50;">
                                  label
                                </i>
                                <span class="mr-auto">Bootstrap</span>
                                {{-- <button type="button" class="ml-2 mb-1 close"> --}}
                                    {{-- <i class="material-icons">
                                        edit
                                    </i>
                                </button> --}}
                            </div>
                            {{-- <div class="toast-body">
                                Aprendi bootstrap há alguns meses na Digital e me sinto ninja para ensinar xD
                            </div> --}}
                            </div>
                            <div class="container">
                            <div class="toast-header">
                                <i class="material-icons" style="color:blue;">label
                                    </i>
                                    <span class="mr-auto">CSS</span>
                                    {{-- <button type="button" class="ml-2 mb-1 close">
                                        <i class="material-icons">
                                            edit
                                        </i>
                                    </button> --}}
                            </div>
                            <div class="toast-header">
                                <i class="material-icons" style="color:#F44336;">label
                                    </i>
                                    <span class="mr-auto">Javascript</span>
                                    {{-- <button type="button" class="ml-2 mb-1 close">
                                        <i class="material-icons">
                                            edit
                                        </i>
                                    </button> --}}
                            </div>
                            <div class="toast-header">
                                <i class="material-icons" style="color:#FFC107;">label
                                    </i>
                                    <span class="mr-auto">PHP</span>
                                    {{-- <button type="button" class="ml-2 mb-1 close">
                                        <i class="material-icons">
                                            edit
                                        </i>
                                    </button> --}}
                            </div>
                            <div class="toast-header">
                                <i class="material-icons" style="color:#536DFE;">label
                                    </i>
                                    <span class="mr-auto">Orientação a objetos</span>
                                    {{-- <button type="button" class="ml-2 mb-1 close">
                                        <i class="material-icons">
                                            edit
                                        </i>
                                    </button> --}}
                            </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-info py-1 px-4 w-100">Chat</a>
                    </div>
                    </div>
                </div>
            </div>
            <!--  -->

            <!-- aside cards de propaganda -->
            <aside class="card d-flex card border-0 col-md-4 justify-content-top">
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
