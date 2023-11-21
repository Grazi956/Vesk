<?php
include 'conexao.php'; // Inclua seu arquivo de conexão com o banco de dados

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT nome, endereco, telefone FROM clientes WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode($cliente);
} else {
    echo json_encode(['error' => 'ID não fornecido']);
}
?>
