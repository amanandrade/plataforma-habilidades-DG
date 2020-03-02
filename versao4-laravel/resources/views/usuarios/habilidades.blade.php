@extends('layouts.indexhome', ['current' => 'habilidade'])

@section('titulo','Help')
@section('conteudo')
    
    <main>
        <div class="container">
            <!-- buttons de filtro principal -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-sm-12">
                    <a href="{{route('usuarios.habilidades.buscapessoa')}}" class="d-flex flex-column btn btn-success align-items-center mt-3 w-100">
                        <i class="material-icons d-flex flex-column">extension</i>
                        Pessoas
                    </a>
                </div>

                <div class="col-md-4 col-sm-12">
                    <button type="submit" value="pessoas" class="d-flex flex-column btn btn-danger align-items-center mt-3 w-100">
                        <i class="material-icons d-flex flex-column">extension</i>
                        Habilidades
                    </button>
                </div>

                <div class="col-md-4 col-sm-12">
                    <button type="submit" value="pessoas" class="d-flex flex-column btn btn-info align-items-center mt-3 w-100">
                        <i class="material-icons d-flex flex-column">gamepad</i>
                        Áreas DH
                    </button>
                </div>
            </div>

            <span class="row pt-3 m-2">
                <p>Você pode se interessar também por: </p>
            </span>
        </div>

        <div class="container">

            <div class="row">
                
                <div class="card-columns col-md-8">

                    @foreach($habilidades as $habilidade)
                        <div class="card text-center btn-outline-info">
                            <form method="POST" action="{{route('usuarios.habilidades.buscatag')}}">
                                @csrf
                                <input type="hidden" name="habilidade_pesquisada" value="{{ $habilidade['habilidades'] }}">
                                <button type="submit" class="btn btn-outline-primary w-100">{{ $habilidade['habilidades'] }}  <i class="fa fa-search"></i></button>
                            </form> 
                        </div>
                    @endforeach

                </div>
                
               
                <!-- cards de propaganda -->
                <div class="col-md-4">
                    <aside class="card d-flex card border-0 justify-content-top">
                        <div class="card">
                            <img src="./img/freelancer.webp" class="card-img-top "
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Job na área </h5>
                                <p class="card-text">
                                    <b>João Freitas</b> precisa de alguém com habilidades na área de Front-end!
                                    Percebemos
                                    que
                                    você
                                    indicou essa mesma tag :) Que tal entrar nessa?</p>
                                <a href="#" class="btn btn-primary stretched-link">Participe!</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
@endsection