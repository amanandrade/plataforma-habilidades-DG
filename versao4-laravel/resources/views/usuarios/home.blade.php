@extends('layouts.index')

@section('titulo', 'Help')
@section('conteudo')
    <!-- header - menu nav e busca -->
  
    <header class="container-fluid d-flex sticky-top justify-content-center bg-white px-0">
        <div class="container">
            <!-- navbar -->
            <div class="row">
                <nav class="navbar navbar-expand-md navbar-light col-12 px-md-0 mt-1">
                    <a class="navbar-item" href="#">
                        <img src="./img/help_logo.jpg" alt="logo" style="width: 57px" class="rounded">
                    </a>
                    <!-- busca desktop -->
                    <!--  -->
                    <form method="POST" action="{{route('usuarios.habilidades.busca')}}" class="ml-2 d-none d-sm-block d-md-none d-md-block d-lg-none d-lg-block d-xl-none d-xl-block">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="habilidade_pesquisada" class="form-control" style="width: 300px" placeholder="Pesquisar"
                                aria-label="Example text with button addon" aria-describedby="button-addon1" required>
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="submit" id="buttom-addon1">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--  -->

                    <button class="border-0 navbar-toggler p-0" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <div class="justify-content-end">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link align-items text-right" href="#">Home<span
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

            <div class="d-none d-sm-block d-md-none d-block d-sm-none">
                <!-- busca mobile -->
                <form>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" placeholder=""
                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-prepend">
                            <a class="btn btn-outline-secondary" type="submit" id="buttom-addon1"
                                href="./buscaResultado.html">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </form>

                <!-- nav mobile -->
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-feed-tab" data-toggle="tab" href="#nav-feed"
                            role="tab" aria-controls="nav-feed" aria-selected="true">Feed</a>
                        <a class="nav-item nav-link" id="nav-notificacao-tab" data-toggle="tab" href="#nav-notificacao"
                            role="tab" aria-controls="nav-notificacao" aria-selected="false">Notificações</a>
                        <a class="nav-item nav-link" id="nav-eventos-tab" data-toggle="tab" href="#nav-eventos"
                            role="tab" aria-controls="nav-eventos" aria-selected="false">Eventos</a>
                    </div>
                </nav>
            </div>

        </div>
    </header>

    <!-- home mobile -->
    <main class="container d-none d-sm-block d-md-none d-block d-sm-none">
        <div class="row tab-content justify-content-center mx-1" id="nav-tabContent">
            <!-- FEED -->
            <div class="tab-pane fade show active" id="nav-feed" role="tabpanel" aria-labelledby="nav-feed-tab">

                <div class="card mt-3" style="width: 100%; height: auto; background-color:#fafafa;">
                    <div class="card-body p-1 ">
                        <div class="d-flex flex-nowrap align-items-center p-1">
                            <img src="./img/mulher1.JPG" alt="" class="rounded-circle mr-3"
                                style="width:50px; height: 50px;  ;">
                            <h5 class="card-tittle">Rosana Alvara</h5>
                        </div>
                        <div class="p-1">
                            <p class="card-text">Gente, estou desesperada com PHP! Alguém pode me ajudar com esse
                                código? =/</p>
                        </div>
                        <div class="mr-2 ml-2 d-flex justify-content-between">
                            <p class="card-text"><small class="text-muted"> 2 comentários</small></p>
                            <a href="#" class="card-link" style="color:#536DFE;">Comentar</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-3" style="width: 100%; height: auto;background-color:#fafafa;">
                    <div class="card-body p-1 ">
                        <div class="d-flex flex-nowrap align-items-center p-1">
                            <img src="./img/mulher2.JPG" alt="" class="rounded-circle mr-3"
                                style="width:50px; height: 50px;">
                        </div>
                        <div class="p-1">
                            <p class="card-text">Comecei a planejar um evento na digital voltado para segurança de dados
                                e estou procurando palestrantes.. procuro por indicações :D</p>
                        </div>
                        <div class="mr-2 ml-2 d-flex justify-content-between">
                            <p class="card-text"><small class="text-muted"> 2 comentários</small></p>
                            <a href="#" class="card-link" style="color:#536DFE;">Comentar</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-3" style="width: 100%; height: auto;background-color:#fafafa;">
                    <div class="card-body p-1 ">
                        <div class="d-flex flex-nowrap align-items-center p-1">
                            <img src="./img/homem2.JPG" alt="" class="rounded-circle mr-3"
                                style="width:50px; height: 50px;  ;">
                            <h5 class="card-tittle">Josias Ricardo</h5>
                        </div>
                        <div class="p-1">
                            <p class="card-text">Estou iniciando um projeto relacionado a marketing digital e gostaria
                                de encontrar pessoas que queriam trabalhar com wordpress!</p>
                        </div>
                        <div class="mr-2 ml-2 d-flex justify-content-between">
                            <p class="card-text"><small class="text-muted"> 2 comentários</small></p>
                            <a href="#" class="card-link" style="color: #536DFE;">Comentar</a>
                        </div>
                    </div>
                </div>

            </div>

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
               <center> <a href="" data-toggle="modal" data-target="#modal" class="text-warning">
                <img src="{{asset('img/photos.png')}}" alt="" class="rounded-circle w-50 my-4">
                </a></center>
                @elseif(Auth::User()->estado == 1)

                <img src="{{asset(Auth::User()->foto)}}" alt="" class="rounded-circle w-50 my-4" data-toggle="modal" data-target="#modal">
               
               
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

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><img src="./img/homem3.JPG" alt="" class="rounded-circle"
                                style="width:50px;"></span>
                    </div>
                    <textarea class="form-control py-3" aria-label="With textarea"
                        placeholder="O que você está pensando, Guilherme?"></textarea>
                </div>

                <div class="input-group justify-content-end mt-1">
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
                </div>

                <!-- FEED -->
                <div class="mt-1">
                    <div class="card mt-3 justify-content-center">
                        <div class="card-body p-2">
                            <div class="d-flex flex-nowrap align-items-center p-1">
                                <img src="./img/mulher3.JPG" alt="" class="rounded-circle mr-3" style="width:50px;">
                                <h5 class="card-tittle">Rosana Alvara</h5>
                            </div>
                            <div class="p-1">
                                <p class="card-text">Gente, estou desesperada com PHP ! Alguém pode me ajudar com
                                    esse
                                    código? =/</p>
                            </div>
                            <div class="mr-2 ml-2 d-flex justify-content-between">
                                <p class="card-text">
                                    <small class="text-muted"> 1 comentário</small>
                                </p>
                                <a href="#" class="card-link" style="color:#536DFE;">Comentar</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-0 ml-5 border-top-0 justify-content-center">
                        <div class="card-body">
                            <div class="d-flex flex-nowrap align-items-center p-1">
                                <img src="./img/homem2.JPG" alt="" class="rounded-circle mr-3" style="width:40px;">
                                <h5 class="card-tittle">Rubens Gustavo</h5>
                            </div>
                            <div class="p-1">
                                <p class="card-text">Eu posso de ajudar =)</p>
                            </div>
                            <div class="ml-2 d-flex justify-content-between">
                                <p class="card-text">
                                    <small class="text-muted"></small>
                                </p>
                                <a href="#" class="card-link" style="color:#536DFE;">Comentar</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 justify-content-center">
                        <div class="card-body p-2">
                            <div class="d-flex flex-nowrap align-items-center p-1">
                                <img src="./img/mulher2.JPG" alt="" class="rounded-circle mr-3" style="width:50px;">
                                <h5 class="card-tittle">Maria da Graça</h5>
                            </div>
                            <div class="p-1">
                                <p class="card-text">Comecei a planejar um evento na digital voltado para segurança
                                    de
                                    dados e estou procurando palestrantes.. procuro por indicações :D</p>
                            </div>
                            <div class="mr-2 ml-2 d-flex justify-content-between">
                                <p class="card-text">
                                    <small class="text-muted"> 2 comentários</small>
                                </p>
                                <a href="#" class="card-link" style="color:#536DFE;">Comentar</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 justify-content-center">
                        <div class="card-body p-2">
                            <div class="d-flex flex-nowrap align-items-center p-1">
                                <img src="./img/homem2.JPG" alt="" class="rounded-circle mr-3" style="width:50px;">
                                <h5 class="card-tittle">Josias Ricardo</h5>
                            </div>
                            <div class="p-1">
                                <p class="card-text">Estou iniciando um projeto relacionado a marketing digital e
                                    gostaria de encontrar pessoas que queriam trabalhar com wordpress!</p>
                            </div>
                            <div class="mr-2 ml-2 d-flex justify-content-between">
                                <p class="card-text">
                                    <small class="text-muted"> 2 comentários</small>
                                </p>
                                <a href="#" class="card-link" style="color: #536DFE;">Comentar</a>
                            </div>
                        </div>
                    </div>
                </div>
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