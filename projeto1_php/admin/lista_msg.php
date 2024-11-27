<h2>Mensagens recebidas</h2>

<?php

    include_once("../config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM contato");

    while($tabela = mysqli_fetch_array($sql)){
        echo "Nome: $tabela[nome] <br>";
        echo "E-mail: $tabela[email] <br>";
        echo "Assunto: $tabela[assunto] <br>";
        echo "Mensagem: $tabela[mensagem] <br>";
        echo "<a href='exclui.php?id={$tabela['id']}'><b>X</b></a> <br>";
        echo "<hr>";
    }

    if(!$sql){
        echo "Deu ruim.";
    }

    mysqli_close($conexao);