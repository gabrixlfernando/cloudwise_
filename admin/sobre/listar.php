<?php
require_once('class.sobre.php');
$listarSobre = new SobreClass();
$listar = $listarSobre->Listar();
?>
<div class="container">
    <div class="table-responsive">
        <h2 class="tituloListar">
            <a href="index.php?p=sobre&s=inserir">Novo Sobre</a>
        </h2>

        <table class="table table-hover"    >
            <caption>Listar conteudo Sobre ATIVO</caption>
            <thead>
                <tr>
                    <th>TITULO</th>
                    <th>DESCRICAO</th>
                    <th>LINK SOBRE</th>
                    <th>FOTO SOBRE 1</th>
                    <th>FOTO SOBRE 2</th>
                    <th>FOTO SOBRE 3</th>
                    <th>FOTO SOBRE 4</th>
                    <th>DESCRICAO FOTO</th>
                    <th>MISSAO SOBRE</th>
                    <th>VISAO SOBRE</th>
                    <th>VALORES SOBRE</th>
                    <th>STATUS</th>
                    <th>ATUALIZAR</th>
                    <th>DESATIVAR</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['tituloSobre'] ?></td>
                    <td><?php echo $linha['descricaoSobre']?></td>
                    <td><?php echo $linha['urlSobre']?></td>
                    <td><?php echo $linha['fotoSobre1']?></td>
                    <td><?php echo $linha['fotoSobre2']?></td>
                    <td><?php echo $linha['fotoSobre3']?></td>
                    <td><?php echo $linha['fotoSobre4']?></td>
                    <td><?php echo $linha['descricaoFotoSobre']?></td>
                    <td><?php echo $linha['missaoSobre']?></td>
                    <td><?php echo $linha['visaoSobre']?></td>
                    <td><?php echo $linha['valoresSobre']?></td>
                    <td>
                        <?php
                    if($linha['statusSobre'] == 1){
                        echo 'ativo';
                    }else{
                        echo 'desativo';
                    }
                    ?>
                    </td>
                    <td><a href="index.php?p=sobre&s=atualizar&id=<?php echo $linha['idSobre'] ?>">ATUALIZAR</a></td>
                    <td><a href="index.php?p=sobre&s=desativar&id=<?php echo $linha['idSobre'] ?>">DESATIVAR</a></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</div>