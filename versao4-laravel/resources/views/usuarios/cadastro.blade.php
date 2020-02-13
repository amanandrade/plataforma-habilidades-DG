@extends('layouts.index')

@section('titulo','Help')

@section('conteudo')
<!--------------------------------------------- container c_nav ------------------------------------------------------>
<div class="container c_nav">

</div>
<!----------------------------------------------------- end container c_nav ---------------------------------------------->
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
                                        Todos
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

                    

                
                <!-- ---------------------------------------------------- imagem de perfil ------------------------------------------------------
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 imgUp">
                                <div class="row d-flex justify-content-center mt-3">
                                    <div class="imagePreview" style=""></div>
                                </div>
                                <div class="row d-flex justify-content-center mt-2">
                                    <label class="btn botao_adicionar">
                                        Inserir foto
                                        <input type="file" class="uploadFile img" value="Upload Photo" name="foto" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </div>

                            </div>

                        </div>
                    </div>
                ---------->
            </div>
        </div> 

        <div class="container">
            <div class="row d-flex justify-content-center mt-3">
            
<<<<<<< HEAD
                <a href="{{route('usuarios.login')}}" class="btn btn-danger mr-5">Cancelar</a>
=======
               <a href="{{route('usuarios.login')}}" class="btn btn-danger mr-5">Cancelar</a>

>>>>>>> 0a09478d59e9a71f0c2186289de02e29dd423649
                <button class="btn btn-primary" type="submit">Cadastrar</button>

            </div>
        </div>

    </form>

</div>
@endsection
