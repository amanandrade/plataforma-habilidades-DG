

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="{{asset('css/localstyle.css')}}">
    <title>Perfil</title>
    <style>
        /* #perfil  {
                    position: absolute;
                    z-index: 1;
} */

        /* #capa {
                    position: absolute;
                    z-index: 2;
}  */
    </style>
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container">

                <div class="d-flex justify-content-center align-items-center flex-column flex-wrap ">


                <img id="perfil" src="./img/foto.png" alt="" class="rounded-circle  mt-4">
                <h4 id="nome" class="text-center text">Beatriz Matos</h4>
                <h5 id="email" class="mb-4 text">bia@bia.com</h5>

            </div>


                <div class="toast-header">
                    <strong class="mr-auto">Selecione aqui conhecimentos que queira compartilhar..</strong>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
