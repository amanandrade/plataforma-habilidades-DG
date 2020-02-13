@extends('layouts.index')

@section('titulo','Help')

@section('conteudo')
<div class="container">
<div class="row col-12 d-flex justify-content-center">
              @include('flash::message')
              @if(session('msg'))
            <div class="alert alert-danger mt-2">
                {{session('msg')}}
               </div>
            @endif
</div>
        <div class="row col-12  justify-content-center mt-5">
            <span>
                <p class="py-4 ml-2">Insira seu e-mail no campo abaixo e você receberá uma nova senha.</p>
            </span>
        </div>
        <div class="row d-flex justify-content-center">
            <!-- Formulario de login -->
            <form class="col-md-4 mx-2 pt-4" method="post" action="{{route('usuarios.loginLembrarsenha.verificado')}}" enctype="multipart/data-form">
               @csrf
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                        placeholder="Email">
                </div>
                <a href="{{route('usuarios.login')}}" class="btn btn-danger">Cancelar</a>

                <button type="submit" class="btn btn-info">Solicitar nova senha</button>
            </form>
        </div>
    </div>

     @endsection