@extends('layouts.index')

@section('titulo','Help')

@section('conteudo')
<div class="container">
        <div class="row col-12  justify-content-center mt-5">
            <span>
                <p class="py-4 ml-2">Insira seu e-mail no campo abaixo e você receberá uma nova senha.</p>
            </span>
        </div>
        <div class="row d-flex justify-content-center">
            <!-- Formulario de login -->
            <form class="col-md-4 mx-2 pt-4" method="post" action="" enctype="multipart/data-form">
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                        placeholder="Email">
                </div>
                <button type="submit" class="btn btn-warning"><a href="{{route('usuarios.loginMudarsenha')}}"> Solicitar nova senha</a></button>

                <a href="{{route('usuarios.login')}}" class="btn btn-dark">Cancelar</a>
            </form>
        </div>
    </div>

     @endsection