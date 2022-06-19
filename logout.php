<?php
session_start();
session_destroy();

?>

<html>

 <head>

  <link rel="stylesheet" href="assets/estilos.css" >
  <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Raleway&family=Roboto+Condensed&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>

  <body>

    <title>Compra Sustentável</title>

<div class="menu">

 <ul>
   
   <li class = "active" > <a href = "#"><i class="fa fa-home"></i>Início </a> </li>
  <li>  <a href = "#"> <a href = "#"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Produtos </a>
   <div class="sub-menu-1">
      <ul>
 
    <li><a href="novidades.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Novidades</a></li>
    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i>Categorias</a></li>
    <div class="sub-menu-2">
      <ul>
 
        <li><a href="#"><i class="fa fa-compass" aria-hidden="true"></i>Novidades</a></li>
        <li><a href="#"><i class="fa fa-tint" aria-hidden="true"></i>Garrafas</a></li>
        <li><a href="#"><i class="fa fa-hand-paper-o" aria-hidden="true"></i>Artesanato</a></li>
        <li><a href="#"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>Papel</a></li>
        <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Eco Bags</a></li>
        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>wishlist</a></li>


      </ul>

      </ul>


   </div>
  
  </li>
    <li><a href = "anunciar.php"><i class="fa fa-bullhorn" aria-hidden="true"></i>Anunciar </a>
  
    <div class="sub-menu-1">
 
  
  
  </li>
   <li> <a href = "#"> <a href = "#"><i class="fa fa-user"> </i>Perfil </a>
    <div class="sub-menu-1">
      <ul>
 
    <li><a href="seuperfil.php"><i class="fa fa-user"> </i>Seu perfil</a></li>
    <li><a href="vendedores.php"><i class="fa fa-users" aria-hidden="true"></i>Vendedores</a></li>


      </ul>

  
  
  </li>
   <li> <a href = "carrinho.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>Carrinho </a> </li>
   <li> <a href = "#"><a href = "#"><i class="fa fa-comment" aria-hidden="true"></i>FAQ </a>
    <div class="sub-menu-1">
      <ul>
 
    <li><a href="perguntasfrequentes.php"><i class="fa fa-comments" aria-hidden="true"></i>Perguntas frequentes</a></li>
    <li><a href="suapergunta.php"><i class="fa fa-commenting-o" aria-hidden="true"></i>Faça uma pergunta</a></li>


      </ul>

  
  </li>
   <li> <a href = "sobre.php"> <i class="fa fa-leaf" aria-hidden="true"></i>Sobre</a> </li>
   <li> <a href = "contato.php"> <i class="fa fa-phone" aria-hidden="true"></i>Contato</a> </li>
 </ul>
</div>

<br><br><br>

 <div class="inicio">
 
    <div class="row" id="welcomeMessage">
    <h2>Bem vindo a página!</h2>
    </div>
    
    <br>
    <h4>Um site para quem se preocupa com a natureza</h4>
    <figure>

      <img src="imagens/reciclar2.png" height="500px">

    </figure><br>
    <p>Sejamos sustentáveis</p>
    <br>
    
    <!-- <h1>Qual é o seu nome? </h1><input type="text" name="verificador" id="verificador" style="font-size: 20px;"/> -->
            <!-- <input type="button" value="Clique "  style="font-size: 20px;" onclick="verificar()"/> -->
           <!-- <br><br> <h2><div id="nome">Já tem uma conta? faça <a href = "login-user.php" style = "color: black;text-decoration: none;">login aqui</a></div></h2> -->
            <!-- <br> -->
<br><br><br><br>
    <h3>Esse site é uma loja para produtos sustentáveis, nela poderam  <br>
    ser vendidos todo tipo de produto que de alguma forma ajude nosso <br> 
    meio ambiente, como Garrafas, Copos, Embalagens Pet (Refrigerantes, <br>
      Vinagre, Óleo…), Sacos/Sacolas, Tampas, Frascos de produtos,  <br>
      Caneta (Sem a tinta), Canos e Tubos de PVC,  </h3>
      <br>
      <h3>Você pode navegar livremente pelo menu para acesar os produtos por novidades <br> 
      e categorias, anunciar, ver seu perfil, carrinho de compras,  fazer perguntas <br> 
      e ver dúvidas frequentes, ler o sobre e ver como entrar em contato conosco.
     <br><br> <div class="login"></div></h3>
 </div><br>
  <div class="container">
    <form action="seuperfil.php">
    <button class="btn-1" id="btn" name="btn" onclick="Clicar()"><div class="carregamento" >CADASTRAR</div>
  </div>

  <script>

     const welcome = async () => {
        const message = await fetch("itens/welcome.php");
        const userObj = await message.json();
        console.log(userObj);
        var welcomeMessage = document.querySelector("#welcomeMessage");
        welcomeMessage.innerHTML = `<h2>Bem vindo(a) ${userObj.name}!</h2><a href = "itens/logout.php">Deslogar</a>`;
    }
    welcome();

    function verificar() {

     var verificador = window.document.getElementById('verificador');
     var nome = window.document.getElementById('nome');

     if(verificador.value == ''){
      nome.innerText = (`Digite seu nome!`);
     }else{
     nome.innerText = (`Bem vindo(a) ${verificador.value}!`);
    }
    
    }
   
    var login = window.document.getElementById('login');

    const dados = JSON.parse(localStorage.getItem('dados'))
    console.log(dados);

    
  </script>

  </body>

</html>

