<?php
include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($dados['id'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário enviar o ID!</div>"];
} elseif (empty($dados['nome'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário enviar o nome!</div>"];
} elseif (empty($dados['endereco'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário enviar o endereço!</div>"];
} elseif (empty($dados['cpf'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário enviar o CPF!</div>"];
} elseif (empty($dados['telefone'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário enviar o telefone!</div>"];
} else {
    $query_cliente = "UPDATE clientes SET nome=:nome, endereco=:endereco, cpf=:cpf, telefone=:telefone WHERE id=:id";
    $edit_cliente = $conn->prepare($query_cliente);
    $edit_cliente->bindParam(':nome', $dados['nome']);
    $edit_cliente->bindParam(':endereco', $dados['endereco']);
    $edit_cliente->bindParam(':cpf', $dados['cpf']);
    $edit_cliente->bindParam(':telefone', $dados['telefone']);
    $edit_cliente->bindParam(':id', $dados['id']);

    if($edit_cliente->execute()){
        $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Cliente editado com sucesso!</div>"];
    }else{
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro ao editar o cliente!</div>"];
    }    
}

echo json_encode($retorna);
?>

