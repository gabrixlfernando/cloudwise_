<?php
require_once('class/usuario.php');
$listarUsuario = new UsuarioClass();
$listar = $listarUsuario->Listar();
?>
<div class="container">
    <div class="table-responsive">
        <h2 class="tituloListar">
            <a href="index.php?p=usuario&u=inserir">Novo Usuario</a>
        </h2>

        <table class="table table-hover">
            <caption>Listar usuarios</caption>
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>FOTO</th>
                    <th>EMAIL</th>
                    <th>TELEFONE</th>
                    <th>SENHA</th>
                    <th>STATUS</th>
                    <th>ATUALIZAR</th>
                    <th>DESATIVAR</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listar as $linha) : ?>
                    <tr>
                        <td><?php echo $linha['nomeUser'] ?></td>
                        <td><?php echo    '<a href="../img/' . $linha['fotoUser'] . '" data-lightbox="image-1" data-title="Nome do Usuário">
                                            <img class="imgTabela" src="../img/' . $linha['fotoUser'] . '" alt="' . $linha['fotoUser'] . '">
                                        </a>' ?>
                        </td>
                        <td><?php echo $linha['emailUser'] ?></td>
                        <td><?php echo $linha['foneUser'] ?></td>
                        <td><?php echo $linha['senhaUser'] ?></td>
                        <td>
                            <?php
                            if ($linha['statusUser'] == 1) {
                                echo 'ativo';
                            } else {
                                echo 'desativo';
                            }
                            ?>
                        </td>
                        <td><a href="index.php?p=usuario&u=atualizar&id=<?php echo $linha['idUser'] ?>">ATUALIZAR</a></td>
                        <td><a href="index.php?p=usuario&u=desativar&id=<?php echo $linha['idUser'] ?>">DESATIVAR</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>