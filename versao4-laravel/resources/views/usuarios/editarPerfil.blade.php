@extends('layouts.indexhome')

@section('titulo','Help')
@section('conteudo')
<div class="container">

<div class="row">
    {{-- <nav class="navbar navbar-expand-md navbar-light col-12">

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
                </nav> --}}
            </div>
            {{-- Adicionando Tags exemplo da pagina home --}}

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

    {{-- Modelo atual de lista de habilidades --}}
        <div class="toast-header">
            <strong class="mr-auto">Selecione aqui conhecimentos que queira compartilhar..</strong>
            <a href="./issues copy/icons/add-24px.svg"></a>
        </div>
        <div class="toast-header">
            <i class="material-icons" style="color:#4CAF50;">
                label
            </i>
            <span class="mr-auto">Bootstrap</span>
            <button type="button" class="ml-2 mb-1 close">
                <i class="material-icons">
                    edit
                </i>
            </button>
        </div>
        <div class="toast-body">
            Aprendi bootstrap há alguns meses na Digital e me sinto ninja para ensinar xD
        </div>
    </div>
    <div class="container">
        <div class="toast-header">
            <i class="material-icons" style="color:blue;">label
                </i>
                <span class="mr-auto">CSS</span>
                <button type="button" class="ml-2 mb-1 close">
                    <i class="material-icons">
                        edit
                    </i>
                </button>
        </div>
        <div class="toast-header">
            <i class="material-icons" style="color:#F44336;">label
                </i>
                <span class="mr-auto">Javascript</span>
                <button type="button" class="ml-2 mb-1 close">
                    <i class="material-icons">
                        edit
                    </i>
                </button>
        </div>
        <div class="toast-header">
            <i class="material-icons" style="color:#FFC107;">label
                </i>
                <span class="mr-auto">PHP</span>
                <button type="button" class="ml-2 mb-1 close">
                    <i class="material-icons">
                        edit
                    </i>
                </button>
        </div>
        <div class="toast-header">
            <i class="material-icons" style="color:#536DFE;">label
                </i>
                <span class="mr-auto">Orientação a objetos</span>
                <button type="button" class="ml-2 mb-1 close">
                    <i class="material-icons">
                        edit
                    </i>
                </button>
        </div>
    </div>

@endsection
