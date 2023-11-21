<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planner - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="src/js/script_login.js"></script>
</head>

<body>
    <div class="container">
        <div class="login-form">
            <img src="src/img/logo_if_ceres.png" alt="IF logo" class="logo">
            <form id="login_form">
                <div class="mb-3">
                    <input type="text" class="form-control" name="login" placeholder="Login" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Senha" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="btn_submit">Entrar</button>
                </div>
                <input type="hidden" name="btn_submit" value="true">
                <div class="form-message"></div>
            </form>
            <div class="register-link">
                <p>Não tem uma conta? <a href="cadastro.html">Crie uma aqui</a>.</p>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
