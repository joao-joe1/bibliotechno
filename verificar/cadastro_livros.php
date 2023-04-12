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

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2? família=Poppins:wght@700&display=swap" rel="stylesheet">

  <script src="assets/js/materialize.js"></script>

  <title>Bibliotechno - Cadastro</title>

  <style>
    .footer-copyright {
      margin-top: 10%;
    }

    body {
      height: 10vh;
    }

    .waves-effect {
      background-color: #176e66;
    }

    .waves-light {
      background-color: #26a69a;
    }

    nav {
      background-color: #26a69a;
    }

    .brand-logo {
      margin-left: 2%;
    }

    .row {
      text-align: center;
    }

    h5 {
      margin-left: 50px;
    }

    fieldset {
      width: 850px;
      height: 600px;
      margin-left: 25%;
      background-color: rgba(255, 255, 255, 0.315);
      backdrop-filter: blur(2px);
      border: 2px;
      border-radius: 10px;
      border-style: hidden;
    }

    div .row {
      height: 600px
    }

    img {
      max-width: 100px;
    }

    .center-align {
      margin-left: 0%;
      margin-top: 0%;
      margin-block-start: 0px;
    }

    .btn {
      margin-top: 150px;
    }


    .waves-effect {
      margin-top: 50px;
    }

    form {
      margin-top: 80px;
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

    @media screen and (max-width: 800px) {
      fieldset {
        float: none;
        margin: 0;
        text-align: center;
        display: block;
        width: auto;
      }
    }
  </style>
</head>

</body>
  <nav>
    <div class="nav-wrapper blue">
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <a class="brand-logo">Bibliotechno</a">

        <ul class="right hide-on-med-and-down">
          <li><a href="inicio.php"><i class="material-icons right">menu</i>Início</a></li>
          <li><a href="livros.php"><i class="material-icons right">book</i>Todos os Livros</a></li>
          <li><a href="#!"><i class="material-icons right">add_to_photos</i>Cadastrar Aluno</a></li>
          <li><a href="livros_pendente.php"><i class="material-icons right">collections_bookmark</i>Controle de Livros</a></li>
          <li class="active"><a href="login.php"><i class="material-icons right">cancel</i>Sair</a></li>
      </ul>
    </div>
  </nav>

</div>
<fieldset>
  <h3 class="center-align">
    <img src="assets/images/png.png">
  </h3>
  <form class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <input id="titulo" type="text" class="validate">
        <label for="titulo">Título</label>
      </div>
      <div class="input-field col s6">
        <select>
          <option value="" disabled selected>Gêneros</option>
          <option value="1">Ficção</option>
          <option value="2">Romance</option>
          <option value="3">Aventura</option>
          <option value="4">Comédia</option>
          <option value="5">Infantil</option>
          <option value="6">Antologias</option>
          <option value="7">Poesias</option>
          <option value="8">Horror</option>
          <option value="9">Adultos</option>
          <option value="10">História</option>
          <option value="11">Diversos</option>
        </select>
        <label>Escolha um Gênero</label>
      </div>
      <div class="input-field col s6">
        <input id="password" type="text" class="validate">
        <label for="password">Código do Livro</label>
      </div>
      <div class="input-field col s6">
        <input id="autor" type="text" class="validate">
        <label for="autor">Autor</label>
      </div>
    </div>
    </div>
    </div>
    <h4 class=center-align>
      <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
        <i class="material-icons right">send</i>
      </button>
      <button class="btn waves-effect waves-light red" type="submit" name="action">Cancelar
        <i class="material-icons right">cancel</i>
      </button>
    </h4>
</fieldset>
</form>

<div class="footer-copyright">
  <div class="container">
    Todos os direitos reservados © 2022 Sistema Bibliotechno
    <a class="grey-text text-lighten-4 left" href="#!"></a>
  </div>
</div>
</footer>
<script>
  M.AutoInit()
</script>
</body>

</html>