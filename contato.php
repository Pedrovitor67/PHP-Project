<link rel="stylesheet" href="contato.css">

<form action="envia_msg.php" method="post" id="formularioEnviaMsg" >
<h3 class="title__mensagem">Qual Produto você quer ver na nossa loja? </h3>

  <input type="text" name="nome"  class="input" placeholder="Nome"> 

   <input type="text" name="email" class="input" placeholder="E-mail"> 

 <input type="text" name="assunto" class="input" placeholder="Assunto"> 

  <textarea name="mensagem" class="input" placeholder="Solicite o produto desejado" id="textArea"> </textarea>
 <input type="submit" value="Enviar" class="button">
 <script src="enviaMSG.js" ></script>
</form>