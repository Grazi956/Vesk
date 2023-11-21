<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Fiscal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

                <header>
					<nav><a href="lista_fiscal.php" class="botao_nav">SAIR</a></nav> 
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
    <h2>Detalhes da Nota Fiscal</h2>

    <?php
    include_once 'conexao.php';

    // Obtém o ID da fatura da URL
    $id_fatura = isset($_GET['id']) ? $_GET['id'] : '';

    // Verifica se o ID é numérico
    if (!ctype_digit($id_fatura)) {
        echo '<div class="alert alert-danger" role="alert">ID inválido.</div>';
    } else {
        // Consulta SQL para obter os detalhes da fatura com base no ID
        $query_fatura = "SELECT * FROM faturas WHERE id = :id";
        $stmt = $conn->prepare($query_fatura);
        $stmt->bindParam(':id', $id_fatura, PDO::PARAM_INT);
        $stmt->execute();

        // Verifica se a fatura foi encontrada
        if ($stmt->rowCount() > 0) {
            $fatura = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <form>
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" value="<?= $fatura['id'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="data_emissao">Data Emissão</label>
                    <input type="text" class="form-control" id="data_emissao" value="<?= $fatura['data_emissao'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="data_venc">Data Vencimento</label>
                    <input type="text" class="form-control" id="data_venc" value="<?= $fatura['data_venc'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" value="<?= $fatura['descricao'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="valor_total">Valor Total</label>
                    <input type="text" class="form-control" id="valor_total" value="<?= $fatura['valor_total'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_cliente">ID Cliente</label>
                    <input type="text" class="form-control" id="id_cliente" value="<?= $fatura['id_cliente'] ?>" readonly>
                </div>
            </form>
            <?php
        } else {
            echo '<div class="alert alert-danger" role="alert">Fatura não encontrada.</div>';
        }
    }

    $conn = null; // Fechar conexão
    ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
