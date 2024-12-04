<?php

include_once("config.inc.php");

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];

$sql = "INSERT INTO user
         (nome,email) 
         VALUES
         ('$nome','$email')";

$query = mysqli_query($conexao, $sql);

if ($query) {
    echo "<h2>Cliente cadastrado com sucesso.";
} else {
    die("Mensagem não enviada.");
}

mysqli_close($conexao);
