<?php
require_once('class/login.php');
session_start();
$msgErro = ''; 

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //$senha = password_hash($senha, PASSWORD_DEFAULT);
    //         md5($senha);
    $login = new Login();
    $login->emailUser = $email;
    $login->senhaUser = $senha;
    $dadosLogin = $login->VerificarLogin();

    // var_dump($dadosLogin);

    if ($dadosLogin == NULL) {
        $msgErro = 'Falha na autenticação, tente novamente';
    } else {
        $_SESSION['login']      = $dadosLogin['emailUser'];
        $_SESSION['idUsuario']  = $dadosLogin['idUser'];

        header('Location: index.php');
        exit();
    }
}

?>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleLogin.css">

    <title>Cloud Wise login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" action="#" method="POST">
        <img class="mb-4" src="../img/logo (3).png" alt="" width="92" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Por favor inserir os dados de acesso</h1>
        <label for="email" class="sr-only">Endereço de email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email:"  required autofocus>
        <label for="senha" class="sr-only">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha:" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembrar de mim
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy;Cloud Wise 2023</p>
    </form>
</body>

</html>