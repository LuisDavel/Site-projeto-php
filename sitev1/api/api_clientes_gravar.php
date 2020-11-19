<?php
	include('conexao.php');

	$json = isset($_POST['json']) ? json_decode($_POST['json'], true) : [];

	foreach ($json as $item) {
		$id_cliente 		= isset($item['id_cliente']) ? $item['id_cliente'] : '';
		$nome_cliente 		= $item['nome_cliente'];
		$email_cliente 		= $item['email_cliente'];
		$telefone_cliente 	= $item['telefone_cliente'];
		$usuario_cliente 	= $item['usuario_cliente'];
		$senha_cliente 		= $item['senha_cliente'];
		$foto 				= $item['foto'];
	
		if(!$id_cliente || $id_cliente < 1) {
			$sql = "INSERT INTO cliente VALUES (null, '$nome_cliente', '$email_cliente', '$telefone_cliente', '$usuario_cliente', '$senha_cliente', '$foto')";
		} else {
			$sql = "UPDATE cliente SET nome_cliente = '$nome_cliente', email_cliente = '$email_cliente', telefone_cliente = '$telefone_cliente', usuario_cliente = '$usuario_cliente', senha_cliente = '$senha_cliente', foto = '$foto' WHERE id_cliente = $id_cliente";
		}
		
		mysqli_query($con, $sql);
	}

	echo json_encode(array('sucesso' => true, 'mensagem' => 'Operação realizada com sucesso!'));

	mysqli_close($con);

?>
