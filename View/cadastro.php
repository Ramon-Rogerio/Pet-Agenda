<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Agenda PHP</title>
    <!-- CSS do Bootstrap e CSS customizado -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include_once "include/menu.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col-lg-4">
                <h3>Cadastro de Horários</h3>

                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Informe o Nome do Animal">
                    </div>

                    <div class="form-group">
                        <label for="Responsavel">Responsavel</label>
                        <input type="text" class="form-control" id="responsavel" placeholder="Informe o Nome do Responsável">
                    </div>

                    <div class="form-group">
                        <label for="text">Raça</label>
                        <input type="text" class="form-control" id="Raça" placeholder="Informe a Raça do Pet">
                    </div>

                
                    <div class="form-group">
                    <label>Entrada:</label>
                    <input type="time" id="entrada" required> 
               
                    <label>Saida:</label>
                    <input type="time" id="saida" required> <br><br>
                    </div>

                    <button type="button" class="btn btn-warning" id="cadastrar" onclick="cadastrarHorario()">Cadastrar</button>
                </form>

                <div id="status"></div>
            </div>

            <div class="col"></div>
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