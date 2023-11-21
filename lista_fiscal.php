<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Faturas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


                <header>
					<nav><a href="home.php" class="botao_nav">SAIR</a></nav> 
				</header>

<style>
        header{
  margin-top: 25px;
}

a {
  text-decoration: none;
  color:#161623;
}   

.botao_nav{
  text-decoration: none;
  background-color: none;
  border-style: solid;
  border-color: #161623;
  margin: 20px;
  padding: 10px;
  border-radius: 10px;
}
.botao_nav:hover{
  color: #0051ff;
  background-color: none;
  position: top;
}
</style>

<body>

<div class="container mt-5">
    <h2>Lista de Faturas</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data Emissão</th>
                <th>Data Vencimento</th>
                <th>Descrição</th>
                <th>Valor Total</th>
                <th>ID Cliente</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tabelaFaturas">
            <!-- Conteúdo da tabela será carregado dinamicamente com JavaScript -->
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./src/js/script_pesquisa_invoice.js"></script>
</body>
</html>
