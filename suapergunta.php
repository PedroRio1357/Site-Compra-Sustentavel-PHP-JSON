<html>

 <head>

  <link rel="stylesheet" href="assets/suapergunta.css" >
  <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Raleway&family=Roboto+Condensed&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>

  <body>

    <title>Compra Sustentável</title>

<div class="menu">

 <ul>
   
   <li> <a href = "index.php"><i class="fa fa-home"></i>Início </a> </li>
  <li>  <a href = "novidades.php"> <a href = "#"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Produtos </a>
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
   <li  class = "#"> <a href = "anunciar.php"> <i class="fa fa-bullhorn" aria-hidden="true"></i>Anunciar </a>
  
    <div class="sub-menu-1">
   

  
  
  </li>
   <li> <a href = "seuperfil.php"> <i class="fa fa-user"> </i>Perfil </a>
    <div class="sub-menu-1">
      <ul>
 
    <li><a href="seuperfil.php"><i class="fa fa-user"> </i>Seu perfil</a></li>
    <li><a href="vendedores.php"><i class="fa fa-users" aria-hidden="true"></i>Vendedores</a></li>


      </ul>

  
  
  </li>
   <li> <a href = "carrinho.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>Carrinho </a> </li>
   <li class="active"> <a href = "#"><i class="fa fa-comment" aria-hidden="true"></i></i>FAQ </a>
    <div class="sub-menu-1">
      <ul>
 
    <li><a href="perguntasfrequentes.php"><i class="fa fa-comments" aria-hidden="true"></i>Perguntas frequentes</a></li>
    <li><a href="suapergunta.php"><i class="fa fa-commenting-o" aria-hidden="true"></i>Faça uma pergunta</a></li>


      </ul>

  
  </li>
   <li> <a href = "sobre.php"><i class="fa fa-leaf" aria-hidden="true"></i>Sobre</a> </li>
   <li> <a href = "contato.php"> <i class="fa fa-phone" aria-hidden="true"></i>Contato</a> </li>
 </ul>
</div>

<br><br><br>
<figure>

<img src="imagens/digite algo.png" height="500px">

</figure>
 <div class="inicio">
    
    <h1>Digite sua pergunta:</h1><br><br>

   
    <p><input type="text" name="verificador" id="verificador" style="font-size: 25px;"placeholder=""/> &nbsp <input type="button" class="pergunte" value="Pergunte" style="font-size: 20px;" onclick="verificar() "><br><br>
        <h2><div id="nome"></div> </h2><br><br></p>
    <br><br>
  
        </h3>
 </div><br><br><br>

 <script>

var login = window.document.getElementById('login');

const dados = JSON.parse(localStorage.getItem('dados'))
console.log(dados);

    function verificar() {
 
     var verificador = window.document.getElementById('verificador');
     
     const pergunta = [verificador.value];
     localStorage.setItem('pergunta', JSON.stringify(pergunta));
     console.log(pergunta);

     var nome = window.document.getElementById('nome');
     
     if(verificador.value == ''){
      nome.innerText = (`Ops, você não digitou nada! Digite uma pergunta!`)
     }else{
      nome.innerText = (`Obrigado por perguntar! sua pergunta foi registrada! A sua pergunta foi:  ${verificador.value}`)

     }


    }
 
      </script>

  
  
  </body>

</html>