<!DOCTYPE html>
<html lang="pt-br">

<div class="container">
    <header class="container-fluid d-flex sticky-top justify-content-center bg-white px-0">
        <div class="container">
            <!-- navbar -->
            <div class="row">
                <nav class="navbar navbar-expand-md navbar-light col-12 px-md-0 mt-1">
                    <a class="navbar-item" href="{{route('usuarios.home')}}">
                        <img src="../img/help_logo.jpg" alt="logo" style="width: 57px" class="rounded">
                    </a>
                    <!-- busca desktop -->
                    <form action="{{route('usuarios.habilidades.busca')}}" class="ml-2 d-none d-sm-block d-md-none d-md-block d-lg-none d-lg-block d-xl-none d-xl-block">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="habilidade_pesquisada" class="form-control" style="width: 300px" placeholder="Pesquisar"
                                aria-label="Example text with button addon" aria-describedby="button-addon1" required>
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="submit" id="buttom-addon1"
                                href="{{route('usuarios.habilidades.busca')}}">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <button class="border-0 navbar-toggler p-0" type="button" data-toggle="collapse"
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
                                    <a class="nav-link align-items text-right" href="./mensagens">Mensagens</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-items text-right"
                                        href="{{route('usuarios.habilidades')}}">Habilidades</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link align-items text-right"
                                        href="{{route('usuarios.perfil')}}">Meu Perfil</a>
                                </li> --}}
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown show">
                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{route('usuarios.editarCadastro')}}">Editar Cadastro</a>

                                        @if(Auth::guest())
                                        <h4 class="text-center text-white" href="{{route('usuarios.login')}}"></h4>
                                        @else
                                        <a class="dropdown-item" href="{{route('usuarios.login.sair')}}">Sair</a>
                                        @endif
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="d-none d-sm-block d-md-none d-block d-sm-none">
                <!-- busca mobile -->
                <form method="POST" action="{{route('usuarios.habilidades.busca')}}" class="ml-2 d-none d-sm-block d-md-none d-md-block d-lg-none d-lg-block d-xl-none d-xl-block">
                        @csrf
                    <div class="input-group my-2">
                        <input type="text" name="habilidade_pesquisada" class="form-control" placeholder="Pesquisar"
                            aria-label="Example text with button addon" aria-describedby="button-addon1" required>
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="submit" id="buttom-addon1">
                                <i class="fa fa-search"></i>
                            </button>
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
</div>
