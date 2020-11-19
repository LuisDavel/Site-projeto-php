<?php
	//include('validar.php');
	include('conexao.php');
	
	$tipoPagamento    = $_POST['tipoPagamento'];
	$numCartao        = $_POST['numCartao'];
	
	$sql = "INSERT INTO Pagamento VALUES (null, '$tipoPagamento', '$numCartao')";
	$retorno = mysqli_query($con, $sql);
	if(!$retorno) {
		header('Location: listar-forma-pagamento.php?erro=2&msg=' . mysqli_error($con));
	} else {
		header('Location: listar-forma-pagamento.php?sucesso=2&msg=' . mysqli_insert_id($con));
	}
	mysqli_close($con);
?>