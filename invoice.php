<?php
// Conectar ao banco de dados (substitua os valores conforme sua configuração)
require_once 'connect_db.php';

// Obter os dados do formulário
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$valor = $_POST['valor'];
$data_emissao = $_POST['data_emissao'];
$data_vencimento = $_POST['data_venc'];
$descricao = $_POST['descricao'];
$id_cliente = $_POST['id_cliente']; // Obtém o ID da URL

if (!empty($nome) && !empty($endereco) && !empty($telefone) && !empty($valor) && !empty($data_emissao) && !empty($data_vencimento) && !empty($descricao) && !empty($id_cliente)) {
    // Inserir dados na tabela de faturas
    $sql = "INSERT INTO faturas (data_emissao, data_venc, descricao, valor_total, id_cliente) 
            VALUES ('$data_emissao', '$data_vencimento', '$descricao', '$valor', '$id_cliente')";

    if ($connect->query($sql) === TRUE) {
        $response = array("success" => true, "clienteId" => $id_cliente);
    } else {
        $response = array("success" => false, "message" => "Erro ao cadastrar nota fiscal: " . $connect->error);
    }
} else {
    $response = array("success" => false, "message" => "Dados incompletos");
}

echo json_encode($response); // Responda apenas com JSON

$connect->close();
?>
