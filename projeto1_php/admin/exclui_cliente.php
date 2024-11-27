<?php

    include_once("../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = mysqli_query(
        $conexao,
        "DELETE FROM user WHERE id = $id"
    );

    if($sql){
        echo "<h3>Cliente excluído com sucesso</h3>.";
    }else{
        echo "<h3>Falha na exclusão.</h3>";
    }

    mysqli_close($conexao);