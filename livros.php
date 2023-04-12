<?php
session_start();

include("verificar_auth.php");
include("conexao.php");

if (isset($_GET['codigo'])) {
  $codigo = $_GET['codigo'];
  $result = $mysqli->query("SELECT * FROM `livro` WHERE `codigo` LIKE '%$codigo%' ORDER BY `codigo` ASC;");
} else if (isset($_GET['nome'])) {
  $nome = $_GET['nome'];
  $result = $mysqli->query("SELECT * FROM `livro` WHERE `nome` LIKE '%$nome%' ORDER BY `codigo` ASC;");
} else {
  $result = $mysqli->query("SELECT * FROM `livro` ORDER BY `codigo` ASC;");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="assets/images/ipatinga.png" type="image/x-icon">

  <!-- Materialize -->
  <link rel="stylesheet" href="assets/css/materialize.css">

  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- JavaScript Materialize -->
  <script src="assets/js/materialize.js"></script>

  <!-- Javasccript jQuery -->
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

  <title>Bibliochno - Livros</title>

  <style>
    .brand-logo {
      margin-left: 2%;
    }

    .searchbar {
      display: flex;
      align-items: center;
      justify-content: space-around;
    }

    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      border: 1px solid #ffffff;
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(60deg, #22BDA1, #22BDBA);
      border-radius: 50px;
    }
  </style>
</head>

<body>
  <nav>
    <div class="nav-wrapper red">

      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <a class="brand-logo">Bibliotechno</a>

      <ul class="right hide-on-med-and-down">
        <li><a href="inicio.php"><i class="material-icons right">menu</i>Início</a></li>
        <li><a href="cadastro_livros.php"><i class="material-icons right">add_to_photos</i>Cadastrar Livros</a></li>
        <li><a href="livros_pendente.php"><i class="material-icons right">collections_bookmark</i>Controle de Livros</a></li>
        <li class="active"><a href="login.php"><i class="material-icons right">cancel</i>Sair</a></li>
      </ul>
  </nav>

  <div class="col s12">
    <div class="searchbar">
      <div class="input-field col s4">
        <i class="material-icons prefix">search</i>
        <input type="text" id="pesquisa" class="validate" placeholder="Pesquisa">
      </div>

      <div class="input-field col s2">
        <i class="material-icons prefix">chevron_right</i>
        <input type="text" id="codigo" class="validate" placeholder="Cód. do Livro">
      </div>
    </div>
  </div>

  <ul class="collection">
    <?php
      for ($read = 1; $livro = mysqli_fetch_array($result); $read++) {
        $nome = $livro['nome'];
        $autor = $livro['autor'];
        $codigo = $livro['codigo'];
        $genero = $livro['genero'];
  
        echo "<li class='collection-item avatar'>
        <i class='material-icons circle red'>book</i>
        <span class='title'> <b>Nome do Livro:</b> ${nome}</span>
        <p>
          <b>Autor:</b> ${autor} <br>
          <b>Código do Livro:</b> ${codigo} (ISBN) <br>
          <b>Gênero:</b> ${genero}
        </p>
  
        <a href='./ver_livro.php?id=${codigo}' class='secondary-content'><i class='material-icons'>live_help</i></a>
      </li>";
    }
    ?>
    <ul>

      <script>
        $(function() {
          $("#pesquisa").keyup(function(event) {
            if (event.which === 13) {
              location.href = `?nome=${event.currentTarget.value}`;
            }
          })

          $("#codigo").keyup(function(event) {
            if (event.which === 13) {
              location.href = `?codigo=${event.currentTarget.value}`;
            }
          })
        });
      </script>

      <script>
        M.AutoInit();
      </script>
</body>

</html>