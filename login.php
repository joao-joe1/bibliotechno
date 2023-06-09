<?php
session_start();

include('./conexao.php');

if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = trim($_POST['user']);
    $password = trim($_POST['password']);

    $query = $mysqli->query("SELECT * FROM `administrador` WHERE `usuario` = '" . $user . "' AND `senha` = '" . $password . "';");

    if (mysqli_num_rows($query) != 0) {
        $_SESSION['authenticated'] = true;

        header('Location: ./inicio.php');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Materialize -->
    <link rel="stylesheet" href="assets/css/materialize.css">

    <!-- Materialize  JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/ipatinga.png" type="image/x-icon">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">

    <title>Bibliotechno - Autenticação</title>
</head>

<body>
    <div class="logo2">
        <img src="./assets/images/login.svg" alt="" style="width:700px">
    </div>

    <div class="login">
        <form method="POST" action="">
            <div class="row">
                <div class="logo"></div>
            </div>
            <div class="row center">
                <div class="auttext">
                    <h4>AUTENTICAÇÃO</h4>
                </div>
            </div>
            <div class="mb-3">
                <label class="mb-2 text-muted">Usuário</label>
                <input type="text" class="form-control" name="user" value="" required autofocus>
            </div>

            <div class="mb-3">
                <div class="mb-2 w-100">
                    <label class="text-muted" for="password">Senha</label>
                </div>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="row">
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" checked="checked" />
                        <span>Lembrar desta conta</span>
                    </label>
                </p>
            </div>

            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-dark ms-auto btnmain">
                    Entrar
                </button>
                <div class="row">
                    <div class="col s12">
                        <br><b>Quer saber sobre a gente?</b>
                        <a href="index.php"><u>Clique aqui</u></a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        M.AutoInit();

        var user = '<?php echo $user; ?>';
        var password = '<?php echo $password; ?>';

        if (user && password) {
            M.toast({
                html: 'Autenticação falhou! (Usuário ou senha incorreto.)',
                classes: 'rounded'
            });
        }
    </script>
</body>

</html>