<?php
session_start();

include("verificar_auth.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css" media="screen" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/ipatinga.png" type="image/x-icon">

    <script src="assets/js/materialize.js"></script>

    <title>Bibliotechno - Alunos</title>

    <style>
        .brand-logo {
            margin-left: 2%;
        }

        .waves-effect {
            background-color: #176e66;
        }

        .waves-light {
            background-color: #26a69a;
        }

        .page-footer {
            background-color: #26a69a;
        }

        .page-footer {
            font-family: 'Poppins', sans-serif;
        }

        .nav-wrapper {
            font-family: 'Poppins', sans-serif;
            background-color: #26a69a;
        }

        .center-align {
            font-family: 'Poppins', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            border: 1px solid #FFFF
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(60deg, #22bda1, #22bda1);
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <a class="brand-logo">Bibliotechno</a>

            <ul class="right hide-on-med-and-down">
                <li><a href="livros.php"><i class="material-icons right">book</i>Todos os Livros</a></li>
                <li><a href="cadastro_livros.php"><i class="material-icons right">add_to_photos</i>Cadastrar Livros</a></li>
                <li><a href="livros_pendente.php"><i class="material-icons right">collections_bookmark</i>Controle de Livros</a></li>
                <li><a href="#!"><i class="material-icons right">add_to_photos</i>Cadastrar Aluno</a></li>
                <li class="active"><a href="login.php"><i class="material-icons right">cancel</i>Sair</a></li>
            </ul>
    </nav>

    </div>
    <h5 class="center-align">
        <img src="./assets/images/inicio-library.gif" style="width: 600px" />
    </h5>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text"></h5>
                    <p class="grey-text text-lighten-4">Escola Estadual Selim José de Salles</p>
                </div>

                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Redes Sociais</h5>
                    <ul>
                        <li>
                            <a class="blue-text text-lighten-3" href="https://www.facebook.com/ee.selimjosedesalles/">Facebook</a>
                        </li>
                        <li>
                            <a class="blue-text text-lighten-3" href="https://www.instagram.com/eeselimjosedesalles/">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                Todos os direitos reservados © 2022 Sistema Bibliotechno
                <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
        </div>
    </footer>

    <script>
        M.AutoInit()
    </script>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</body>

</html>