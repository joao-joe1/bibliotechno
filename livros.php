<?php
include_once("verificar_auth.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Materialize -->
  <link rel="stylesheet" href="assets/css/materialize.css">
  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="/assets/css/livros.css">
  <!-- JavaScript Materialize -->
  <script src="assets/js/materialize.js"></script>
  <title>Document</title>
</head>

<body>
  <div id="app">
  </div>
  <script src="assets/js/livros.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var auto = document.querySelectorAll('.autocomplete');
      M.Autocomplete.init(auto, {
        data: {
          'Viagem ao Centro da Terra': null,
          'A Revolução dos Bixos': null
        }
      })
    });


  </script>
  <script>
    M.AutoInit()
  </script>
</body>

</html>