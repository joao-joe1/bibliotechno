<?php
  include("verificar_auth.php");
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
  <title>Document</title>
  <script src="assets/js/leia_mais.js"></script>

  <style>
    body {
      text-align: center;
      width: 198vh;
    }

    #mais {
      display: none
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
  <header class="pb-3 mb-0 border-bottom">
    <path fill-rule="evenodd" clip-rule="evenodd" d="" fill="currentColor"></path>
    </svg>
    <span class="fs-4" style="font-size: 14pt;"><br><b>Viagem ao Centro da Terra</b> Capa dura - 14 abril 2016</span>
    </a>
  </header>
  
  <br>

  <div class="row">
    <div class="col s12 m6">

      <div class="card" style="right: -400px">
        <div class="card-image">
          <img src="assets/images/sobre_livro_1.jpeg" style="height: 700px;" style="width: 300px;">
        </div>
        <div class="card-content">
          <p><b>Por:</b> Jules Verne (Autor) <br><br>
            <b>Descrição:</b> Um dos maiores clássicos da ficção científica, escrito pelo mesmo autor de 20 mil léguas
            submarinas e A ilha misteriosa

            "Vamos descer, descer, sempre descer! Como sabe, para chegar ao centro do globo temos apenas mais seis mil
            quilômetros a atravessar!"<span id="ponto">...</span> <span id="mais">
              Em 1863 o renomado professor Otto Lidenbrock, geólogo e mineralogista, descobre uma mensagem cifrada
              descrevendo uma viagem ao centro da Terra. É o quanto basta para o impetuoso cientista se lançar na mesma
              aventura - levando consigo o sobrinho Axel, colega de profissão mas defensor de diferentes teorias
              científicas, e o impassível Hans, guia que se mostrará indispensável para a empreitada e seu espantoso
              desfecho!

              Rios de lava, mares subterrâneos, os primórdios da vida no planeta, fauna e flora pré-históricos, múmias
              de
              homens primitivos... Fruto da imaginação e do conhecimento de um dos pais da ficção científica, Viagem ao
              centro da Terra é uma das obras mais originais e ousadas de seu tempo. Essa edição traz texto integral,
              excelente apresentação, cerca de 30 ilustrações originais, mais de 150 notas e cronologia e obra de Jules
              Verne - um dos escritores mais traduzidos em toda a história. A versão impressa apresenta ainda capa dura
              e
              acabamento de luxo.</span>
          </p>
          <button onclick="leiaMais()" id="btnLeiaMais" class="waves-effect waves-light btn-small">Ler Mais</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>