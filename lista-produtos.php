

<html>

<head>

 <link rel="stylesheet" href="assets/vendedores.css" >
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
  <li> <a href = "anunciar.php"> <i class="fa fa-bullhorn" aria-hidden="true"></i>Anunciar </a>
 
  

 
 
 </li>
  <li class="active"> <a href = "#"> <a href = "#"><i class="fa fa-user"> </i>Perfil </a>
   <div class="sub-menu-1">
     <ul>

   <li class="#"><a href="seuperfil.php"><i class="fa fa-user"> </i>Seu perfil</a></li>
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



<div class="container" style="background-color:white; heigth: 220px; width: 1200px; margin-left: 200px;border-radius: 30px; padding:20px;">
   <div class="row">
       <table class="table caption-top" id="myTable">
           <h2>Lista de Produtos:</h2><br><br>
           <tr>
               <th scope="col"><h2></h2></th>
               <th scope="col"><h2>Nome:</h2></th>
               <th scope="col"><h2>Descrição:</h2></th>
               <th scope="col"><h2>Categoria:</h2></th>
               <th scope="col"><h2> &nbsp &nbsp &nbsp Ação:</h2></th>
           </tr>
           </thead>
           <tbody>
              <tr>
                <th scope="row"><h2></h2></th></h2>
                <td><h2></h2></td>
                <td><h2></h2></td>
                <td><h2></h2></td>
                <td><h2></h2></td>
               
              </tr>
           </tbody>
       </table>
   </div>
</div>

<?php
/*
if(file_exists(__DIR__ . "/data-json/cadastro.json")){
   $stringUsers = file_get_contents(__DIR__ . "/data-json/cadastro.json");
   //var_dump($stringUsers);
   $arrayUsers = json_decode($stringUsers, true);
   //var_dump($arrayUsers);
}
*/
?>  

<script type="text/javascript" async>
   //const lista = document.querySelector("#lista");
   const listaUsuarios = async (nome) => {
       const tabela = await fetch("itens/list-products.php");
       //const respTabela = await tabela.text();
       // pode voltar json
       const respTabela = await tabela.json();
       //lista.innerHTML = respTabela;
       console.log(respTabela);
       respTabela.forEach(function (e) {
           console.log(e);
           var table = document.getElementById("myTable");
           var row = table.insertRow(2);
           var cell0 = row.insertCell(0);
           var cell1 = row.insertCell(1);
           var cell2 = row.insertCell(2);
           var cell3 = row.insertCell(3);
           var cell4 = row.insertCell(4);
          
           cell1.innerHTML = `<br> <h2>${e.name} &nbsp  &nbsp </h2> `;
           cell2.innerHTML = `<br> <h2> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp${e.desc}&nbsp  &nbsp </h2>`;
           cell3.innerHTML = `<br> <h2>  &nbsp  &nbsp  &nbsp  &nbsp${e.categoria}&nbsp &nbsp &nbsp </h2>`;
           cell4.innerHTML = ` <br> <h2> &nbsp  &nbsp &nbsp  &nbsp <a href='#'><img src="assets/file.svg"></a>
                   <a href='#'><img src="assets/trash.svg"></a></h2>`;

    
       });
   }
   listaUsuarios();
</script>
<br><br>
<h2> Acesse as outras listas por categoria: <a href = "lista-categorias.php?cat=garrafas">garrafa</a>; 
                                            <a href = "lista-categorias.php?cat=artesanato">artesanato</a>;
                                            <a href = "lista-categorias.php?cat=papelaria">pepelaria</a>;
                                            <a href = "lista-categorias.php?cat=eco bags">eco bags</a>;
                                            <a href = "lista-categorias.php?cat=pets">pets</a>;
</body>
</html>



