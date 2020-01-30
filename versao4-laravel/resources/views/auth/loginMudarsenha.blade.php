@extends('layouts.index')

@section('titulo','Help')

@section('conteudo')
<div class="container justify-content-center">
        <div class="row d-flex justify-content-center mt-5">
            <!-- Formulario de login -->
            <form class="col-md-4 mx-2 pt-4">
                <div class="form-group">
                    <label for="inputSenha" class="sr-only">Nova senha</label>
                    <input type="Senha" class="form-control" id="inputSenha" placeholder="Nova senha">
                </div>
                <div class="form-group">
                    <label for="inputSenha" class="sr-only">Confirmar nova senha</label>
                    <input type="Senha" class="form-control" id="inputSenha" placeholder="Confirmar nova senha">
                </div>
                <div class="row justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary mx-2" style="width: 100px;">Confirmar</button>
                    <a class="btn btn-dark mx-2" style="width: 100px;" href="{{route('usuarios.login')}}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

