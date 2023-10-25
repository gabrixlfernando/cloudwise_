<?php


if (isset($_POST['nomeUser'])) {

    require_once('class/usuario.php');

    $nomeUser = $_POST['nomeUser'];


    $fotoUser            = $_FILES['fotoUser'];

    if ($fotoUser['error']) {
        throw new Exception('Error' . $fotoUser['error']);
    }

    if (move_uploaded_file($fotoUser['tmp_name'], '../img/' . $fotoUser['name'])) {
        $fotoUser = 'usuario/' . $fotoUser['name'];
    } else {
        throw new Exception('Error: Não foi possível realizar o Upload da img');
    }


    $emailUser = $_POST['emailUser'];
    $foneUser = $_POST['foneUser'];
    $senhaUser = $_POST['senhaUser'];
    $statusUser = $_POST['statusUser'];

    // Verifica se o checkbox "statusUser" está marcado
    $statusUser = isset($_POST['statusUser']) ? 1 : 0;

    $usuario = new UsuarioClass();

    $usuario->nomeUser = $nomeUser;
    $usuario->fotoUser = $fotoUser;
    $usuario->emailUser = $emailUser;
    $usuario->foneUser = $foneUser;
    $usuario->senhaUser = $senhaUser;
    $usuario->statusUser = $statusUser;

    $usuario->Inserir();
}
?>
<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header cardUser">
            <h2 class="card-title"> Cadastro de Usuario </h2>
        </div>

        <form class="form-horizantal" action="index.php?p=usuario&u=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row rowUser">

                    <div class="col-sm-2">
                        <div class="form-group imagemUser">
                            <label for="imagem">Imagem do usuario</label>
                            <img src="../img/ms-icon-310x310.png" alt="Imagem" class="img-fluid" id="imagemExibida">
                            <input type="file" id="inputImagem" required name="fotoUser" style="display: none;">
                        </div>
                    </div>
                    <div class="col-sm-8 formUser">
                        <div>
                            <label for="nomeUser" class="col-sm-2 col-form-label">Nome do Usuario:</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="nomeUser" name="nomeUser" placeholder="Informe o Título do Serviço">
                            </div>
                        </div>
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="statusUser">Status Usuario</label>
                            <input class="form-check-input" type="checkbox" role="switch" name="statusUser" id="statusUser" checked>
                        </div>
                        <div>
                            <label for="emailUser" class="col-sm-2 col-form-label">Email Usuario:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="emailUser" name="emailUser" rows="1" placeholder="Email:"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="foneUser" class="col-sm-2 col-form-label">Telefone Usuario:</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="foneUser" name="foneUser" rows="1" placeholder="Telefone:"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="senhaUser" class="col-sm-2 col-form-label">Senha Usuario:</label>
                            <div class="col-sm-10">
                                <input type="password" required class="form-control" id="senhaUser" name="senhaUser" rows="1" placeholder="Senha:"></input>
                            </div>
                        </div>
                        <div class="buttonServico">
                            <button type="submit" class="btn btn-primary">Inserir Usuario</button>
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
</script>