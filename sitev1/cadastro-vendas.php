<?php
	if ($_SESSION['id'] == "") {
		header("Location:login.php");
	}
	echo 'Bem vindo '.$_SESSION['nome_completo'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro</title>
		<link rel="stylesheet" type="text/css" href="css/styleCadastroCliente.css" />
		
	</head>
	<body>

	<a href="login.php?acao=sair">Sair</a>	
	<form action="cadastro-vendas-db.php" method="post">
		<label for="quantidade">Quantidade:</label><br>
		<input class='input_modifica' type="text" name="quantidade" id="quantidade">

		<label for="id_cliente">Jogo</label><br>
		<select name="id_cliente" id="id_cliente">
			<?php
				$sql = "SELECT id_cliente, id_pagamento FROM cliente WHERE id_cliente =".$_SESSION['id'];
				$retorno = mysqli_query($con, $sql);
				if($retorno) {
					while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
			?>
			<option value="<?php echo $item['id_jogo']; ?>"><?php echo $item['id_pagamento']; ?></option>
			<?php
					}
				}
			?>
		</select><br><br>

		<label for="id_jogo">Jogo</label><br>
		<select name="id_jogo" id="id_jogo">
			<?php
				$sql = "SELECT id_jogo, nome_jogo, preco_jogo FROM Jogo";
				$retorno = mysqli_query($con, $sql);
				if($retorno) {
					while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
			?>
			<option value="<?php echo $item['id_jogo']; ?>"><?php echo $item['nome_jogo']; ?> + <?php echo $item['preco_jogo']; ?></option>
			<?php
					}
				}
			?>
		</select><br><br>

		<input class='input_botao' type="submit" value="Salvar">
	</form>

	</body>
</html>