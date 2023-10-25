<?php
if (isset($_POST['tituloSobre'])) {

    require_once('class/sobre.php');

    $sobre = new SobreClass();

    $tituloSobre                = $_POST['tituloSobre'];
    $descricaoSobre             = $_POST['descricaoSobre'];
    $descricaoSobre2            = $_POST['descricaoSobre2'];
    $descricaoFotoSobre1        = $_POST['descricaoFotoSobre1'];
    $descricaoFotoSobre2        = $_POST['descricaoFotoSobre2'];
    $descricaoFotoSobre3        = $_POST['descricaoFotoSobre3'];
    $descricaoFotoSobre4        = $_POST['descricaoFotoSobre4'];
    $missaoSobre1               = $_POST['missaoSobre1'];
    $missaoSobre2               = $_POST['missaoSobre2'];
    $missaoSobre3               = $_POST['missaoSobre3'];
    $visaoSobre1                = $_POST['visaoSobre1'];
    $visaoSobre2                = $_POST['visaoSobre2'];
    $visaoSobre3                = $_POST['visaoSobre3'];
    $valoresSobre1              = $_POST['valoresSobre1'];
    $valoresSobre2              = $_POST['valoresSobre2'];
    $valoresSobre3              = $_POST['valoresSobre3'];

    // Verifica se o checkbox "statusSobre" está marcado
    $sobre->$statusSobre = isset($_POST['statusSobre']) ? 1 : 0;

    //FOTO SOBRE 1

    $fotoSobre1            = $_FILES['fotoSobre1'];

    if ($fotoSobre1['error']) {
        throw new Exception('Error' . $fotoSobre1['error']);
    }

    if (move_uploaded_file($fotoSobre1['tmp_name'], '../img/' . $fotoSobre1['name'])) {
        $fotoSobre1 = 'sobre/' . $fotoSobre1['name'];
    } else {
        throw new Exception('Error: Não foi possível realizar o Upload da img');
    }

    //FOTO SOBRE 2

    $fotoSobre2            = $_FILES['fotoSobre2'];

    if ($fotoSobre2['error']) {
        throw new Exception('Error' . $fotoSobre2['error']);
    }

    if (move_uploaded_file($fotoSobre2['tmp_name'], '../img/' . $fotoSobre2['name'])) {
        $fotoSobre2 = 'sobre/' . $fotoSobre2['name'];
    } else {
        throw new Exception('Error: Não foi possível realizar o Upload da img');
    }

    //FOTO SOBRE 3

    $fotoSobre3            = $_FILES['fotoSobre3'];

    if ($fotoSobre3['error']) {
        throw new Exception('Error' . $fotoSobre3['error']);
    }

    if (move_uploaded_file($fotoSobre3['tmp_name'], '../img/' . $fotoSobre3['name'])) {
        $fotoSobre3 = 'sobre/' . $fotoSobre3['name'];
    } else {
        throw new Exception('Error: Não foi possível realizar o Upload da img');
    }

    //FOTO SOBRE 4

    $fotoSobre4            = $_FILES['fotoSobre4'];

    if ($fotoSobre4['error']) {
        throw new Exception('Error' . $fotoSobre4['error']);
    }

    if (move_uploaded_file($fotoSobre4['tmp_name'], '../img/' . $fotoSobre4['name'])) {
        $fotoSobre4 = 'sobre/' . $fotoSobre4['name'];
    } else {
        throw new Exception('Error: Não foi possível realizar o Upload da img');
    }

    $sobre->tituloSobre             = $tituloSobre;
    $sobre->descricaoSobre          = $descricaoSobre;
    $sobre->descricaoSobre2         = $descricaoSobre2;
    $sobre->fotoSobre1              = $fotoSobre1;
    $sobre->fotoSobre2              = $fotoSobre2;
    $sobre->fotoSobre3              = $fotoSobre3;
    $sobre->fotoSobre4              = $fotoSobre4;
    $sobre->descricaoFotoSobre1     = $descricaoFotoSobre1;
    $sobre->descricaoFotoSobre2     = $descricaoFotoSobre2;
    $sobre->descricaoFotoSobre3     = $descricaoFotoSobre3;
    $sobre->descricaoFotoSobre4     = $descricaoFotoSobre4;
    $sobre->missaoSobre1            = $missaoSobre1;
    $sobre->missaoSobre2            = $missaoSobre2;
    $sobre->missaoSobre3            = $missaoSobre3;
    $sobre->visaoSobre1             = $visaoSobre1;
    $sobre->visaoSobre2             = $visaoSobre2;
    $sobre->visaoSobre3             = $visaoSobre3;
    $sobre->valoresSobre1           = $valoresSobre1;
    $sobre->valoresSobre2           = $valoresSobre2;
    $sobre->valoresSobre3           = $valoresSobre3;
    $sobre->statusSobre             = $statusSobre;

    $sobre->Inserir();
}
?>
<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"> Cadastro de Sobre </h2>
        </div>
        <form class="form-horizantal" action="index.php?p=sobre&s=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row rowsobre">

                    <!-- //FOTOS SOBRE -->
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="imagem"></label>
                            <img src="../img/ms-icon-310x310.png" alt="Imagem" class="img-fluid" id="imagemExibida">
                            <input type="file" id="inputImagem" required name="fotoSobre1" style="display: none;">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="imagem"></label>
                            <img src="../img/ms-icon-310x310.png" alt="Imagem" class="img-fluid" id="imagemExibida2">
                            <input type="file" id="inputImagem2" required name="fotoSobre2" style="display: none;">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="imagem"></label>
                            <img src="../img/ms-icon-310x310.png" alt="Imagem" class="img-fluid" id="imagemExibida3">
                            <input type="file" id="inputImagem3" required name="fotoSobre3" style="display: none;">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="imagem"></label>
                            <img src="../img/ms-icon-310x310.png" alt="Imagem" class="img-fluid" id="imagemExibida4">
                            <input type="file" id="inputImagem4" required name="fotoSobre4" style="display: none;">
                        </div>
                    </div>

                    <!-- //TITULO SOBRE -->
                    <div class="col-sm-8 formServico">
                        <div>
                            <label for="tituloSobre" class="col-sm-2 col-form-label">Título do Sobre:</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="tituloSobre" name="tituloSobre" placeholder="Informe o Título do Sobre">
                            </div>
                        </div>

                        <!-- //STATUS SOBRE -->
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="statusSobre">Status Sobre</label>
                            <input class="form-check-input" type="checkbox" role="switch" name="statusSobre" id="statusSobre" checked>
                        </div>

                        <!-- //TEXTO SOBRE -->
                        <div>
                            <label for="descricaoSobre" class="col-sm-2 col-form-label">Texto do Sobre:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="descricaoSobre" name="descricaoSobre" rows="3" placeholder="Digite sua mensagem aqui"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="descricaoSobre2" class="col-sm-2 col-form-label">Texto do Sobre 2:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="descricaoSobre2" name="descricaoSobre2" rows="3" placeholder="Digite sua mensagem aqui"></textarea>
                            </div>
                        </div>

                        <!-- //DESCRICAO FOTOS -->
                        <div>
                            <label for="descricaoFotoSobre1" class="col-sm-2 col-form-label">Descrição foto 1:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="descricaoFotoSobre1" name="descricaoFotoSobre1" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="descricaoFotoSobre2" class="col-sm-2 col-form-label">Descrição foto 2:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="descricaoFotoSobre2" name="descricaoFotoSobre2" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="descricaoFotoSobre3" class="col-sm-2 col-form-label">Descrição foto 3:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="descricaoFotoSobre3" name="descricaoFotoSobre3" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="descricaoFotoSobre4" class="col-sm-2 col-form-label">Descrição foto 4:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="descricaoFotoSobre4" name="descricaoFotoSobre4" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>

                        <!-- //MISSAO -->
                        <div>
                            <label for="missaoSobre1" class="col-sm-2 col-form-label">Missao 1:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="missaoSobre1" name="missaoSobre1" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="missaoSobre2" class="col-sm-2 col-form-label">Missao 2:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="missaoSobre2" name="missaoSobre2" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="missaoSobre3" class="col-sm-2 col-form-label">Missao 3:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="missaoSobre3" name="missaoSobre3" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>

                        <!-- //VISAO -->
                        <div>
                            <label for="visaoSobre1" class="col-sm-2 col-form-label">Visao 1:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="visaoSobre1" name="visaoSobre1" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="visaoSobre2" class="col-sm-2 col-form-label">Visao 2:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="visaoSobre2" name="visaoSobre2" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="visaoSobre3" class="col-sm-2 col-form-label">Visao 3:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="visaoSobre3" name="visaoSobre3" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>

                        <!-- //VALORES -->
                        <div>
                            <label for="valoresSobre1" class="col-sm-2 col-form-label">Valores 1:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="valoresSobre1" name="valoresSobre1" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="valoresSobre2" class="col-sm-2 col-form-label">Valores 2:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="valoresSobre2" name="valoresSobre2" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="valoresSobre3" class="col-sm-2 col-form-label">Valores 3:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="valoresSobre3" name="valoresSobre3" rows="2" placeholder="Digite a descrição aqui"></textarea>
                            </div>
                        </div>

                        <!-- //LINK -->
                        <div>
                            <label for="urlSobre" class="col-sm-2 col-form-label">Link do Sobre:</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="urlSobre" name="urlSobre" placeholder="Informe o Título do Sobre">
                            </div>
                        </div>
                        <div class="buttonSobre">
                            <button type="submit" class="btn btn-primary">Inserir Sobre</button>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </div>
