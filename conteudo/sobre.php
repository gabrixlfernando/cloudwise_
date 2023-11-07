 <section data-aos="fade-up" data-aos-duration="1500" class="cnt-sobre">

   <div class="sobre site">
     <div data-aos="fade-up" data-aos-duration="1500" class="txtsobre">
       <h2>
         <i class="fa-solid fa-file-code"></i>Sobre a
         <span style="color: #f2f2f2; font-size: 35px">Cloud</span>
         <span style="color: #ff8900; font-size: 35px">Wise</span>
       </h2>
       <?php foreach (array_slice($listar, 0, 1) as $linha) : ?>
       <p>
         <?php echo $linha['descricaoSobre'] ?>
         <!-- A <span style="color: #f2f2f2; font-size: 21px">Cloud</span>
              <span style="color: #ff8900; font-size: 21px">Wise</span> é uma
              agência de criação de sites especializada em atender pequenos e
              médios empreendedores que buscam se destacar na internet, nossa
              equipe é formada por ainda estudantes que buscam oferecer soluções
              personalizadas e sob medida para cada cliente. -->
       </p>
       <p>
         <?php echo $linha['descricaoSobre2'] ?>
       </p>

       <a href="<?php echo $linha['urlSobre'] ?>">Quem Somos<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
     </div>
     
       <div data-aos="zoom-in" data-aos-duration="1500" class="sobreimg"><D/div>
           <img src="img/<?php echo $linha['fotoSobre1'] ?>" alt="<?php echo $linha['descricaoFotoSobre1'] ?>" />
           <img src="img/<?php echo $linha['fotoSobre2'] ?>" alt="<?php echo $linha['descricaoFotoSobre2'] ?>=" />
           <img src="img/<?php echo $linha['fotoSobre3'] ?>" alt="<?php echo $linha['descricaoFotoSobre3'] ?>=" />
           <img src="img/<?php echo $linha['fotoSobre4'] ?>" alt="<?php echo $linha['descricaoFotoSobre4'] ?>=" />
       </div>
     <?php endforeach ?>
   </div>

 </section>