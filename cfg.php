<?php

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $database = 'login';

    $conexao = new mysqli($host, $usuario, $senha, $database);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";;
    // }
    // else
    // {
    //     echo "conexao efetuada com sucesso";
    // }

?>