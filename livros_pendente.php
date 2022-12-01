<?php
  include("verificar_auth.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- JavaScript Materialize -->
    <script src="assets/js/materialize.js"></script>
    <!-- Materialize -->
    <link rel="stylesheet" href="assets/css/materialize.css">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- JS -->
    <script type="module" src="assets/js/app.js"></script>
    <script type="module" src="assets/js/UsuarioControle.js"></script>
    <script type="module" src="assets/js/models/usuario.js"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/livros_pen.css">
</head>

<body>

    <style>
        .brand-logo {
            margin-left: 2%;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems, {});
        });
    </script>

    <nav>
        <div class="nav-wrapper purple">
            <a href="#" data-target="slide-out" class="sidenav-trigger"></a>
            <a class="brand-logo">Bibliotechno</a">

                <ul class="right hide-on-med-and-down">
                    <li><a href="menu.php"><i class="material-icons right">menu</i>Início</a></li>
                    <li><a href="livros.php"><i class="material-icons right">book</i>Todos os Livros</a></li>
                    <li><a href="#!"><i class="material-icons right">add_to_photos</i>Cadastrar Aluno</a></li>
                    <li><a href="cadastro.php"><i class="material-icons right">collections_bookmark</i>Cadastrar Livros</a></li>
                    <li class="active"><a href="login.php"><i class="material-icons right">cancel</i>Sair</a></li>
                </ul>

    </nav>
    <br>

    <table class="users" style="margin-left: 1%;" style="margin-right: 1%;">
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Turma</th>
                <th>Livro Pendente</th>
                <th>Data de Entrega</th>
                <th>
                    <span><a id="click_me" class="btn-floating btn-small waves-effect waves-light red"><i
                                class="material-icons">add</i></a></span>
                </th>

            </tr>
        </thead>
    </table>

    <div class='form form-add'>
        <form class='registro'>
            <div class='form-container'>
                <a id="remove" class="btn-floating btn-small waves-effect waves-light red"><i
                        class="material-icons">remove</i></a>
                <span class=form-title style="text-align:center">Registrar</span>
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>

                    <input type='text' required class='validate' name='aluno' placeholder="Aluno">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">supervisor_account</i>
                    <input type='number' required class='validate' name='turma' placeholder="Turma" min="0">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">style</i>
                    <input type='text' required class='validate' name='l_pendente' placeholder="Livro Pendente">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">feedback</i>
                    <input type='date' required class='validate' name='entrega' placeholder="Data de Entrega">
                </div>
                <button id="registerBtn" class="btn waves-effect waves-light" type="submit" name="action">Registrar
                    <i class="material-icons right">send</i>
                </button>
            </div>
    </div>
</body>

</html>