</div>

<script>
    document.getElementById('imagemExibida').addEventListener('click', function() {
        document.getElementById('inputImagem').click();
    });

    document.getElementById('inputImagem').addEventListener('change', function(event) {
        let imagemExibida = document.getElementById('imagemExibida');
        let arquivo = event.target.files[0];

        if (arquivo) {

            let carregar = new FileReader();

            carregar.onload = function(e) {
                imagemExibida.src = e.target.result;
            };

            carregar.readAsDataURL(arquivo);
        }

    });

    document.getElementById('imagemExibida2').addEventListener('click', function() {
        document.getElementById('inputImagem2').click();
    });

    document.getElementById('inputImagem2').addEventListener('change', function(event) {
        let imagemExibida2 = document.getElementById('imagemExibida2');
        let arquivo = event.target.files[0];

        if (arquivo) {

            let carregar = new FileReader();

            carregar.onload = function(e) {
                imagemExibida2.src = e.target.result;
            };

            carregar.readAsDataURL(arquivo);
        }

    });

    document.getElementById('imagemExibida3').addEventListener('click', function() {
        document.getElementById('inputImagem3').click();
    });

    document.getElementById('inputImagem3').addEventListener('change', function(event) {
        let imagemExibida3 = document.getElementById('imagemExibida3');
        let arquivo = event.target.files[0];

        if (arquivo) {

            let carregar = new FileReader();

            carregar.onload = function(e) {
                imagemExibida3.src = e.target.result;
            };

            carregar.readAsDataURL(arquivo);
        }

    });

    document.getElementById('imagemExibida4').addEventListener('click', function() {
        document.getElementById('inputImagem4').click();
    });

    document.getElementById('inputImagem4').addEventListener('change', function(event) {
        let imagemExibida4 = document.getElementById('imagemExibida4');
        let arquivo = event.target.files[0];

        if (arquivo) {

            let carregar = new FileReader();

            carregar.onload = function(e) {
                imagemExibida4.src = e.target.result;
            };

            carregar.readAsDataURL(arquivo);
        }

    });
</script>

