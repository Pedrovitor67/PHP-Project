
<html lang="pt-br">

<body>

    <h2>Formulário de Cadastro</h2>
    
    <form action="cadastra.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>
<?php

    include_once("../config.inc.php");


    
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    
    
    
    // 1ª etapa
    $conexao = mysqli_connect("127.0.0.1","root","");
    // 2ª etapa
    $bd = mysqli_select_db($conexao,"connectpro");
    // 3ª etapa
    $sql = "INSERT INTO user
    (nome,email,senha) VALUES
    ('$nome','$email',$senha)";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Cliente cadastrado com sucesso.";
    }

    mysqli_close($conexao);