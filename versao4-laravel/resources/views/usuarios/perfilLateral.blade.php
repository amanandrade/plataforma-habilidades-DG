@extends('layouts.indexhome')

@section('titulo','Help')
@section('conteudo')
<div class="container">

    <div class="pt-3 row">
    <!-- Parte superior FOTO-NOME-DESCRICAO -->
    <div class="col-lg-12">

        <!-- Foto de Perfil -->
        <div class=" d-flex justify-content-center ">
        <img class="rounded-circle  border border-white d-flex" style="width: 150px" src="{{asset(Auth::User()->foto)}}">
        </div>

        <!-- Nome / Descricao -->
        {{-- <div class=" row justify-content-center"> --}}
            <div class="d-flex align-items-center flex-column ">
                <h3>{{Auth::User()->nome}}</h3>
                <p>Sou uma pessoa que adora descobrir coisas novas! Eu canto nas horas vagas e adoro cozinhar comida japonesa.</p>
                {{-- <a class="navbar-item d-flex mb-2" href="{{route('usuarios.perfil.create')}}">
                    Editar habilidades<i class="material-icons ml-1" style="font-size: 20px;">edit</i> --}}
                {{-- </a> --}}
                <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLongoExemplo">
    Abrir modal de demonstração
  </button>

  <!-- Modal -->
  <div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalLongoExemplo">Título do modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <!------------------------------------------------- container c_form ------------------------------------------------------>
<div class="container c_form">

    <form class="formulario" method="POST" action="{{route('usuarios.cadastro.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-3">
            <div class="col-md-6 col-sm-12 m-auto d-flex justify-content-center mb-3">
                <h4>Cadastro</h4>
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="col-md-6 col-sm-12 m-auto mb-3">

                <!---------------------------------------------------- Nome -------------------------------------------------->
                <div class="input-group grupo_icone_input mt-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-top-0 border-right-0 border-left-0 border-bottom-0"
                            id="inputGroupPrepend">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control linha_input border-top-0 border-right-0 border-left-0 @error('nome') is-invalid @enderror"
                        id="teste" name="nome" placeholder="Nome Sobrenome" value="{{old('nome')}}">
                        @error('nome')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>

                <!------------------------------------------------ E-mail -------------------------------------------------->
                <div class="input-group grupo_icone_input ">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-top-0 border-right-0 border-left-0 border-bottom-0"
                            id="inputGroupPrepend">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <input type="email" class="form-control linha_input border-top-0 border-right-0 border-left-0 @error('email') is-invalid @enderror"
                        id="teste" name="email" placeholder="E-mail" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>

                <!------------------------------------------------ Password -------------------------------------------------->
                <div class="input-group grupo_icone_input ">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-top-0 border-right-0 border-left-0 border-bottom-0"
                            id="inputGroupPrepend"></span>
                    </div>
                    <input type="password"
                        class="form-control linha_input border-top-0 border-right-0 border-left-0 @error('password') is-invalid @enderror" id="teste"
                         name="password" placeholder="Digite sua senha" value="{{old('password')}}">
                         @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>

                <!-- ---------------------------------------------- Confirm Password ------------------------------------------
                <div class="input-group grupo_icone_input ">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-top-0 border-right-0 border-left-0 border-bottom-0"
                            id="inputGroupPrepend">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <input type="password"
                        class="form-control linha_input border-top-0 border-right-0 border-left-0" id="teste"
                        placeholder="Confirmar senha" required>
                </div> -->

                <!------------------------------------------------ Telefone -------------------------------------------------->
                <div class="input-group grupo_icone_input ">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-top-0 border-right-0 border-left-0 border-bottom-0"
                            id="inputGroupPrepend">
                            <i class="fa fa-phone"></i>
                        </span>
                    </div>
                    <input type="tel" class="form-control linha_input border-top-0 border-right-0 border-left-0 @error('telefone') is-invalid @enderror"
                        id="teste" name="telefone" placeholder="Telefone" value="{{old('telefone')}}">
                        @error('telefone')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>


                <!-------------------------------------------------- Genero -------------------------------------------------->
                <div class="tipo_sexo">
                        <div class="row mt-3">
                            <div class="col ml-4">
                                <label for="" class="">Gênero</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col ml-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero"
                                        id="exampleRadios1" value="1" checked value="{{old('genero')}}">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero"
                                        id="exampleRadios2" value="2" checked  value="{{old('genero')}}>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Feminino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero"
                                        id="exampleRadios3" value="3" checked  value="{{old('genero')}}>
                                    <label class="form-check-label" for="exampleRadios3">
                                        Outros
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-------------------------------------------- Data Nascimento / idade -------------------------------------------------->
                <div class="row">
                    <div class="col-sm-12">

                        <div class="row mt-3 ml-3">
                            <div class="col">
                                <label for="date">Data de Nascimento</label>
                            </div>
                        </div>

                        <div class="input-group grupo_icone_input mt-0">
                            <div class="input-group-prepend">
                                <span
                                    class="input-group-text border-top-0 border-right-0 border-left-0 border-bottom-0"
                                    id="inputGroupPrepend">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </div>
                            <input type="date" class="form-control input_idade border-top-0 border-right-0 border-left-0 @error('nascimento') is-invalid @enderror"
                             id="idade" name="nascimento" placeholder="Idade"  value="{{old('nascimento')}}">
                             @error('nascimento')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </div>
                    </div>
                </div>

                <!------------------------------------------------ Comobobox Curso Actual -------------------------------------------------->
                <div class="row mt-3">
                        <div class="col-sm-12">

                            <div class="row mt-0 ml-3">
                                <div class="col">
                                    <label for="teste">Curso actual na digital house</label>
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text border-top-0 border-right-0 border-left-0 border-bottom-0" id="inputGroupPrepend">
                                        <i class="fa fa-graduation-cap"></i>
                                    </span>
                                </div>
                                <select class="custom-select combobox_curso @error('curso_id') is-invalid @enderror" name="curso_id" value="{{old('curso_id')}}" >
                                    <option class="escolha" selected>Choose...</option>
                                    @foreach($cursos as $curso)
                                    <option class="escolha" value="{{$curso['id']}}">{{$curso['nome_curso']}}</option>
                                    @endforeach
                                </select>
                                @error('curso_id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                            </div>
                        </div>
                    </div>

                    <!------------------------------------------------ Status -------------------------------------------------->
                    <div class="row mt-3">
                        <div class="col-sm-12">

                            <div class="row mt-0 ml-3">
                                <div class="col">
                                    <label for="teste">Status</label>
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text border-top-0 border-right-0 border-left-0 border-bottom-0" id="inputGroupPrepend">
                                    <i class="fa fa-graduation-cap"></i>
                                </span>
                                </div>
                                <select class="custom-select  combobox_curso @error('status_id') is-invalid @enderror" name="status_id" value="{{old('status_id')}}">
                                    <option class="escolha" selected>Choose...</option>
                                    @foreach($status as $stat)
                                    <option class="escolha" value="{{$stat['id']}}">{{$stat['nome_status']}}</option>
                                    @endforeach
                                </select>
                                @error('status_id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                            </div>
                        </div>
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar mudanças</button>
        </div>
      </div>
    </div>
  </div>
            </div>
        {{-- </div> --}}

    </div>
<div class="container">
        <div class="toast-header">
        <strong class="mr-auto">Digite aqui conhecimentos que queira compartilhar..</strong>
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
</div>
    {{-- <!-- Botoes de navegacao -->
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
</div> --}}

@endsection
