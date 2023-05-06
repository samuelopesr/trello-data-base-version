<?php

if(isset($_POST['submit']))
{
    include_once('cfg.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_de_nascimento = $_POST['nascimento'];
    $sexo = $_POST['sexo'];

    if (strlen($senha) < 8 || strlen($senha) > 16 || !preg_match('/[a-z]/', $senha) || !preg_match('/[A-Z]/', $senha) || !preg_match('/[0-9]/', $senha)) {
        echo'<script>
        alert("a senha deve conter no mínimo 8 dígitos, no máximo 16, e pelo menos uma letra minúscula, uma letra maiúscula e um número")

        if(alert){
            window.location.replace("signup.php")
        }
        </script>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/@(outlook|gmail|hotmail)\.(com|com\.br)$/', $email)) {
        echo'<script>
        alert("endereço de e-mail deve estar no formato correto, e apenas os provedores Outlook, Gmail e Hotmail são permitidos")

        if(alert){
            window.location.replace("signup.php")
        }
        </script>';
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $nome)) {
        echo'<script>
        alert("nome deve conter apenas letras e espaços em branco")

        if(alert){
            window.location.replace("signup.php")
        }
        </script>';
    } else {
        $result = mysqli_query($conexao, "INSERT INTO usuários(nome, email, senha, data_nascimento, sexo) VALUES ('$nome', '$email', '$senha', '$data_de_nascimento', '$sexo')");

        if (!$result) {
            echo'<script>
        alert("Problema ao cadastrar o usuário!!")

        if(alert){
            window.location.replace("login.php")
        }
        </script>';
        } else {
            header('Location: login.php');
        }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/login-style(MF).css">
    <link rel="stylesheet" href="estilos/login-style(MQ).css">
    <link rel="stylesheet" href="estilos/animation-signup.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    
    <title>Trello | Cadastro</title>
</head>
<body>
    <section>
        <div class='air air1'></div>
        <div class='air air2'></div>
        <div class='air air3'></div>
        <div class='air air4'></div>
      </section>
    <main>
        <div class="animate__animated animate__bounceInUp" id="signup">
        <div id="animation">
                <iframe src="imagens/programming-animate.svg" frameborder="0"></iframe>
            </div>

            <form autocomplete="off" action="" method="POST">
            <h1 id="h1"><img src="imagens/87e1af770a49ce8e84e3.gif" alt=""></h1>

                 
                <label for="inome">Nome</label>
                <input required name="nome" class="inputs" id="inome
                " placeholder="Nome completo" type="text">

                <label for="imail">E-mail</label>
                <input required name="email" class="inputs" id="imail" placeholder="E-mail" type="text">

                <label for="isenha">Senha</label>
                <input name="senha" class="inputs" id="isenha" placeholder="Senha" type="text">


                <label for="data">Data de nascimento</label>
                <input required name="nascimento" type="date" id="data" name="data">

                <label for="sexo">Sexo</label>
                <select required name="sexo" id="escolha">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Prefiro não informar">Prefiro não informar</option>
                </select>
                
                <button name="submit" type="submit" id="submit">Enviar</button>
            </form>

            <p>Já tem cadastro? 
                <a href="login.php">Faça Login!</a></p>
        </div>
    </main>
</body>
</html>