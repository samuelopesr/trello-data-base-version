<?php
session_start();
        // print_r($_REQUEST);
        if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
        {
            //aceesa
            include_once('cfg.php');
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // print_r(("email: ". $email));
            // print_r(('<br>'));
            // print_r(("Senha: ". $senha));

            $sql = "SELECT * FROM usuários WHERE email = '$email' and senha = '$senha'";

            $result = $conexao->query($sql);
        
            // print_r($sql);
            // print_r($result);

            if(mysqli_num_rows($result) < 1)
            {

            
                unset($_SESSION['email']);
                unset($_SESSION['senha']);

                echo '<script>
                alert("Digite um e-mail ou senha válidos")

                if(alert){
                    window.location.replace("login.php")
                }
                </script>';


            }
            else
            {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;

                header('Location: index.php');
            }
        }
        else
        {
            //não acessa
            header(('Location: login.php'));
        }
?>
