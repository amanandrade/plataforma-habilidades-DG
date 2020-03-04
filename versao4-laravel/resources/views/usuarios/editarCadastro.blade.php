@extends('layouts.indexhome')

@section('titulo', 'Help')
@section('conteudo')
<!--------------------------------------------- container c_nav ------------------------------------------------------>
<div class="container c_nav">

</div>
<!----------------------------------------------------- end container c_nav ---------------------------------------------->
<!------------------------------------------------- container c_form ------------------------------------------------------>
<div class="container c_form">

    <form method="post" action="{{route('usuarios.editarCadastros', Auth::User()->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-3">
            <div class="col-md-6 col-sm-12 m-auto d-flex justify-content-center mb-3">
                <h4>Editar cadastro</h4>
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
                id="teste" name="nome" placeholder="Nome Sobrenome" value="{{Auth::User()->nome}}">
                        @error('nome')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>




                <!------------------------------------------------ Telefone -------------------------------------------------->
                <div class="input-group grupo_icone_input ">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-top-0 border-right-0 border-left-0 border-bottom-0"
                            id="inputGroupPrepend">
                            <i class="fa fa-phone"></i>
                        </span>
                    </div>
                    <input type="tel" class="form-control linha_input border-top-0 border-right-0 border-left-0 @error('telefone') is-invalid @enderror"
                        id="telefone_editarcadastro" name="telefone" placeholder="Telefone" value="{{Auth::User()->telefone}}">

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
                             id="idade" name="nascimento" placeholder="Idade"  value="{{Auth::User()->nascimento}}">
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
                                <select class="custom-select combobox_curso @error('curso_id') is-invalid @enderror" name="curso_id" value="{{old('curso_id')}}" required>
                                    @foreach($cursos as $curso)
                                <option class="escolha" selected value="{{Auth::User()->curso_id}}">{{$curso['nome_curso']}}</option>

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
                                <select class="custom-select  combobox_curso @error('status_id') is-invalid @enderror" name="status_id" value="{{old('status_id')}}" required>
                                    @foreach($status as $stat)
                                <option class="escolha" selected value="{{Auth::User()->status_id}}">{{$stat['nome_status']}}</option>

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
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center mt-3">

               <a href="{{route('usuarios.home')}}" class="btn btn-danger mr-5">Cancelar</a>

                <button type="submit" class="btn btn-primary">Alterar</button>

            </div>
        </div>

    </form>

</div>
@endsection


