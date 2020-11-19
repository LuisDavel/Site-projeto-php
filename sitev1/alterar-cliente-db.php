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
			$id       = $_POST['id'];
			$nome     = $_POST['nome'];
			$telefone = $_POST['telefone'];
			$email 	  = $_POST['email'];
			$senha    = $_POST['senha'];
			$arquivo  = $_FILES['foto'];
		    $foto     = 'null';

		    if ($arquivo) {
		       $caminho = $arquivo['tmp_name'];
		       $novo = date('YmdHis') . $arquivo['name'];
		       if( move_uploaded_file($caminho, "imagens/cliente/$novo"){
		            $foto = ", foto = '$novo'";
		       }
		    }
			
			$sql = "UPDATE cliente SET nome_cliente = '$nome', telefone = '$telefone', email_cliente = '$email', senha_cliente = '$senha' $foto WHERE id_cliente = $id";
			
			$retorno = mysqli_query($con, $sql);
			if (!$retorno) {
				header('Location: listar-cliente.php?erro=3&msg=' . mysqli_error($con));
			} else {
				header('Location: listar-cliente.php?sucesso=3&msg=' . $id);
			}
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>


