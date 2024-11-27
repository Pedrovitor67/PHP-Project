<?php

    include_once("../config.inc.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM user WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    while($cliente = mysqli_fetch_array($query)){
?>

<h3> Alterando dados do Cliente </h3>
<form action="?pg=altera_cliente" method="post">
    <input type="hidden" name="id" value="<?=$cliente['id'];?>">
    Nome: <input type="text" name="nome" value="<?=$cliente['nome'];?>"><br>
    E-mail: <input type="text" name="email" value="<?=$cliente['email'];?>"><br> 
    Senha: <input type="text" name="senha" value="<?=$cliente['senha'];?>"><br> 
    
    <input type="submit" value="CADASTRAR">
</form>

<?php

 }

?>