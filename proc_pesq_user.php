<?php
// Conexão
include_once 'connect_db.php';

$usuarios = $_POST['palavra'];
$usuarios = mysqli_real_escape_string($connect, $usuarios);

// Pesquisar no banco de dados nome do usuário referente à palavra digitada
$result_user = "SELECT * FROM users WHERE username LIKE '%$usuarios%' OR login LIKE '%$usuarios%' ORDER BY username ASC LIMIT 50";
$resultado_user = mysqli_query($connect, $result_user);

if (($resultado_user) && ($resultado_user->num_rows != 0)) {
    while ($row_user = mysqli_fetch_assoc($resultado_user)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row_user['login']) . "</td>";
        echo "<td>" . htmlspecialchars($row_user['username']) . "</td>";
        echo "<td>" . htmlspecialchars($row_user['address']) . "</td>";
        echo "<td>" . htmlspecialchars($row_user['class']) . "</td>";
        echo "<td>" . htmlspecialchars($row_user['registration_number']) . "</td>";
        echo "<td><a href='editar_usuario.php?id=" . $row_user['id'] . "'>Editar</a></td>";
        echo "<td><a href='delete_user.php?id=" . $row_user['id'] . "'>Deletar</a></td>";
        echo "</tr>";
    }
} else {
    echo "Não foram encontrados clientes.";
}
mysqli_close($connect);
?>
