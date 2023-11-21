<?php

$host = "mariadb-server";
$user = "root";
$pass = "123";
$dbname = "fiscal";

try{
    //Conexão com a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
    //$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //echo "Conexão com banco de dados realizado com sucesso!";
}  catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $err->getMessage();
}