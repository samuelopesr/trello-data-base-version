<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../trello-data-base-version/estilos/login-style(MF).css">
    <link rel="stylesheet" href="../trello-data-base-version/estilos/login-style(MQ).css">
    <link rel="stylesheet" href="../trello-data-base-version/estilos/animation-login.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Trello | Login</title>

</head>
<body>
    <section>
        <div class='air air1'></div>
        <div class='air air2'></div>
        <div class='air air3'></div>
        <div class='air air4'></div>
      </section>
    <main>
       
        <div class="animate__animated animate__bounceInUp" id="login">
          
        <div id="animation">
                <iframe src="imagens/programming-animate.svg" frameborder="0"></iframe>
            </div>
            
<form autocomplete="off" action="testelogin.php" method="POST">

<h1 id="h1"><img src="imagens/87e1af770a49ce8e84e3.gif" alt=""></h1>

            <label for="ilogin">EMAIL</label>
            <input  required placeholder="E-mail" id="ilogin" type="text" name="email">

            <img src="../trello-data-base-version/imagens/user.png" id="user_login" alt="userlogin">


              
            <label for="isenha">SENHA</label>
            <input  required class="inputs" placeholder="Senha" id="isenha" type="password" name="senha">

            <img id="icon" onclick="showHidden()" src="../trello-data-base-version/imagens/view.png" alt="">
               
        
              <button name="submit" type="submit" id="enviar">Entrar</button>
               

    
</form>
<footer>Não tem cadastro? 
            <a href="signup.php">Clique Aqui!</a></footer>
        </div>
    </main>
    <script src="../trello-data-base-version/JavaScript/index.js"></script>
</body>
</html>