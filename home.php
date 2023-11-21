<?php
// Conexão
require_once 'connect_db.php';

// Sessão
//session_start();

//include 'include_session_home.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Planner - Home</title>
    <!-- Adicionando o Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Adicionando o CSS e JS personalizado-->
    <link rel="stylesheet" type="text/css" href="src/css/style_home.css">
	<script type="text/javascript" src="src/js/script_home.js"></script>
    <!-- Adicionando as fontes personalizadas-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:700,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
				<header>
					<nav><a href="index.php" class="botao_nav">SAIR</a></nav> 
				</header>
<body>
		<section class="container">
			<a class="icon-link icon-link-hover" href="new_client.php"><div class="btn_home"><img src="src/img/novo-usuario.png" alt="novo-usuario"><br>Registrar Novo Cliente</div></a><br><br>

			<a class="icon-link icon-link-hover" href="crud.php"><div class="btn_home"><img src="src/img/atualizar.png" alt="atualizar"><br>Atualizar Cliente/Nova Fatura</div></a><br><br>

			<a class="icon-link icon-link-hover" href="lista_fiscal.php"><div class="btn_home"><img src="src/img/buscar.png" alt="buscar"><br>Buscar Notas Fiscais</div></a><br><br>

		</section>
	</body>
</html>

