<?php

include_once("config.inc.php");

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];


$sql = "INSERT INTO contato 
        (nome,email)
        VALUES 
        ('$nome','$email')";

$query = mysqli_query($conexao, $sql);

if ($query) {
    echo "<h2>Mensagem enviada com sucesso.</h2>";
} else {
    die("Mensagem não enviada.");
}

mysqli_close($conexao);
