<?php
$id = $_GET['id'];
require_once('class/servico.php');
$servico = new ServicoClass($id);

if (isset($_POST['tituloServico'])) {
    $tituloServico = $_POST['tituloServico'];
    $descricao = $_POST['descricao'];
    
    // Verifica se o checkbox "statusServico" está marcado
    $statusServico = isset($_POST['statusServico']) ? 1 : 0;

    $servico->tituloServico = $tituloServico;
    $servico->descricao = $descricao;
    $servico->statusServico = $statusServico;

    $servico->Atualizar();
}
?>
<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"> Cadastro de Serviço </h2>
        </div>

        <form class="form-horizantal" action="index.php?p=servico&s=atualizar&id=<?php echo $servico->idServico ?>"
            method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-sm-8 formServico">
                        <div>
                            <label for="tituloServico" class="col-sm-2 col-form-label">Título do Serviço:</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="tituloServico" name="tituloServico"
                                    placeholder="Informe o Título do Serviço"
                                    value="<?php echo $servico->tituloServico ?>">
                            </div>
                        </div>
                        <div class="form-check form-switch">
                        <label class="form-check-label" for="statusServico">Status Servico</label>  
                            <input class="form-check-input" type="checkbox" role="switch" 
                            value="<?php echo $servico->statusServico ?>" name="statusServico" 
                                id="statusServico" checked>
                        </div>

                        <div>
                            <label for="descricao" class="col-sm-2 col-form-label">Descricao do Serviço:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="descricao" name="descricao" rows="5"
                                    placeholder="Digite sua mensagem aqui"><?php echo $servico->descricao ?></textarea>
                            </div>
                        </div>
                        <div class="buttonServico">
                            <button type="submit" class="btn btn-primary">Atualizar Serviço</button>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </div>
</div>