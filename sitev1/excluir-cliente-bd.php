<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$id = $_POST['id'];
			
			$sql = "DELETE FROM cliente WHERE id_cliente = $id";
			
			$retorno = mysqli_query($con, $sql);
			if (!$retorno) {
				header('Location: listar-cliente.php?erro=1&msg=' . mysqli_error($con));
			} else {
				header('Location: listar-cliente.php?sucesso=1&msg=' . $id);				
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>