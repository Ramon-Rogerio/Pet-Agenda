<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Agenda Pet</title>
    <!-- CSS do Bootstrap e CSS customizado -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include_once "include/menu.php";
    ?>

    <div class="container">
        <h1 class="titulo">Home</h1>

        <div class="row">
            <div class="col-lg-4">
                <h3>Cadastro</h3>
                <p>Para realizar um cadastro, selecione a opção "cadastrar" e informe os dados nos respectivos campos.</p>
            </div>

            <div class="col-lg-4">
                <h3>Login</h3>
                <p>Selecione "Login" para entrar com sua conta.</p>
            </div>

            <div class="col-lg-4">
                <h3>Buscar</h3>
                <p>Selecione "Buscar" para realizar uma busca no banco de dados</p>
            </div>
        </div>
    </div> <!-- fecha /container -->

    <!-- jQuery (online) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript customizado -->
    <script src="js/scripts.js"></script>
</body>
</html>