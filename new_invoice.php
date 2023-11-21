<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notas Fiscais</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="src/css/new_invoice.css">
    <script type="text/javascript" src="src/js/preenche.js"></script>
    <script type="text/javascript" src="src/js/cad_invoice.js"></script>

</head>

            <header>
				<nav><a href="home.php" class="botao_nav">SAIR</a></nav> 
			</header>

<body>
    <section>
        <div class="container">
            <div class="card">
                <h1>Cadastro de Notas Fiscais</h1>
                <form id="notaFiscalForm">
                    <label for="nome">Nome da Pessoa:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" required>

                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" required>

                    <label for="valor">Valor:</label>
                    <input type="number" id="valor" name="valor" required>

                    <label for="data_emissao">Data emissão:</label>
                    <input type="text" id="data_emissao" name="data_emissao" required>

                    <label for="data_venc">Data vencimento:</label>
                    <input type="text" id="data_venc" name="data_venc" required>

                    <label for="descricao">Descrição do Produto:</label>
                    <input type="text" id="descricao" name="descricao" required>

                    <label for="id_cliente">ID do Cliente:</label>
                    <input type="text" id="id_cliente" name="id_cliente" readonly>

                    <button type="submit">Cadastrar Nota Fiscal</button>
                    <div id="success-message"></div>
                    <div class="form-message"></div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
