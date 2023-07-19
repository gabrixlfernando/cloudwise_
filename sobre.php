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
        <div class="imgcomo">
                <div id="img-mvv">
                    <img  data-aos="flip-down" src="img/missao.png" id="img-mvv">
                </div>
            </div>
            <div data-aos="fade-down" class="txtcomo">
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
                        <h3><i class="fa-regular fa-circle-check"></i> Impulsionar o Sucesso dos Clientes</h3>
                        <p>Trabalhamos em estreita colaboração com cada cliente para entender suas necessidades, objetivos e desafios específicos, desenvolvendo soluções personalizadas que atendam às suas demandas e alavanquem seu crescimento.  </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Impacto Positivo </h3>
                        <p>Buscamos criar um impacto positivo nas empresas e na comunidade em que atuamos. Ao fornecer soluções de qualidade e impulsionar o crescimento de nossos clientes, contribuímos para o fortalecimento dos negócios e para o desenvolvimento econômico. </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Comunicação e Tecnologia </h3>
                        <p>Acreditamos que a comunicação eficaz e o uso adequado da tecnologia são fundamentais para o sucesso dos negócios no mundo digital em constante evolução.  </p>
                        </i>
                    </li>
                </ul>

                <!-- visão -->
                <ul id="visao">
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Parceria de Longo Prazo </h3>
                        <p>Nossa visão é estabelecer parcerias sólidas e duradouras com nossos clientes, sendo reconhecidos como um parceiro estratégico e confiável em suas jornadas de negócios. </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Excelência em Serviços </h3>
                        <p>Buscamos ser reconhecidos pela qualidade de nossos serviços, oferecendo soluções de comunicação e tecnologia que atendam e superem as expectativas de nossos clientes. </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Crescimento Global </h3>
                        <p>Expandir nossa presença e atuação globalmente, alcançando novos mercados e fortalecendo nossa marca em diferentes regiões do mundo. </p>
                        </i>
                    </li>
                </ul>

                <!-- valores -->
                <ul id="valores">
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Ética </h3>
                        <p>Nós trabalhamos com integridade, respeito e responsabilidade. Nós nos esforçamos para fazer a coisa certa para nossos clientes, colaboradores e comunidade. </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Qualidade e Dedicação </h3>
                        <p>Comprometemo-nos com a qualidade em todas as etapas do nosso trabalho, com dedicação e atenção aos detalhes para fornecer resultados excepcionais. </p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Trabalho em equipe </h3>
                        <p>Nós trabalhamos em estreita colaboração com nossos clientes e entre nós, para garantir que nossos clientes recebam as soluções completas e integradas que precisam para ter sucesso em seus negócios. </p>
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
