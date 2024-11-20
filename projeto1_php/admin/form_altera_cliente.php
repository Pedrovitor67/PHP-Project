<?php

    include_once("../config.inc.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM cliente WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    while($cliente = mysqli_fetch_array($query)){
?>

<h3> Alterando dados do Cliente </h3>
<form action="?pg=altera_cliente" method="post">
    <input type="hidden" name="id" value="<?=$cliente['id'];?>">
    Nome: <input type="text" name="nome" value="<?=$cliente['nome'];?>"><br>
    E-mail: <input type="text" name="email" value="<?=$cliente['email'];?>"><br> 
    Telefone: <input type="text" name="telefone" value="<?=$cliente['telefone'];?>"><br> 
    Cidade: <input type="text" name="cidade" value="<?=$cliente['cidade'];?>"><br>
    Estado: <input type="text" name="estado" value="<?=$cliente['estado'];?>"><br>

    <input type="submit" value="CADASTRAR">
</form>

<?php

 }

?>