<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cloudwise | Agência De Desenvolvimento Web</title>

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"/>

    <link rel="shortcut icon" href="img/logo (3).png" type="image/x-icon">
    
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Menu -->
    <?php require_once('conteudo/topo.php'); ?>
    <main>
      <!-- Sobre -->
      <?php require_once('conteudo/sobre.php'); ?>
      <!-- Missão, visão e valores -->
      <section data-aos="zoom-in-up" class="como" id="como-mvv">
        <div class="comotrab site">
        <div>
                <div>
                    <img src="img/missao.png" id="img-mvv">
                </div>
            </div>
            <div>
                <ul>
                    <li>
                        <input type="radio" name="btn-mvv" id="btn-missao">
                        <label for="btn-missao">Missão</label>
                    </li>
                    <li>
                        <input type="radio" name="btn-mvv" id="btn-visao">
                        <label for="btn-visao">Visão</label>
                    </li>
                    <li>
                        <input type="radio" name="btn-mvv" id="btn-valores">
                        <label for="btn-valores">Valores</label>
                    </li>
                </ul>
                <!-- missão -->
                <ul id="missao">
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Missão 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia adipisci quis, maxime assumenda dicta harum aut tempore enim saepe quo </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Missão 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloremque, inventore atque unde, qui aliquam vero incidunt illum  </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Missão 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quis, accusantium delectus ab numquam quos quo, minus dolores exercitationem  </p>
                        </i>
                    </li>
                </ul>

                <!-- visão -->
                <ul id="visao">
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Visão 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia adipisci quis, maxime assumenda dicta harum aut tempore enim saepe quo </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Visão 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia adipisci quis, maxime assumenda dicta harum aut tempore enim saepe quo </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Visão 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia adipisci quis, maxime assumenda dicta harum aut tempore enim saepe quo </p>
                        </i>
                    </li>
                </ul>

                <!-- valores -->
                <ul id="valores">
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Valores 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia adipisci quis, maxime assumenda dicta harum aut tempore enim saepe quoo </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Valores 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia adipisci quis, maxime assumenda dicta harum aut tempore enim saepe quo </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Valores 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia adipisci quis, maxime assumenda dicta harum aut tempore enim saepe quo </p>
                        </i>
                    </li>
                </ul>
            </div>
        </div>
        </section>


      <!-- Orçamento -->
      <?php require_once('conteudo/orcamento.php'); ?>
    </main>

    <!-- Footer -->
    <?php require_once('conteudo/rodape.php'); ?>
   
    <!-- JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
