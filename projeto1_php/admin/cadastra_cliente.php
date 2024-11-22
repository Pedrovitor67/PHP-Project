<?php

    include_once("../config.inc.php");


    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    

    // 3ª etapa
    $sql = "INSERT INTO user
    (nome,email,senha) VALUES
    ('$nome','$email',$senha)";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Cliente cadastrado com sucesso.";
    }

    mysqli_close($conexao);