<?php

    include_once("../config.inc.php");


    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    
    

    // 3ª etapa
    $sql = "INSERT INTO user
    (nome,email) VALUES
    ('$nome','$email')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Cliente cadastrado com sucesso.";
    }

    mysqli_close($conexao);