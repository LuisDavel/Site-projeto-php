<?php
	include('conexao.php');

	if ($_SESSION['id'] == "") {
		header("Location:login.php");
	}
	echo 'Bem vindo '.$_SESSION['nome_completo'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title></title>
	</head>
	<body>
		<a href="login.php?acao=sair">Sair</a>
		<form action="cadastro-forma-pagamento-db.php" method="post">
		
			<label for="tipoPagamento">Tipo de pagamento</label><br>
			<input type="text" name="tipoPagamento" id="tipoPagamento"><br><br>
			
			<label for="numCartao">Número do cartão</label><br>
			<input type="text" name="numCartao" id="numCartao"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>
<?php
	mysqli_close($con);
?>