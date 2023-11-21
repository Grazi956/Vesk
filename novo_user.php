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
    <script type="text/javascript" src="src/js/script_crud_insert.js"></script>
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
        <form id="form_new_client">
          <h3>New Client</h3>
          <div class = "form">
            <label for="nome">Login:</label><br>
            <input type="text" name="login" id="login" required><br><br>

            <label for="telefone">Nome:</label><br>
            <input type="text" name="nome" id="nome" required><br><br>

            <label for="endereco">Senha:</label><br>
            <input type="text" name="senha" id="senha" required><br><br>

            <label for="endereco" required>CPF:</label><br>
            <input type="text" name="cpf" id="cpf" ><br><br>

            <label for="endereco" required>Endereço:</label><br>
            <input type="text" name="endereco" id="endereco" ><br><br>

            <label for="endereco" required>Turma:</label><br>
            <input type="text" name="turma" id="turma" ><br><br>

            <label for="endereco" required>Matricula:</label><br>
            <input type="text" name="matricula" id="matricula" ><br><br>

            <center><div class="form-client"></div></center>

            <button class="btn_register" name="btn_new_user">Registrar</button>

            <input type="hidden" name="btn_register" value="true"><br>

          </div>
        </form>
      </div>

    </body>
  </html>
