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
   <li class = "#"> <a href = "anunciar.php"> <i class="fa fa-bullhorn" aria-hidden="true"></i>Anunciar </a>
  
   

  
  
  </li>
  <li class = "active"> <a href = "seuperfil.php"> <i class="fa fa-user"> </i>Perfil </a>
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
<div class="container" style="heigth: 300px; background-color: white;width: 500px; margin-left: 410px;border-radius: 30px; padding:20px;">
<form class="form-signin" id="formLogin">
    <h1 class="h3 mb-3 font-weight-normal" style = "color: black">Login</h1><br><br><br>
    <label for="inputEmail" class="sr-only">Email</label>
    <input value="" name="email" type="email" id="inputEmail" class="form-control" placeholder="Informe Email..." required autofocus><br><br><br><br>
    <label for="inputPassword" class="sr-only">Senha</label>
    <input value="" name="passw" type="password" id="inputPassword" class="form-control" placeholder="Informe Senha..." required>
    <div class="checkbox mb-3">
        <label><br><br>
        <h2 style = "font-size: 15px"> <input type="checkbox" value="remember-me">&nbsp Esqueci minha senha</h2>
        </label>
    </div>
    <!--
    retorno da mensagem, se e-mail ou senha incorretos ou
    se usuário conseguiu logar
    class="alert alert-danger"
    class="alert alert-success"
    -->
    <br><h2><div id="message"  role="alert">
    </div></h2><br>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>

    
</form>
<figure>
<img src="imagens/login.png" height="500px">
</figure>
</div>
<script type="text/javascript" async>
    const formLogin = document.querySelector("#formLogin");
    const message = document.querySelector("#message");
    formLogin.addEventListener("submit", async (e) => {
        e.preventDefault();
        const dataUsers = new FormData(formLogin);
        const dados = await fetch("itens/login.php",{
            method: "POST",
            body: dataUsers,
        });
        const user = await dados.json();
        console.log(user);
        message.classList.add("alert");
        if(user.error == 1){
            message.classList.remove("alert-success");
            message.classList.add("alert-danger");
            message.innerHTML = "Email e/ou Senha inválidos!";
        } else if(user.error == 0) {
            message.classList.remove("alert-danger");
            message.classList.add("alert-success");
            message.innerHTML = `Olá, ${user.name}! Você está logado(a)!;`
        }
        console.log(message);
    });
</script>
</body>