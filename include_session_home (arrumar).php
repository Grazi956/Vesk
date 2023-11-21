<?php

// Verificação de sessão para acessar a página
if (!isset($_SESSION['logado'])) {
	header('Location: index.php');
	exit;
}

$idUser = $_SESSION['id_user'];
$sqlName = "SELECT * FROM users WHERE id = '$idUser'";
$resultName = mysqli_query($connect, $sqlName);
$dadosName = mysqli_fetch_array($resultName);
mysqli_close($connect);
