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
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  		<link rel="stylesheet" type="text/css" href="css/styleLogin.css" />
		<title></title>
		<style type="text/css">
			.foto {
				max-width: 100px;
				max-height: 100px;
			}
		</style>
	</head>
	<body>
		<?php
			$erro = isset($_GET['erro']) ? $_GET['erro'] : ''; 
			$sucesso = isset($_GET['sucesso']) ? $_GET['sucesso'] : ''; 
			$msg = isset($_GET['msg']) ? $_GET['msg'] : ''; 
			
			if($erro == 1) {
				echo 'Erro ao alterar! Erro: ' . $msg;
			}

			if($sucesso == 1){
				echo 'Alterado com sucesso! Cliente código: ' . $msg;
			}
		?>
		<?php
			$sql = "SELECT id_cliente, nome_cliente, telefone, email_cliente, foto_cliente FROM cliente";
			//echo $sql;
			$retorno = mysqli_query($con, $sql);
			if(!$retorno) {
				echo mysqli_error($con);
			} else {
		?>
		<a href="login.php?acao=sair">Sair</a>
			<table class="tabela_listar_cliente">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Telefone</th>
						<th>Senha</th>
						<th>Foto</th>
					</tr>
				</thead>
				<tbody>
		<?php
				while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
		?>
					<tr>
						<td><?php echo $item['id_cliente']; ?></td>
						<td><?php echo $item['nome_cliente']; ?></td>
						<td><?php echo $item['email_cliente']; ?></td>
						<td><?php echo $item['telefone']; ?></td>
						<td><?php echo $item['foto_cliente']; ?></td>
						<td>
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
							?>
						</td>
						<td><a href="alterar-cliente.php?id=<?php echo $item['id_cliente']; ?>">Alterar</a></td>
					</tr>
		<?php
				}
		?>
				</tbody>
			</table>
		<?php
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>