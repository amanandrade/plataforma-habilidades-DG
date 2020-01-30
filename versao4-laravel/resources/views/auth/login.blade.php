@extends('layouts.users')

@section('titulo', 'Help')
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
        <div class="row col-12 d-flex justify-content-center">
           
            <!-- Formulario de login -->
                <form method="post" action="{{route('usuarios.login.entrar')}}" enctype="multipart/form-data">
                @csrf
              
                    <img style="width:200px" class="mt-5 mb-3" src="{{ asset('img/help_logo.jpg')}}" alt="Logo">
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror


                    </div>
                    <div class="form-group">
                        <label for="inputSenha">Senha</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputSenha" placeholder="Senha" value="{{old('password')}}">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    </div>
                    <div class="mb-1" >
                        <label class="form-check-label" for="exampleCheck1"></label><a style="color:black" href="{{route('usuarios.loginLembrarsenha')}}">Esqueci minha senha</a></label>
                    </div>
                    <a style="color: black" href="{{route('usuarios.cadastro')}}">Quero me cadastrar</a>
                    <button type="submit" class="btn btn-dark ml-3 pt-1 pb-1 pr-2 pl-2 "><a style="color: #FFFF">Login</a></button>
                </form>
        </div>
    </div>
    @endsection