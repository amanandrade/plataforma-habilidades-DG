@include('layouts.includes.head')
@extends('layouts.index2')
@section('titulo','Help')
@include('layouts.includes.footer2')

@section('conteudo')
<div class="container">
        <div class="row justify-content-center mt-5">
            <!-- Formulario de login -->
            <form class="col-md-4" method="post" action="{{route('usuarios.loginupdatesenha',$verificado->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputSenha" class="sr-only"></label>
                    <input type="email" class="form-control mb-3" id="inputSenha" placeholder="{{$verificado->email}}" disabled>
                    <label for="inputSenha" class="sr-only">Confirmar nova senha</label>
                    <input type="password" name="password"  class="form-control" id="inputSenha" placeholder="Nova senha">
                    <div class="d-flex justify-content-around">
                        <a class="btn btn-danger mt-4 mx-0" style="width: 100px;" href="{{route('usuarios.login')}}">Cancelar</a>
                        <button type="submit" class="btn btn-info mx-0 mt-4" style="width: 100px;">Confirmar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

