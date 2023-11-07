<?php
require_once('admin/class/servico.php');

$listarServico = new ServicoClass();
$listar = $listarServico->Listar();
?>

<section data-aos="fade-up" data-aos-duration="3000" class="cnt-servicos">


  <div class=" servicos site">
    <h2><i class="fa-solid fa-wrench"></i>Serviços que podem te ajudar</h2>
    <div>
      <?php foreach (array_slice($listar, 0, 4) as $linha): ?>
        <div data-aos="fade-up" data-aos-duration="1500">
          <h3><i class="fa-solid fa-pen-to-square"></i>
            <?php echo $linha['tituloServico'] ?></h3>
            <p>
              <?php echo $linha['descricao'] ?>
            </p>
            <!-- <a href="servicos.php">Leia Mais<i class="fa-solid fa-arrow-up-right-from-square"></i></a> -->
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
  <div class=" servicos site">
    <h2><i class="fa-solid fa-wrench"></i>Serviços que podem te ajudar</h2>
    <div>
      <?php foreach (array_slice($listar, 0, 4) as $linha): ?>
        <div data-aos="fade-up" data-aos-duration="1500">
          <h3><i class="fa-solid fa-pen-to-square"></i>
            <?php echo $linha['tituloServico'] ?></h3>
            <p>
              <?php echo $linha['descricao'] ?>
            </p>
            <!-- <a href="servicos.php">Leia Mais<i class="fa-solid fa-arrow-up-right-from-square"></i></a> -->
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>