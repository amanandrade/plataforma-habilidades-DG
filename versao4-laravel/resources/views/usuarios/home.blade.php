@extends('layouts.indexhome')

@section('titulo', 'Help')
@section('conteudo')

    <!-- home mobile -->
    <main class="container d-none d-sm-block d-md-none d-block d-sm-none">
        <div class="row tab-content justify-content-center mx-1" id="nav-tabContent">

            <!-- FEED -->
            <div class="tab-pane fade show active" id="nav-feed" role="tabpanel" aria-labelledby="nav-feed-tab">


                <!-- INPUT PARA POSTAGENS -->

                <form method="POST"  action="{{route('usuarios.home.mensagens_emissor')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend mt-3">
                        @if(empty(Auth::User()->estado))
                        <span class="input-group-text"><img src="{{asset('img/photos.png')}}" alt="" class="rounded-circle"
                                    style="width:50px;"></span>
                        @elseif(Auth::User()->estado == 1)
                            <span class="input-group-text"><img src="{{asset(Auth::User()->foto)}}" alt="" class="rounded-circle"
                                    style="width:50px;"></span>
                        @endif
                        </div>

                        <textarea class="form-control py-3 mt-3" name="mensagem" aria-label="With textarea"
                            placeholder="O que você está pensando, {{Auth::User()->nome}}?" required></textarea>
                    </div>

                    <input type="hidden" name="usuario_id" value="{{Auth::User()->id}}">
                    <input type="hidden" name="estado" value="1">

                    <div class="text-right mt-1">
                        <button type="submit" class="btn btn-primary btn-sm">Publicar</button>
                    </div>
                </form>

                <!-- FEED -->

                    <div class="mt-1">
                        @foreach ($publicacao as $publicar)
                            <div class="card mt-3 justify-content-center">
                                <div class="card-body p-2">
                                    <div class="d-flex flex-nowrap align-items-center p-1">
                                    <!-- ajuastar foto quando o usuário não coloca foto -->
                                    <img src="{{$publicar->user->foto}}" alt="" class="rounded-circle mr-3" style="width:50px;">
                                        <h5 class="card-tittle">{{$publicar->user->nome}}</h5>
                                    </div>
                                    <div class="p-1">
                                        <p class="card-text">{{$publicar->mensagem}}</p>
                                    </div>
                                    <div class="mr-2 ml-2 d-flex justify-content-between">
                                        <p class="card-text">
                                        <a class="text-muted" title="Ver"> 1 comentário</a>
                                        </p>
                                        <a class="card-link" style="color:#536DFE;" data-toggle="collapse" href="#codigo{{$publicar->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">Comentar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse mt-1" id="codigo{{$publicar->id}}">
                                <div class="card card-body">
                                <form method="post" action="{{route('usuarios.home.mensagens_receptor')}}" enctype="multipart/form-data">
                                 @csrf
                                <div class="row">
                                    <div class="col-sm-1">
                                    @if(empty(Auth::User()->estado))
                                    <img src="{{asset('img/photos.png')}}" alt="" class="rounded-circle" style="width:40px;">
                                    @elseif(Auth::User()->estado == 1)
                                    <img src="{{asset(Auth::User()->foto)}}" alt="" class="rounded-circle"
                                            style="width:40px;">
                                    @endif
                                    </div>

                                    <div class="col-sm-8">
                                    <input type="text" class="form-control linha_input border-top-0 border-right-0 border-left-0 py-0 ml-3"
                                     id="teste" name="mensagem" placeholder="Escreve um comentário..." required>

                                    </div>
                                    <input type="hidden" name="usuario_id" value="{{Auth::User()->id}}">
                                    <input type="hidden" name="emissor_id" value="{{$publicar->id}}">
                                    <div class="col-sm-2 text-right">
                                    <button type="submit" class="btn btn-primary btn-sm mt-2 mb-5">Comentar</button>
                                    </div>
                                    </form>
                                </div>

                                   @foreach($comentarios as $comentar)
                                      @if($publicar->id == $comentar->emissor_id)

                                      <div class="row justify-content-between">
                                        <div class="row d-flex flex-nowrap ml-3">
                                            <div class="col-sm-4 px-0">
                                            <img src="{{$comentar->user->foto}}" alt="" class="rounded-circle mb-2" style="width:40px;">
                                            </div>
                                            <div class="col-sm-6 mt-2 ml-2 px-0">
                                            <h6 class="card-title text-dark">{{$comentar->user->nome}}</h6>
                                            </div>
                                        </div>

                                            <div class="col-sm-4 px-0 text-right">
                                            <span class="text-muted">{{$comentar->updated_at}}</span>
                                            </div>
                                            <div class="col-sm-4 ml-3 mb-4 text-secondary text-align-right">{{$comentar->mensagem}} </div>

                                      </div>

                                      @endif
                                   @endforeach

                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-center p-2">
                            {{ $publicacao->links() }}
                        </div>
                        <!-- <button type="button" class="mt-3 btn btn-outline-secondary btn-lg btn-block d-flex align-items-center justify-content-center"><i class="material-icons align-itens-center text-center-center">more_horiz</i></button> -->
                    </div>


            </div>
              <!-- END FEED -->
            <!-- NOTIFICAÇÕES -->
            <div class="tab-pane fade" id="nav-notificacao" role="tabpanel" aria-labelledby="nav-notificacao-tab">
                <div id="notificacoes" class="flex-nowrap justify-content-rigth align-items-start mt-3">
                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center mb-3">
                            <img src="./img/mulher3.JPG" alt="" class="rounded-circle mr-3"
                                style="width:50px; height: 50px;">
                            <span><b>Beatriz Amorim</b> busca por ajuda em <mark>CSS</mark>.</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-3">
                            <img src="./img/homem3.JPG" alt="" class="rounded-circle mr-3"
                                style="width:50px; height: 50px;">
                            <span><b>Justem Dumbaxe</b> busca por ajuda em <mark>Javascript</mark>.</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-3">
                            <img src="./img/homem2.JPG" alt="" class="rounded-circle mr-3"
                                style="width:50px; height: 50px;">
                            <span><b>Felgueiras</b> busca por ajuda em <mark>HTML</mark>.</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-3">
                            <img src="./img/mulher1.JPG" alt="" class="rounded-circle mr-3"
                                style="width:50px; height: 50px;">
                            <span><b>Clara</b> busca por ajuda em <mark>Wordpress</mark>.</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center mb-3">
                            <img src="./img/mulher2.JPG" alt="" class="rounded-circle mr-3"
                                style="width:50px; height: 50px;">
                            <span><b>Duda</b> busca por ajuda em <mark>Mídias Sociais</mark>.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- EVENTOS -->
            <div class="tab-pane fade" id="nav-eventos" role="tabpanel" aria-labelledby="nav-eventos-tab">
                <div id="agenda" class="col mx-md-4 flex-nowrap mt-3">
                    <div class="card">
                        <img src="./img/pagodigital.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Adicione na agenda:</h5>
                            <p class="card-text"> Nesse encontro, professores apresentam os cursos oferecidos na DH e as
                                oportinidades de trabalho de acordo com cada um deles. Tire suas dúvidas com as pessoas
                                certas!!</p>
                            <a href="#" class="btn btn-primary stretched-link">Inscreva-se!</a>
                        </div>
                    </div>
                </div>
                <div id="agenda" class="col mx-md-4 flex-nowrap mt-3">
                    <div class="card">
                        <img src="./img/pagodigital.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Adicione na agenda:</h5>
                            <p class="card-text"> Nesse encontro, professores apresentam os cursos oferecidos na DH e as
                                oportinidades de trabalho de acordo com cada um deles. Tire suas dúvidas com as pessoas
                                certas!!</p>
                            <a href="#" class="btn btn-primary stretched-link">Inscreva-se!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- home desktop -->
    <main class="container d-none d-sm-block d-md-none d-md-block d-lg-none d-lg-block d-xl-none d-xl-block">
        <div class="row">

            <!-- CARD PERFIL E NOTIFICAÇÃO -->
            <div class="align-items-center card border-0 col-3 bg-info">
                @if(empty(Auth::User()->estado))
                <img src="{{asset('img/photos.png')}}" alt="" class="rounded-circle w-50 mt-4">
                <a href="" data-toggle="modal" data-target="#modal" class="text-warning pb-2">Editar foto<i class="material-icons ml-1" style="font-size: 20px;" title="Editar foto">edit</i></a>
                @elseif(Auth::User()->estado == 1)

                <img src="{{asset(Auth::User()->foto)}}" alt="" class="rounded-circle w-50 mt-4" data-toggle="modal" data-target="#modal" id="foto-perfil">
                    <!-- <a href="#" class="hvr-icon-up">
                        Icon Up
                        <img src="myicon.svg" class="hvr-icon" />
                    </a>           -->
                @endif

                @if(Auth::guest())
                <h4 class="text-center text-white" href="{{route('usuarios.login')}}"></h4>
                @else
                <h4 class="text-center text-white">{{Auth::User()->nome}}</h4>
                <h5 class="mb-4 text-white">{{Auth::User()->email}}</h5>
                @endif
                <div class="card bg-light p-2 align-items-center">
                    <!-- aba para notificações e habilidades -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="notificacao-tab" data-toggle="tab" href="#notificacao"
                                role="tab" aria-controls="notificacao" aria-selected="true">Notificações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="habilidades-tab" data-toggle="tab" href="#habilidades" role="tab"
                                aria-controls="habilidades" aria-selected="false">Habilidades</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <!-- Lista com notificações -->
                        <div class="tab-pane fade show active" id="notificacao" role="tabpanel"
                            aria-labelledby="notificacao-tab">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <img src="./img/mulher3.JPG" alt="" class="rounded-circle mr-2 p-1"
                                        style="width:50px;">
                                    <span><b>Beatriz Amorim</b> busca por ajuda em <mark>CSS</mark>.</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <img src="./img/homem2.JPG" alt="" class="rounded-circle mr-2 p-1"
                                        style="width:50px;">
                                    <span><b>Justem Dumbaxe</b> busca por ajuda em <mark>Javascript</mark>.</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <img src="./img/homem1.JPG" alt="" class="rounded-circle mr-2 p-1"
                                        style="width:50px;">
                                    <span><b>Caio Cardoso</b> busca por ajuda em <mark>Javascript</mark>.</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                    <img src="./img/mulher2.JPG" alt="" class="rounded-circle mr-2 p-1"
                                        style="width:50px;">
                                    <span><b>Soraia Silva</b> busca por ajuda em <mark>Laravel</mark>.</span>
                                </li>
                            </ul>
                        </div>

                        <!-- lista com habilidades -->
                        <div class="tab-pane fade" id="habilidades" role="tabpanel" aria-labelledby="habilidades-tab">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                                    <strong>Compartilhe suas competências e habilidades!</strong></li>

                                <li class="list-group-item d-flex justify-content-between align-items-center py-2">

                                <form method="post" action="{{route('usuarios.home.addTags')}}" enctype="multipart/form-data">
                                @csrf
                                    <input type="hidden" name="usuario_id" value="{{Auth::User()->id}}">

                                    <select type="habilidade_id" name="habilidade_id">
                                            <option value="">Selecione</option>
                                        @foreach($habilidades as $hab)
                                            <option value="{{$hab['id']}}">{{$hab['habilidades']}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn-primary">Gravar</button>

                                    </form>

                                </li>
                                  @foreach($tags as $tag)
                                <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                                    {{$tag['habilidades']}}
                                    <i class="material-icons" style="color:#4CAF50;">label</i>
                                    @endforeach
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD'S INPUT E FEED -->
            <div class="col-6 bg-light">
                <!-- INPUT PARA POSTAGENS -->

                <form method="POST"  action="{{route('usuarios.home.mensagens_emissor')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                        @if(empty(Auth::User()->estado))
                        <span class="input-group-text"><img src="{{asset('img/photos.png')}}" alt="" class="rounded-circle"
                                    style="width:50px;"></span>
                        @elseif(Auth::User()->estado == 1)
                            <span class="input-group-text"><img src="{{asset(Auth::User()->foto)}}" alt="" class="rounded-circle"
                                    style="width:50px;"></span>
                        @endif
                        </div>

                        <textarea class="form-control py-3" name="mensagem" aria-label="With textarea"
                            placeholder="O que você está pensando, {{Auth::User()->nome}}?" required></textarea>
                    </div>

                    <input type="hidden" name="usuario_id" value="{{Auth::User()->id}}">
                    <input type="hidden" name="estado" value="1">

                    <div class="input-group mt-1 justify-content-between">
                        <input type="hidden" class="form-control" aria-label="Text input with dropdown button">
                        <div class="input-group-append align-items-center">
                            <span class="mr-1">Classificar por: </span>
                            <button class="btn btn-sm border-0 py-0 dropdown-toggle rounded" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Principais</a>
                                <a class="dropdown-item" href="#">Recentes</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Publicar</button>
                    </div>
                </form>

                <!-- FEED -->

                    <div class="mt-1">
                        @foreach ($publicacao as $publicar)
                            <div class="card mt-3 justify-content-center">
                                <div class="card-body p-2">
                                    <div class="d-flex flex-nowrap align-items-center p-1">
                                    <!-- ajuastar foto quando o usuário não coloca foto -->
                                    <img src="{{$publicar->user->foto}}" alt="" class="rounded-circle mr-3" style="width:50px;">
                                        <h5 class="card-tittle">{{$publicar->user->nome}}</h5>
                                    </div>
                                    <div class="p-1">
                                        <p class="card-text">{{$publicar->mensagem}}</p>
                                    </div>
                                    <div class="mr-2 ml-2 d-flex justify-content-between">
                                        <p class="card-text">
                                        @if(Auth::User()->id == $publicar->usuario_id)
                                        <form action="/home/mensagens_emissor/{{$publicar->id}}/delete" method = "post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary btn-sm">Excluir</button>
                                        </form>
                                        @endif
                                        </p>
                                        <a class="card-link" style="color:#536DFE;" data-toggle="collapse" href="#codigo{{$publicar->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">Comentar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse mt-1 post-feed" id="codigo{{$publicar->id}}">
                                <div class="card card-body">
                                <form method="post" action="{{route('usuarios.home.mensagens_receptor')}}" enctype="multipart/form-data">
                                 @csrf
                                <div class="row">
                                    <div class="col-sm-1">
                                    @if(empty(Auth::User()->estado))
                                    <img src="{{asset('img/photos.png')}}" alt="" class="rounded-circle" style="width:40px;">
                                    @elseif(Auth::User()->estado == 1)
                                    <img src="{{asset(Auth::User()->foto)}}" alt="" class="rounded-circle"
                                            style="width:40px;">
                                    @endif
                                    </div>

                                    <div class="col-sm-8">
                                    <input type="text" class="form-control linha_input border-top-0 border-right-0 border-left-0 py-0 ml-3"
                                     id="teste" name="mensagem" placeholder="Escreve um comentário..." required>

                                    </div>
                                    <input type="hidden" name="usuario_id" value="{{Auth::User()->id}}">
                                    <input type="hidden" name="emissor_id" value="{{$publicar->id}}">
                                    <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary btn-sm mt-2 mb-5">Comentar</button>
                                    </div>
                                    </form>
                                </div>

                                   @foreach($comentarios as $comentar)
                                      @if($publicar->id == $comentar->emissor_id)

                                      <div class="row justify-content-between">
                                          <div class="col-sm-1">
                                          <img src="{{$comentar->user->foto}}" alt="" class="rounded-circle mr-3 mb-2" style="width:40px;">
                                          </div>
                                          <div class="col-sm-6 mt-2 ml-2 px-0">
                                          <h6 class="card-tittle text-dark">{{$comentar->user->nome}}</h6>
                                          </div>
                                          <div class="col-sm-4 mt-2 px-0">
                                          <span class="ml-3 text-muted">{{$comentar->updated_at}}</span>
                                          </div>
                                          <div class="ml-3 mb-4 text-secondary">{{$comentar->mensagem}} </div>

                                        <!-- <a class="btn btn-warning btn-sm" href="/home/mensagens_receptor/{{$comentar->id}}/update">Editar</a> -->
                                        @if(Auth::User()->id == $comentar->usuario_id)
                                        <form action="/home/mensagens_receptor/{{$comentar->id}}/delete" method = "post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary btn-sm mt-2 mb-5">Excluir</button>
                                        </form>
                                        @endif
                                      </div>

                                      @endif
                                   @endforeach

                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-center p-2">
                            {{ $publicacao->links() }}
                        </div>
                        <!-- <button type="button" class="mt-3 btn btn-outline-secondary btn-lg btn-block d-flex align-items-center justify-content-center mais"><i class="material-icons align-itens-center text-center-center">more_horiz</i></button> -->
                    </div>

                <!-- END FEED -->

            </div>

            <!-- EVENTOS -->
            <div class="col-3 bg-light">
                <div id="agenda" class="flex-nowrap mb-3">
                    <div class="card">
                        <img src="./img/pagodigital.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Adicione na agenda:</h5>
                            <p class="card-text"> Nesse encontro, professores apresentam os cursos oferecidos na DH
                                e as
                                oportinidades de trabalho de acordo com cada um deles. Tire suas dúvidas com as
                                pessoas
                                certas!!</p>
                            <a href="#" class="btn btn-primary stretched-link">Inscreva-se!</a>
                        </div>
                    </div>
                </div>
                <div id="agenda" class="flex-nowrap mb-3">
                    <div class="card">
                        <img src="./img/pagodigital.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Adicione na agenda:</h5>
                            <p class="card-text"> Nesse encontro, professores apresentam os cursos oferecidos na DH
                                e as
                                oportinidades de trabalho de acordo com cada um deles. Tire suas dúvidas com as
                                pessoas
                                certas!!</p>
                            <a href="#" class="btn btn-primary stretched-link">Inscreva-se!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog">
     <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">

             <div class="modal-header">
             <h6 class="modal-title">Upload de Imagens</h6>

             <button type="button" class="close" data-dismiss="modal">
                 <span>&times;</span>
             </button>
             </div>

             <div class="modal-body">
             <form method="post" action="{{route('usuarios.home.update', $user->id)}}"  enctype="multipart/form-data">
             @csrf
                 <div class="form-group">
                     <input type="hidden" name="nome" class="form-control" placeholder="Login" value="{{$user->nome}}">
                 </div>

                 <div class="form-group">
                     <input type="file" name="foto" class="form-control" accept="image/png,image/jpeg">
                 </div>

                 <div class="form-group">
                     <input type="hidden" name="estado" class="form-control" value="1">
                 </div>

                 <button type="Submit" class="btn btn-primary">Gravar</button>
             </form>
             </div>
             <div class="modal-footer">
             <a href="#" data-toggle="modal" data-target="" data-dismiss="modal"></a>

             </div>
         </div>

     </div>

    </div>
@endsection
