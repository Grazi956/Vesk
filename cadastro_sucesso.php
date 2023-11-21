<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notas Fiscais</title>
    <link rel="stylesheet" href="src/css/new_invoice.css">
    <script type="text/javascript" src="src/js/preenche.js"></script>
</head>
<body>
    <section>
        <div class='container'>
            <div class='card'>
                <p>CADASTRO EFETUADO COM SUCESSO!</p>
                <br><br>
                <?php
                if (isset($_GET['id'])) {
                    echo "<p>ID do Cliente: " . htmlspecialchars($_GET['id']) . "</p>";
                }
                ?>
                <nav><a href="home.php" class="botao_nav">SAIR</a></nav>
            </div>
        </div>
    </section>
</body>
</html>
