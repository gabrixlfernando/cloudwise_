<?php
require_once('class/servico.php');
$listarServico = new ServicoClass();
$listar = $listarServico->Listar();
?>
<div class="container">
    <div class="table-responsive">
        <h2 class="tituloListar">
            <a href="index.php?p=servico&s=inserir">Novo Servico</a>
        </h2>

        <table class="table table-hover"    >
            <caption>Listar servicos</caption>
            <thead>
                <tr>
                    <th>TITULO</th>
                    <th>DESCRICAO</th>
                    <th>STATUS</th>
                    <th>ATUALIZAR</th>
                    <th>DESATIVAR</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['tituloServico'] ?></td>
                    <td><?php echo $linha['descricao']?></td>
                    <td>
                        <?php
                    if($linha['statusServico'] == 1){
                        echo 'ativo';
                    }else{
                        echo 'desativo';
                    }
                    ?>
                    </td>
                    <td><a href="index.php?p=servico&s=atualizar&id=<?php echo $linha['idServico'] ?>">ATUALIZAR</a></td>
                    <td><a href="index.php?p=servico&s=desativar&id=<?php echo $linha['idServico'] ?>">DESATIVAR</a></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</div>