<?php

// Verificação de sessão para acessar a página
if (!isset($_SESSION['logado'])) {
	header('Location: index.php');
	exit;
}
// Recupere o ID do usuário do parâmetro de consulta
$idUser = $_GET['id'];
// Busque os dados do usuário no banco de dados com base no ID
$query = "SELECT * FROM clientes WHERE id = $userID";
$resultName = mysqli_query($connect, $sqlName);
$dadosName = mysqli_fetch_array($resultName);
mysqli_close($connect);
