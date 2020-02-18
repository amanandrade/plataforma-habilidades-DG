@extends('layouts.indexhome')

@section('titulo','Help')
@section('conteudo')
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

@endsection
