<?php
	include('conexao.php');

	$sql = "SELECT * FROM cliente";
	$retorno = mysqli_query($con,$sql);

	$lista = [];
	while ($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
		$lista[] = $item;
	}

	echo json_encode($lista);

	mysqli_close($con);

?>