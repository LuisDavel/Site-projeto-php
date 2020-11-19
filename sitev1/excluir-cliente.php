<?php
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
		<?php
			$id = $_GET['id'];
		?>
		<form action="valida-exclusao-cliente-adm.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			Você deseja excluir este item? Código: <?php echo $id; ?><br><br>
			
			<input type="submit" value="Sim">
			<a href="listar-cliente-adm.php">Não</a>
		</form>
	</body>
</html>
