<?php
include('connect_db.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO clientes (nome, endereco, cpf, telefone) VALUES ('$nome', '$endereco', '$cpf', '$telefone')";

if (mysqli_query($connect, $sql)) {
    $mensagem =  "O cadastro foi realizado com sucesso!";
} else {
    echo "Erro na tentativa de cadastro, tente novamente: " . mysqli_error($connect);
}

mysqli_close($connect);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="src/css/cadastrofun.css"> 
    <script src="cadastrofun.js"></script>
</head>
<body>
    <section>
    <div class='container'>
        <div class='card'>
            <p><?php echo $mensagem ?></p>
            <br><br>
            <nav><a href="home.php" class="botao_nav">VOLTAR</a></nav>
        </div>
    </div>
    </section>
</body>
</html>