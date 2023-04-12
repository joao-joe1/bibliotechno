<?php
  session_start();

  include("verificar_auth.php");
  include("conexao.php");

  if (isset($_POST['aluno'])) {
    $nome = $_POST['aluno'];
    $turma = $_POST['turma'];
    $livro_pendente = $_POST['livro_pendente'];
    $data_entrega = $_POST['data_entrega'];

    $mysqli->query("insert into `emprestimo` values ('0', '$nome', '$turma', '$livro_pendente', '$data_entrega')");
  }

  $result = $mysqli->query("SELECT * FROM `emprestimo` ORDER BY `idemprestimo` ASC;");
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
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/livros_pen.css">

    <style>
        .brand-logo {
            margin-left: 2%;
        }
    </style>
</head>

<body>
    <nav>
        <div class="nav-wrapper purple">
            <a href="#" data-target="slide-out" class="sidenav-trigger"></a>
            <a class="brand-logo">Bibliotechno</a">

                <ul class="right hide-on-med-and-down">
                    <li><a href="inicio.php"><i class="material-icons right">menu</i>Início</a></li>
                    <li><a href="livros.php"><i class="material-icons right">book</i>Todos os Livros</a></li>
                    <li><a href="cadastro_livros.php"><i class="material-icons right">collections_bookmark</i>Cadastrar Livros</a></li>
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

            <?php
            for ($read = 1; $livro = mysqli_fetch_array($result); $read++) {
                $aluno = $livro['nome'];
                $turma = $livro['turma'];
                $livro_pendente = $livro['livro_pendente'];
                $data_entrega = $livro['data_entrega'];

                echo "
                    <tr>
                        <th>$aluno</th>
                        <th>$turma</th>
                        <th>$livro_pendente</th>
                        <th>$data_entrega</th>
                    </tr>
                ";
            }
            ?>
        </thead>
    </table>

    <div class='form form-add'>
        <form class='registro' method="POST" action="">
            <div class='form-container'>
                <a id="click_me_remove" class="btn-floating btn-small waves-effect waves-light red"><i
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
                    <input type='text' required class='validate' name='livro_pendente' placeholder="Livro Pendente">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">feedback</i>
                    <input type='date' required class='validate' name='data_entrega' placeholder="Data de Entrega">
                </div>
                <button id="registerBtn" class="btn waves-effect waves-light" type="submit" name="action">Registrar
                    <i class="material-icons right">send</i>
                </button>
            </div>
    </div>

    <script>
        document.getElementById('click_me').addEventListener('click', () => {
            document.querySelector('.form-add').style.display = 'flex'
        });
        document.getElementById('click_me_remove').addEventListener('click', () => {
            document.querySelector('.form-add').style.display = 'none'
        });
    </script>
</body>

</html>