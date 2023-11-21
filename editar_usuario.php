<?php
// Conexão
require_once 'connect_db.php';

// Sessão
session_start();

include 'include_session_home.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
  <header>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Planner</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="src/css/style_new_client.css">
    <!-- Jquery por CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Jquery validation por CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <!-- Jquery validation por CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <!-- Fonts usadas no site direto do google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:700,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <a href="home.php"><img src="src/img/felix.png" alt="Planner"></a>

    <nav>
        <li><?php echo $dadosName['username'] ?></li>
    </nav>
    </header>
    <body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div>
                    <h4>Listar Usuários</h4>
                </div>
            </div>
        </div>
        <hr>

        <!-- SELETOR "msgAlerta" responsavel em receber a mensagem de sucesso ou erro -->
        <span id="msgAlerta"></span>

        <div class="row">
            <div class="col-lg-12">
                <!-- SELETOR "listar-usuarios" responsavel em receber os registros do banco de dados -->
                <span class="listar-usuarios"></span>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>
