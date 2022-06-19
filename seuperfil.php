<?php
    $user = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    if($user){
        // Verificar se nome e email foram informados e se o email é válido...
        $user["address"] = ""; // Endereço é informado depois
        $user["phone"] = ""; // Telefone é informado depois
        //var_dump($user);
        $arrayUsers = array();
        // verifica se o json existe
        if(file_exists(__DIR__ . "/data-json/cadastro.json")) {
            $stringUsers = file_get_contents(__DIR__ . "/data-json/cadastro.json");
            $arrayUsers = json_decode($stringUsers, true);
        }
        $arrayUsers[] = $user;
        $usersJson = json_encode($arrayUsers);
        //var_dump($usersJson);
        $file = fopen(__DIR__ . "/data-json/cadastro.json","w+");
        fwrite($file, $usersJson);
        fclose($file);
    }
?>
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
   <li> <a href = "anunciar.php"> <i class="fa fa-bullhorn" aria-hidden="true"></i>Anunciar </a>
  
   

  
  
  </li>
   <li class="active"> <a href = "#"> <a href = "#"><i class="fa fa-user"> </i>Perfil </a>
    <div class="sub-menu-1">
      <ul>
 
    <li class="#"><a href=""><i class="fa fa-user"> </i>Seu perfil</a></li>
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

<div class="container" style="heigth: 220px; background-color: white;width: 500px; margin-left: 410px;border-radius: 30px; padding:20px;">

<div class="row">
  
        <form method="post" id="formUsers">
            <div class="mb-3"><br><br>
                <label for="name" class="form-label"><h2>Nome:</h2></label><br>
                <input type="text" name="name" class="form-control" id="name" value="Fábio">
            </div>
            <div class="mb-3"><br>
                <label for="email" class="form-label"><h2>E-mail:</h2></label><br>
                <input type="text" name="email" class="form-control" id="email" value="fabiosantos@gmail.com">
            </div>
            <div class="mb-3"><br>
                <label for="passw" class="form-label"><h2>Senha:</h2></label><br>
                <input type="password" name="passw" class="form-control" id="passw" value="2134567">
            </div><br>
            <div class="mb-3"><br>
                <label for="adress" class="form-label"><h2>Endereço:</h2></label><br>
                <input type="text" name="address" class="form-control" id="address" value="Charqueadas">
            </div><br>
            <div class="mb-3"><br>
                <label for="phone" class="form-label"><h2>Telephone:</h2></label><br>
                <input type="text" name="phone" class="form-control" id="phone" value="99999-9999">
                <br> <br><a href = "login-user.php" style = "color: black;text-decoration: none;">Já tem uma conta? faça login aqui.</a>
                <a href = "edit-user.php" style = "color: black;text-decoration: none;">Deseja editar seus dados? clique aqui.</a>
              </div><br>
        
        <button class="btn-1" id="btn" name="btn"><div class="carregamento" >CADASTRAR</div>
        </form>
    </div>
    <div class="row"><br>
        <div  role="alert" id="retorno">
        </div>
        
<figure>
<img src="imagens/login.png" height="500px">
</figure>
    </div>
    
</div>

<script type="text/javascript" async>
    const formUsers = document.querySelector("#formUsers");
    const retorno = document.querySelector("#retorno");

    formUsers.addEventListener("submit", async (e) => {
        e.preventDefault();
        const dataUsers = new FormData(formUsers);
        dataUsers.append("add",1);
        const dados = await fetch("itens/insert.php",{
            method: "POST",
            body: dataUsers,
        });
        // Recebe Json
        const user = await dados.json();
        console.log(user);
        retorno.innerHTML = `<h2>Olá ${user.name}, login <br> realizado com sucesso!`;
        // Recebe texto
        //const resposta = await dados.text();
        //retorno.innerHTML = resposta;
    });
</script>
  </body>

</html>