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
		<style type="text/css">
			.foto {
				max-width: 100px;
				max-height: 100px;
			}
		</style>
	</head>
	<body>
		<a href="login.php?acao=sair">Sair</a>
		<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM cliente WHERE id_cliente = $id";
			$retorno = mysqli_query($con, $sql);
			$item = mysqli_fetch_array($retorno, MYSQLI_ASSOC);
		?>
		<form action="valida-alteracao-cliente.php" method="post" enctype="multipart/form-data">
			<label>Código</label><br>
			<?php echo $id; ?><br><br>
			<input type="hidden" name="id" value="<?php echo $id; ?>">

			<?php 
				if ($item['foto_cliente']) {
			?>
			<img class="foto" src="img_upload_cliente/<?php echo $item['foto_cliente']; ?>">	
			<?php
				} else {
			?>	 
			<img class="foto" src="img_upload_cliente/sem-foto.png">
			<?php
				}
			?> <br><br>
			
			<label for="nome">Nome:</label><br>
			<input type="text" name="nome" id="nome" value="<?php echo $item['nome_cliente']; ?>" maxlength="100"><br><br>

			<label for="telefone">Telefone:</label><br>
			<input type="text" name="telefone" id="telefone" value="<?php echo $item['telefone']; ?>" maxlength="10"><br><br>
			
			<label for="email">Email:</label><br>
			<input type="text" name="email" id="email" value="<?php echo $item['email_cliente']; ?>" maxlength="10"><br><br>

			<label for="senha">Senha:</label><br>
			<input type="password" name="senha" id="senha" value="<?php echo $item['senha_cliente']; ?>" maxlength="11"><br><br>

			<label for="foto">Foto:</label><br>
			<input type="file" name="foto" id="foto" ><br><br>
			
			<input type="submit" value="Alterar">
		</form>
	</body>
</html>
<?php
	mysqli_close($con);
?>


