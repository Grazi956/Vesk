<?php
// Conexão
require_once 'connect_db.php';
// Sessão
session_start();

// Verifica se o usuário clicou no botão de login
if (isset($_POST['btn_submit'])) {
    $erros = array();

    $login = mysqli_real_escape_string($connect, $_POST['login']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    // Cria um vetor de erros e armazena a mensagem de erro, se login e senha estiverem vazios
    if (empty($login) || empty($password)) {
        $erros[] = "Enter your login/password";
    } else {
        $sql = "SELECT login FROM users WHERE login = '$login'";
        $result = mysqli_query($connect, $sql);

        // Se existir algum resultado no banco, compara login e senha
        if (mysqli_num_rows($result) > 0) {
            $password = hash('sha256', $password); // Usando sha2 para criar o hash da senha
            $sql = "SELECT * FROM users WHERE login = '$login' AND senha = '$password'";
            $result = mysqli_query($connect, $sql);

            // Cria as sessões e redireciona a página do usuário
            if (mysqli_num_rows($result) == 1) {
                $dados = mysqli_fetch_array($result);
                $_SESSION['logado'] = true;
                $_SESSION['id_user'] = $dados['id'];

                // Verifica se a chave "imagem" está definida no array antes de atribuí-la à sessão
                if (isset($dados['imagem'])) {
                    $_SESSION['imagem'] = $dados['imagem'];
                }

                // PHP retorna um objeto JSON contendo a chave redirect com o valor da página para redirecionar
                $response = array('redirect' => 'home.php');
                header('Content-Type: application/json');
                echo json_encode($response);
                exit;
            } else {
                $erros[] = "Login e/ou Senha incorretos";
                $response = array('message' => $erros[0]);
                header('Content-Type: application/json');
                echo json_encode($response);
                exit;
            }
        } else {
            $erros[] = "Não foi possível encontrar sua conta";
            $response = array('message' => $erros[0]);
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }
    }

    // Trate os erros e exiba as mensagens ao usuário
    if (!empty($erros)) {
        $response = array('message' => $erros[0]);
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}

// Feche a conexão com o banco de dados
mysqli_close($connect);
?>
