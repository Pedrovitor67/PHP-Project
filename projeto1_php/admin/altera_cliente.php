<?php

    include_once("../config.inc.php");

    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $senha= $_REQUEST['senha'];
   
    echo "testando";

    // 3ª etapa
    $sql = "UPDATE user SET
    nome = '$nome', email = '$email',senha = '$senha',
   
    WHERE id = $id";
    
    echo "testando 2";
    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Cliente alterado com sucesso.";
    }
    
        echo "<h2> falha na alteraçao do cliente";
    mysqli_close($conexao);