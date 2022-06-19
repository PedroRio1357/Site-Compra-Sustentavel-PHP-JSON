<html>

 <head>

  <link rel="stylesheet" href="assets/carrinho.css" >
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
    

      </ul>


   </div>
  
  </li>
   <li  class = "#">  <a href = "anunciar.php"><i class="fa fa-bullhorn" aria-hidden="true"></i>Anunciar </a>
  
    <div class="sub-menu-1">
   

  
  
  </li>
   <li> <a href = "seuperfil.php"> <i class="fa fa-user"> </i>Perfil </a>
    <div class="sub-menu-1">
      <ul>
 
    <li><a href="seuperfil.php"><i class="fa fa-user"> </i>Seu perfil</a></li>
    <li><a href="vendedores.php"><i class="fa fa-users" aria-hidden="true"></i>Vendedores</a></li>


      </ul>

  
  
  </li>
   <li class="active"> <a href = "#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>Carrinho </a> </li>
   <li> <a href = "#"><a href = "#"><i class="fa fa-comment" aria-hidden="true"></i></i>FAQ </a>
    <div class="sub-menu-1">
      <ul>
 
    <li><a href="perguntasfrequentes.php"><i class="fa fa-comments" aria-hidden="true"></i>Perguntas frequentes</a></li>
    <li><a href="suapergunta.php"><i class="fa fa-commenting-o" aria-hidden="true"></i>Faça uma pergunta</a></li>


      </ul>

  
  </li>
   <li> <a href = "sobre.php"><i class="fa fa-leaf" aria-hidden="true"></i>Sobre</a> </li>
   <li> <a href = "contato.php"><i class="fa fa-phone" aria-hidden="true"></i>Contato</a> </li>
 </ul>
</div>

<br><br><br>


<div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Carrinho de Compras
  </div>
 
  <!-- Product #1 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="imagens/garrafa.jpg" alt=""  height="90px"   />
    </div>
 
    <div class="description">
      <span>Garrafa Sustentável</span>
      <span>Empresa Eco</span>
      <span>Modelo um</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <i class="fa fa-plus" aria-hidden="true" style="color: white;"></i>
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button" >
        <i class="fa fa-minus" aria-hidden="true"style="color: white;" ></i></i>
      </button>
    </div>
 
    <div class="total-price">R$45,00</div>
  </div>
 
  <!-- Product #2 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="imagens/ecobags.jpg" alt="" height="90px"/>
    </div>
 
    <div class="description">
      <span>Eco Bag</span>
      <span>Empresa Susten</span>
      <span>Modelo três</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <i class="fa fa-plus" aria-hidden="true" style="color: white;"></i>
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <i class="fa fa-minus" aria-hidden="true" style="color: white;"></i>
      </button>
    </div>
 
    <div class="total-price">R$35,00</div>
  </div>
 
  <!-- Product #3 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="imagens/caneta.jpeg" alt="" height="90px"/>
    </div>
 
    <div class="description">
      <span>Caneta Ecológica</span>
      <span>Empresa Eco</span>
      <span>Modelo um</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <i class="fa fa-plus" aria-hidden="true" style="color: white;"></i>
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <i class="fa fa-minus" aria-hidden="true" style="color: white;"></i>
      </button>
    </div>
 
    <div class="total-price">R$349</div>
  </div>
</div>


<script>

var login = window.document.getElementById('login');

const dados = JSON.parse(localStorage.getItem('dados'))
console.log(dados);


</script>

  </body>

</html>