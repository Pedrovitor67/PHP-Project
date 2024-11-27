<?php
// Capturando os dados do formulário
$nome = $_REQUEST['nome'] ?? '';
$email = $_REQUEST['email'] ?? '';
$assunto = $_REQUEST['assunto'] ?? '';
$mensagem = $_REQUEST['mensagem'] ?? '';

// Verificando se o formulário foi enviado
if (!empty($nome) && !empty($email) && !empty($assunto) && !empty($mensagem)) {
    echo "<p>Obrigado, <b>$nome</b>. Sua mensagem foi enviada com sucesso!</p>";
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_REQUEST)) {
    echo "<p>Por favor, preencha todos os campos!</p>";
}
?>

<h3> Entre em contato conosco </h3>
<form action="?pg=envia_msg" method="POST">
    Nome: <input type="text" name="nome"><br>
    E-mail: <input type="text" name="email"><br> 
    Assunto: <input type="text" name="assunto"><br> 
    Mensagem: <textarea name="mensagem"></textarea><br><br> 
    <input type="submit" value="Enviar">
</form>
