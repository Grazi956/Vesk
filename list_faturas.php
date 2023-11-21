<?php
include_once 'conexao.php';

$query_faturas = "SELECT * FROM faturas;";
$result_faturas = $conn->query($query_faturas);

$faturas = array(); // Inicializa uma matriz para armazenar os dados

if ($result_faturas->rowCount() > 0) {
    while ($row = $result_faturas->fetch(PDO::FETCH_ASSOC)) {
        $faturas[] = $row; // Adiciona cada linha à matriz
    }
}

$conn = null; // Fechar conexão

// Retorna os dados como JSON
header('Content-Type: application/json');

if (!empty($faturas)) {
    echo json_encode(array('status' => true, 'dados' => $faturas));
} else {
    echo json_encode(array('status' => false, 'msg' => 'Nenhuma fatura encontrada.'));
}
?>
