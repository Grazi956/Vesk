<?php
// Conexão
require_once 'connect_db.php';

// Sessão
session_start();

include 'include_session_home.php';
?>
<!DOCTYPE HTML>
<html lang="en">
	<header><meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>Planner</title>
	<!--CSS, Scripts e ajax -->
	<link rel="stylesheet" type="text/css" href="src/css/style_crud_update_delete.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="src/js/script_pesquisa.js"></script>
	<!--fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:700,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<a href="home.php"><img src="src/img/felix.png" alt="Cat Glass"></a>

	<nav>
			<li><?php echo $dadosName['username'] ?></li>
			<li><a href="home.php"> Home </a><li>
			<li><a href="logout.php"> Logout </a><li>
	</nav>
</header>
<body>
	<div class="container">
			<form method="POST" id="form-pesquisa" action="">
				<label>Search: </label>
				<input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o nome do usuário" autofocus><br>
				<table>
					<thead>
						<tr>
							<th>Usuário</th>
							<th>Nome</th>
							<th>Endereço</th>
							<th>Turma</th>
							<th>Matrícula</th>
							<th>Editar</th>
							<th>Deletar</th>
						</tr>
					</thead>
					<tbody class="resultado">
					</tbody>
				</table>
			</form>
	</div>
</body>
</html>
