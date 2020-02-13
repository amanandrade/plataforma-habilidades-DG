@extends('layouts.indexhome')

@section('titulo','Help')
@section('conteudo')

    <main class="container">
        
            <!-- buttons de filtro principal -->
            <div class="row d-flex justify-content-center">

                <div class="col-md-4 col-sm-12">
                    <a href="{{route('usuarios.habilidades.buscapessoa')}}" class="d-flex flex-column btn btn-success align-items-center mt-3 w-100">
                        <i class="material-icons d-flex flex-column">extension</i>
                        Pessoa
                    </a>
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

            <span class="row pt-3 m-2"></span>
        

        <div class="row">
            <!-- cards de resultado da busca -->
            
            <div class="col-md-8 col-sm-12">
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
                                            
                                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>

                                                @foreach ($habilidades as $key => $value) 
                                                    <p class="card-text">{{$value['habilidades']}}</p>
                                                @endforeach

                                                <div class="d-flex justify-content-between">
                                                    <!-- <a href="#" class="btn btn-light text-primary py-1 px-4">Perfil</a> -->
                                                    <button type="button" class="btn btn-light text-primary py-1 px-4" data-toggle="modal" data-target="#perfil">
                                                        Perfil
                                                    </button>
                                                    <a href="#" class="btn btn-info py-1 px-4">Chat</a>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

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

            <!-- Modal -->
            <div class="modal fade" id="perfil" tabindex="-1" role="dialog" aria-labelledby="perfilTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="perfilTitle"><b>Formularo de Perfil</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                        ...
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </main>
@endsection