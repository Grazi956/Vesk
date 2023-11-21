<?php

//Conexão com banco de dados
$servername = "mariadb-server";
$username = "root";
$password = "123";
$db_name = "fiscal";

$connect = mysqli_connect($servername, $username, $password, $db_name);
if(mysqli_connect_error()):
	echo "Error: ".mysqli_connect_error();
endif;

?>
