$('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    autoplaySpeed: 3000,
  });

  // Menu Mobile

  document.querySelector(".abrir-menu").onclick = function (){
    document.documentElement.classList.add("menu-ativo");
  }
  document.querySelector(".fechar-menu").onclick = function (){
    document.documentElement.classList.remove("menu-ativo");
  }

  // animações AOS

  AOS.init();

  // menu fixo na tela

window.onscroll = function () {
  var top = window.scrollY || document.documentElement.scrollTop;

  if (top > 50) {
    // console.log("adicionar menu fixo");
    document.getElementById("topoFixo").classList.add("menu-fixo");
    document.getElementById("topoFixo").classList.remove("site");
  } else {
    // console.log("remover menu fixo");
    document.getElementById("topoFixo").classList.remove("menu-fixo");
    document.getElementById("topoFixo").classList.add("site");
  }
};

// identificar qual bloco está ativo e dar display block, caso contrario, display none 
var btnMissao = document.querySelector("#btn-missao");
var btnVisao = document.querySelector("#btn-visao");
var btnValores = document.querySelector("#btn-valores");

var missao = document.querySelector("#missao");
var visao = document.querySelector("#visao");
var valores = document.querySelector("#valores");
var imgMvv = document.querySelector("#img-mvv");

  // // Esconder as seções "Visão" e "Valores" no carregamento inicial
  document.addEventListener("DOMContentLoaded", function() {
  missao.style.display = "block";
  visao.style.display = "none";
  valores.style.display = "none";


  // Função para mostrar a seção de Missão e definir a imagem correspondente
  btnMissao.addEventListener("click", function() {
    missao.style.display = "block";
    visao.style.display = "none";
    valores.style.display = "none";
    imgMvv.innerHTML = '<img src="img/missao.png" id="img-mvv">';
  });

  // Função para mostrar a seção de visão e definir a imagem correspondente
  btnVisao.addEventListener("click", function() {
    missao.style.display = "none";
    visao.style.display = "block";
    valores.style.display = "none";
    imgMvv.innerHTML = '<img src="img/visao.png" id="img-mvv">';
  });

  // Função para mostrar a seção de Valores e definir a imagem correspondente
  btnValores.addEventListener("click", function() {
    missao.style.display = "none";
    visao.style.display = "none";
    valores.style.display = "block";
    imgMvv.innerHTML = '<img src="img/valor.png" id="img-mvv">';
  });
});

// enviar para whatsapp

function formWhats() {

  var form = document.getElementById('formContato');

  var nome = "*Nome: *" + document.getElementById("nome").value;
  var email = "*E-mail: *" + document.getElementById("email").value;
  var tel = document.getElementById("tel").value;
  var mens = "*Mensagem: *" + document.getElementById("mens").value;

  var agencia = "*Agêngia Tipi*";
  var assunto = "Mensagem do site!";

  var numFone = "5511944612358";
  var quebraDeLinha = "%0A";

  if (tel == "") {
    alert("O campo do celular é obrigatório")
    return;
  } else {
    var tel = "*Fone: *" + document.getElementById("tel").value;
  }

  window.open(
    "https://api.whatsapp.com/send?phone=" +
      numFone +
      "&text=" +
      assunto +
      "-" +
      agencia +
      quebraDeLinha +
      quebraDeLinha +
      nome +
      quebraDeLinha +
      email +
      quebraDeLinha +
      tel +
      quebraDeLinha +
      mens,
    "_blank"
  );

  form.reset();
}

// botao voltar ao topo 

var btn = $("#back-to-top");
btn.click(function() {
  $('html, body').animate({scrollTop:0}, 'slow');
});


