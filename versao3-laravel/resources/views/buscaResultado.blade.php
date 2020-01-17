<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- font awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- fonts google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">

    <!-- local style -->
    <link rel="stylesheet" href="./css/localstyle.css">
    <title>Resultado da busca</title>
</head>

<body>
    <header class="container-fluid d-flex sticky-top justify-content-center bg-white px-0">
        <div class="container">
            <!-- navbar -->
            <div class="row">
                <nav class="navbar navbar-expand-md navbar-light col-12">
                    <a class="navbar-item d-flex justify-content-center align-items-center" href="./busca.html">
                        <i class="material-icons">keyboard_arrow_left</i>Voltar
                    </a>
                    <button class="border-0 navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <div class="justify-content-end">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link align-items text-right" href="./index.html">Home <span
                                            class="sr-only">(atual)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-items text-right" href="./cadastro.html">Meu
                                        Cadastro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-items text-right"
                                        href="./chatHome.html">Mensagens</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-items text-right"
                                        href="./perfilLateral.html">Meu Perfil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- busca -->
            <div class="row d-flex justify-content-center">
                <div class="col-12 py-2 text-center">
                    <form>
                        <div class="input-group my-2">
                            <input type="text" class="form-control" placeholder="Pesquisar"
                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-prepend">
                                <a class="btn btn-outline-secondary" type="submit" id="buttom-addon1"
                                    href="./buscaResultado.html">
                                    <i class="fa fa-search"></i>
                                </a>
                                <!--mudar depois para tag button-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <span class="pt-3 my-2 col-12">
                <p>Resultado da busca: </p>
            </span>
        </div>
    </div>
    <main class="container">
        <div class="row">
            <!-- cards de resultado da busca -->
            <div class="d-flex col-md-9 justify-content-center">
                <div class="container p-0">
                    <div class="row mx-1 d-flex justify-content-md-between justify-content-center">
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="./img/mulher1.JPG"
                                        alt="Foto Maria da Graça">
                                    <h5 class="card-title my-0 ml-2">Maria da Graça</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text">PHP, Laravel, <mark>CSS</mark></p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-light text-primary py-1 px-4">Perfil</a>
                                    <a href="#" class="btn btn-info py-1 px-4">Chat</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="./img/homem1.JPG"
                                        alt="Foto Josias Ricardo">
                                    <h5 class="card-title my-0 ml-2">Josias Ricardo</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text"><mark>CSS</mark>, Marketing Digital, Design</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-light text-primary py-1 px-4">Perfil</a>
                                    <a href="#" class="btn btn-info py-1 px-4">Chat</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="./img/homem2.JPG"
                                        alt="Foto Samuel Francisco">
                                    <h5 class="card-title my-0 ml-2">Samuel Francisco</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text">PHP, <mark>CSS</mark>, Data Analytics</p>
                                <div class="d-flex justify-content-between">
                                    <button href="#" class="btn btn-light text-primary py-1 px-4">Perfil</button>
                                    <button href="#" class="btn btn-info py-1 px-4">Chat</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="./img/mulher2.JPG"
                                        alt="Foto Susana Alencar">
                                    <h5 class="card-title my-0 ml-2">Susana Alencar</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text">PHP, Laravel, <mark>CSS</mark></p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-light text-primary py-1 px-4">Perfil</a>
                                    <a href="#" class="btn btn-info py-1 px-4">Chat</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="./img/mulher3.JPG"
                                        alt="Foto Marina Ribeiro">
                                    <h5 class="card-title my-0 ml-2">Marina Ribeiro</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text"><mark>CSS</mark>, Marketing Digital, Design</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-light text-primary py-1 px-4">Perfil</a>
                                    <a href="#" class="btn btn-info py-1 px-4">Chat</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 22rem;">
                            <div class="card-body">
                                <div class="row align-items-center mx-auto">
                                    <img class="card-img-top rounded-circle w-25" src="./img/homem3.JPG"
                                        alt="Foto Hugo Leal">
                                    <h5 class="card-title my-0 ml-2">Hugo Leonardo</h5>
                                </div>
                                <h6 class="card-subtitle my-2 text-muted">Habilidades:</h6>
                                <p class="card-text">PHP, <mark>CSS</mark>, Data Analytics</p>
                                <div class="d-flex justify-content-between">
                                    <button href="#" class="btn btn-light text-primary py-1 px-4">Perfil</button>
                                    <button href="#" class="btn btn-info py-1 px-4">Chat</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- aside cards de propaganda -->
            <aside class="card d-flex card border-0 col-md-3 justify-content-top">
                <div class="card">
                    <img src="./img/freelancer.webp" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Job na área </h5>
                        <p class="card-text">
                            <b>João Freitas</b> precisa de alguém com habilidades na área de Front-end! Percebemos que
                            você
                            indicou essa mesma tag :) Que tal entrar nessa?</p>
                        <a href="#" class="btn btn-primary stretched-link">Participe!</a>
                    </div>
                </div>
                <div class="card mt-4">
                    <img src="./img/pagodigital.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Adicione na agenda!</h5>
                        <p class="card-text"> Nesse encontro, professores apresentam os cursos oferecidos na DH e as
                            oportinidades de trabalho
                            de acordo com cada um deles. Tire suas dúvidas com as pessoas certas!!</p>
                        <a href="#" class="btn btn-primary stretched-link">Inscreva-se!</a>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    <footer class="container-fluid mt-3 bg-light">
        <div class="row justify-content-center align-itens-center pt-4 ">
            <a href="mailto:email@contato.com.br">Fale Conosco</a>
        </div>
        <div class="row justify-content-center align-itens-center pb-4">
            <p class="m-0">© Copyright Help! 2019</p>
        </div>
    </footer>

    <!-- bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>