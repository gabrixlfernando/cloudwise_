<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location:login.php');
}

require_once('class/login.php');
$usuario = new Login();
$usuario->idUser = $_SESSION['idUsuario'];
$dadosUsuario = $usuario->VerificarLogin();
// var_dump($dadosUsuario);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

  <main class="dashboard">
    <div class="menu">
      <div class="logo">
        <a href="index.php?p=dashboard">
          <img src="../img/logo (3).png" alt="Logo Agência TIPI">
        </a>
      </div>
      <ul>
        <li><a href="index.php?p=site">Site</a></li>
        <li><a href="index.php?p=sobre">Sobre</a></li>
        <li><a href="index.php?p=servico">Serviços</a></li>
        <li><a href="index.php?p=blog">Blog</a></li>
        <li><a href="index.php?p=galeria">Galeria</a></li>
        <li><a href="index.php?p=depoimento">Depoimento</a></li>
        <li><a href="index.php?p=contato">Contato</a></li>
        <li><a href="index.php?p=usuario">Usuario</a></li>
      </ul>
    </div>
    <div class="conteudo">
      <div class="topo-user">
        <div class="user-menu">
          <span>Nome do Usuário</span>
          <a href="img/user.png" data-lightbox="image-1" data-title="Nome do Usuário">
            <img src="img/user.png" alt="Foto User">
          </a>
        </div>
      </div>
      <div class="conteudo-principal">
        <h1>Meu conteúdo da página: <?php echo @$_GET['p'] ?> </h1>
        <?php

        $pagina = @$_GET['p'];

        switch ($pagina) {
          case 'site':
            require_once('site/site.php');
            break;
          case 'sobre':
            require_once('sobre/sobre.php');
            break;
          case 'servico':
            require_once('servico/servico.php');
            break;
          case 'blog':
            require_once('blog/blog.php');
            break;
          case 'galeria':
            require_once('galeria/galeria.php');
            break;
          case 'depoimento':
            require_once('depoimento/depoimento.php');
            break;
          case 'contato':
            require_once('contato/contato.php');
            break;
          case 'usuario':
            require_once('usuario/usuario.php');
            break;
        }

        ?>

      </div><!-- AQUI É INDEX -->
    </div>
  </main>



  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/lightbox.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>