<?php
require_once('class/sobre.php');
$listarSobre = new SobreClass();
$listar = $listarSobre->Listar();
?>
<div class="container">
    <div class="table-responsive">
        <h2 class="tituloListar">
            <a href="index.php?p=sobre&so=inserir">Novo Sobre</a>
        </h2>

        <table class="table table-hover">
            <caption>Listar conteudo Sobre ATIVO</caption>
            <thead>
                <tr>
                    <th>TITULO</th>
                    <th>DESCRICAO</th>
                    <th>DESCRICAO2</th>
                    <th>LINK SOBRE</th>
                    <th>FOTO SOBRE 1</th>
                    <th>FOTO SOBRE 2</th>
                    <th>FOTO SOBRE 3</th>
                    <th>FOTO SOBRE 4</th>
                    <th>MISSAO SOBRE1</th>
                    <th>MISSAO SOBRE2</th>
                    <th>MISSAO SOBRE3</th>
                    <th>VISAO SOBRE1</th>
                    <th>VISAO SOBRE2</th>
                    <th>VISAO SOBRE3</th>
                    <th>VALORES SOBRE1</th>
                    <th>VALORES SOBRE2</th>
                    <th>VALORES SOBRE3</th>
                    <th>STATUS</th>
                    <th>ATUALIZAR</th>
                    <th>DESATIVAR</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listar as $linha) : ?>
                    <tr>
                        <td><?php echo $linha['tituloSobre'] ?></td>
                        <td><?php echo $linha['descricaoSobre'] ?></td>
                        <td><?php echo $linha['descricaoSobre2'] ?></td>
                        <td><?php echo $linha['urlSobre'] ?></td>
                        <td><?php echo    '<a href="../img/' . $linha['fotoSobre1'] . '" data-lightbox="image-1" data-title="Nome do Usuário">
                                            <img class="imgTabela" src="../img/' . $linha['fotoSobre1'] . '" alt="' . $linha['descricaoFotoSobre1'] . '">
                                        </a>' ?>
                        </td>
                        <td><?php echo    '<a href="../img/' . $linha['fotoSobre2'] . '" data-lightbox="image-2" data-title="Nome do Usuário">
                                            <img class="imgTabela" src="../img/' . $linha['fotoSobre2'] . '" alt="' . $linha['descricaoFotoSobre2'] . '">
                                        </a>' ?>
                        </td>
                        <td><?php echo    '<a href="../img/' . $linha['fotoSobre3'] . '" data-lightbox="image-3" data-title="Nome do Usuário">
                                            <img class="imgTabela" src="../img/' . $linha['fotoSobre3'] . '" alt="' . $linha['descricaoFotoSobre3'] . '">
                                        </a>' ?>
                        </td>
                        <td><?php echo    '<a href="../img/' . $linha['fotoSobre4'] . '" data-lightbox="image-4" data-title="Nome do Usuário">
                                            <img class="imgTabela" src="../img/' . $linha['fotoSobre4'] . '" alt="' . $linha['descricaoFotoSobre4'] . '">
                                        </a>' ?>
                        </td>
                        <td><?php echo $linha['missaoSobre1'] ?></td>
                        <td><?php echo $linha['missaoSobre2'] ?></td>
                        <td><?php echo $linha['missaoSobre3'] ?></td>
                        <td><?php echo $linha['visaoSobre1'] ?></td>
                        <td><?php echo $linha['visaoSobre2'] ?></td>
                        <td><?php echo $linha['visaoSobre3'] ?></td>
                        <td><?php echo $linha['valoresSobre1'] ?></td>
                        <td><?php echo $linha['valoresSobre2'] ?></td>
                        <td><?php echo $linha['valoresSobre3'] ?></td>
                        <td>
                            <?php
                            if ($linha['statusSobre'] == 1) {
                                echo 'ativo';
                            } else {
                                echo 'desativo';
                            }
                            ?>
                        </td>
                        <td><a href="index.php?p=sobre&so=atualizar&id=<?php echo $linha['idSobre'] ?>">ATUALIZAR</a></td>
                        <td><a href="index.php?p=sobre&so=desativar&id=<?php echo $linha['idSobre'] ?>">DESATIVAR</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>