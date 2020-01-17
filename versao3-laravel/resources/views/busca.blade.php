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
    
    <title>Busca</title>

</head>

<body>
    <header class="container-fluid d-flex sticky-top justify-content-center bg-white px-0">
        <div class="container">
            <!-- navbar -->
            <div class="row">
                <nav class="navbar navbar-expand-md navbar-light col-12">
                    <a class="navbar-item d-flex justify-content-center align-items-center" href="./index.html">
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
                                    <a class="nav-link align-items text-right" href="./index.html">Home<span
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
            <form>
                <div class="input-group my-2">
                    <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <div class="input-group-prepend">
                    <a class="btn btn-outline-secondary" type="submit" id="buttom-addon1" href="./buscaResultado.html">
                        <i class="fa fa-search"></i>
                    </a> <!--mudar depois para tag button-->
                    </div>
                </div>
              </form>

        </div>
    </header>

    <main>
        <div class="container">
            <!-- buttons de filtro principal -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-sm-12"><button type="submit" value="pessoas"
                        class="d-flex flex-column btn btn-success align-items-center mt-3 w-100"><i
                            class="material-icons d-flex flex-column">people</i>Pessoas</button></div>
                <div class="col-md-4 col-sm-12"><button type="submit" value="pessoas"
                        class="d-flex flex-column btn btn-danger align-items-center mt-3 w-100"><i
                            class="material-icons d-flex flex-column">extension</i>Habilidades</button></div>
                <div class="col-md-4 col-sm-12"><button type="submit" value="pessoas"
                        class="d-flex flex-column btn btn-info align-items-center mt-3 w-100"><i
                            class="material-icons d-flex flex-column">gamepad</i>Áreas DH</button></div>
            </div>

            <span class="row pt-3 m-2">
                <p>Você pode se interessar também por: </p>
            </span>
        </div>
        <div class="container">
            <div class="row">
                <div class="card-columns col-md-9">
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">CSS</p>
                        </div>
                    </div>
                    <div class="card text-center p-3 btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">Ciência de Dados</p>
                        </div>
                    </div>
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">React</p>
                        </div>
                    </div>
                    <div class="card text-center p-3 btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">Marketing Digital</p>
                        </div>
                    </div>
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">HTML</p>
                        </div>
                    </div>
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">Python</p>
                        </div>
                    </div>
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">PHP</p>
                        </div>
                    </div>
                    <div class="card text-center btn-outline-info">
                        <div class="card-body">
                            <p class="card-text">Bootstrap</p>
                        </div>
                    </div>
                    <div class="card text-center p-3 btn-outline-info">
                        <div class="card-body px-3 py-md-2 py-sm-0">
                            <p class="card-text">Comunicação em Mídias Sociais</p>
                        </div>
                    </div>
                </div>

                <!-- cards de propaganda -->
                <div class="col-md-3">
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


    <footer class="container-fluid mt-3 bg-light">
        <div class="row justify-content-center align-itens-center pt-4 bg-light">
            <a href="mailto:email@contato.com.br">Fale Conosco</a>
        </div>
        <div class="row justify-content-center align-itens-center pb-4 bg-light">
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