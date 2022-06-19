<html>

 <head>

  <link rel="stylesheet" href="assets/seuperfil.css" >
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
   <li class = "active"> <a href = "anunciar.php"> <i class="fa fa-bullhorn" aria-hidden="true"></i>Anunciar </a>
  
   

  
  
  </li>
  <li> <a href = "seuperfil.php"> <i class="fa fa-user"> </i>Perfil </a>
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
   <li> <a href = "sobre.php"><i class="fa fa-leaf" aria-hidden="true"></i>Sobre</a> </li>
   <li> <a href = "contato.php"> <i class="fa fa-phone" aria-hidden="true"></i>Contato</a> </li>
 </ul>
</div>

<br><br><br>

<div class="container" style="background-color: white;width: 500px; margin-left: 410px;border-radius: 30px; padding:20px;">

<div class="row">
  
        <form method="post" id="formItens">
            <div class="mb-3"><br><br><br>
                <label for="name" class="form-label"><h2>Nome:</h2></label><br>
                <input type="text" name="name" class="form-control" id="name" value="">
            </div>
            <div class="mb-3"><br>
                <label for="email" class="form-label"><h2>Descrição:</h2></label><br>
                <input type="text" name="desc" class="form-control" id="descricao" value="">
            </div>
            <div class="mb-3"><br>
            <label for="email" class="form-label"><h2>Categoria:</h2></label><br>
            <select name="categoria">
              <option value="garrafas">Garrafas</option>
              <option value="artesanato">Artesanato</option>
              <option value="papelaria">Papelaria</option>
              <option value="eco bags">Eco Bags</option>
              <option value="pets">Pets</option>

                </select>
        
            </div>
           
        <br>  <a href="lista-produtos.php">Lista de produtos</a>
        <br><br><button class="btn-1" id="btn" name="btn"><div class="carregamento" >CADASTRAR</div>
        
        </form>
        
    </div>
    <div class="row"><br>
        <div  role="alert" id="retorno2" style = "color: black;">
        </div>
        
<figure>
<img src="imagens/produtos.png" height="350px">
</figure>
    </div>
    
</div>

<script type="text/javascript" async>
    const formItens = document.querySelector("#formItens");
    const retorno2 = document.querySelector("#retorno2");

    formItens.addEventListener("submit", async (e) => {
       e.preventDefault();
        const dataItens = new FormData(formItens);
        const dados = await fetch("products/insertitens.php",{
            method: "POST",
            body: dataItens,
        });
        // Recebe Json
        const itens = await dados.text();
        //console.log(itens);
       retorno2.innerHTML = itens + "<br><br>Produto registrado!";
        // Recebe texto
        //const resposta = await dados.text();
      
    });
</script>
  </body>

</html>