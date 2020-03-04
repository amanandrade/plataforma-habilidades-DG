@extends('layouts.indexhome', ['current' => 'pessoas'])

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
                                                    <button type="button" class="btn btn-light text-primary py-1 px-4 w-100 mt-2" data-toggle="modal" data-target="#perfil{{$usuario['id']}}" >
                                                        Ver perfil
                                                    </button>
                                                    <!-- <a href="#" class="btn btn-info py-1 px-4">Chat</a> -->
                                                </div>

                                            </div>
                                        </div>
                                   
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Modal -->
            @foreach ($usuarios as $usuario)
                @if($usuario['nome'] != Auth::User()->nome)
                        <!-- {{$habilidades = $usuario->habilidades()->where('habilidades', 'LIKE',"%{$tag_busca}%")->get()}} -->
                    
                        <div class="modal fade" id="perfil{{$usuario['id']}}" tabindex="-1" role="dialog" aria-labelledby="perfilTitle" aria-hidden="true">
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
                                                {{-- <img id="perfil" src="./img/foto.png" alt="" class="rounded-circle  mt-4"> --}}
                                                <img class="card-img-top rounded-circle w-25 m-2" src="{{asset($usuario['foto'])}}"alt="">
                                                <h4 id="nome" class="text-center text">{{$usuario['nome']}}</h4>
                                                <span id="nome" class="text-center w-100">Curso: {{$usuario->curso->nome_curso}} - {{$usuario->statu->nome_status}}</span>
                                                <span id="email" class="mb-2 text">{{$usuario['email']}}</span>
                                            </div>

                                            <div class="toast-header mt-3">
                                                <span>Habilidades e conhecimentos:</span>
                                            </div>

                                            <div class="container">
                                                @foreach ($habilidades as $key => $value)
                                                    <div class="toast-header">

                                                        @php 
                                                            $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
                                                            $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
                                                        @endphp

                                                        <i class="material-icons" style="color:{{$color}};">label</i>
                                                        <span class="mr-auto">{{$value['habilidades']}}</span>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                <a class="card-link btn btn-info py-1 px-4 w-100" style="color:#FFFF;" data-toggle="collapse" href="#codigo{{$usuario->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">Mensagem</a>
                            </div>


                            <!-- MENSAGEM -->
                            <div class="collapse mt-1 post-feed" id="codigo{{$usuario->id}}">
                                <div class="card card-body">
                                <form method="post" action="{{route('usuarios.habilidades.mensagem')}}" enctype="multipart/form-data">
                                 @csrf
                                 @method('POST')
                                <div class="row">
                                    <div class="col-sm-8">
                                    <input type="hidden" name = "remetente_user_id" value = "{{Auth::User()->id}}">
                                    <input type="hidden" name = "destino_user_id" value = "{{$usuario->id}}">

                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 py-0 ml-3"
                                     id="assunto" name="assunto" placeholder="Assunto" required>

                                    <input type="textarea" class="form-control border-top-0 border-right-0 border-left-0 py-0 ml-3"
                                     id="mensagem" name="mensagem" placeholder="Escreve uma mensagem..." required>
                                    </div>
                                    </br>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2 mb-5">Enviar</button>
                                    </form>
                                </div>

                                

                                      <div class="row justify-content-between">
                                          <div class="col-sm-1">
                                          <img src="" alt="" class="rounded-circle mr-3 mb-2" style="width:40px;">
                                          </div>
                                          <div class="col-sm-7 mt-2 ml-2 px-0">
                                          </div>
                                          <div class="mt-2 px-0">
                                          </div>
                                      </div>
                                </div>
                            </div>
                            <!--  -->
                                </div>
                            </div>
                        </div>
                    
                @endif
            @endforeach

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
