<?php
	include('../conexao.php');
	
	$json = isset($_POST['json']) ? json_decode($_POST['json'], true) : [];
	
	foreach($json as $item) {
		$id_jogo 				= isset($item['id_jogo']) ? $item['id_jogo'] : '';
		$nome_jogo  	    	= $item['nome_jogo'];
		$preco_jogo  	    	= $item['preco_jogo'];
		$data_publicacao 		= $item['data_publicacao'];
		$descricao_jogo 		= $item['descricao_jogo'];
		$especificacoes_jogo 	= $item['especificacoes_jogo'];
		$regiao_key 			= $item['regiao_key'];
		$promocao_jogo 			= $item['promocao_jogo'];
		$id_plataforma 			= $item['id_plataforma'];
		$id_classificacao 		= $item['id_classificacao'];
		$id_categoria 			= $item['id_categoria'];
		$id_loja 				= $item['id_loja'];
		$id_distribuidora 		= $item['id_distribuidora'];
		$id_modo_jogo 			= $item['id_modo_jogo'];
		$id_idioma 				= $item['id_idioma'];
		
		if(!$id_jogo || $id_jogo < 1) {
						$sql = "INSERT INTO Jogo VALUES (null, '$nome_jogo', '$preco_jogo','$data_publicacao','$descricao_jogo','$especificacoes_jogo','$regiao_key ','$promocao_jogo ','$id_plataforma','$id_classificacao','$id_categoria','$id_loja','$id_distribuidora','$id_modo_jogo','$id_idioma')";
		} else {
			$sql = "UPDATE Jogo SET nome_jogo = '$nome_jogo', preco_jogo = '$preco_jogo', data_publicacao = '$data_publicacao',descricao_jogo = '$descricao_jogo', especificacoes_jogo = '$especificacoes_jogo',regiao_key = '$regiao_key ', promocao_jogo = '$promocao_jogo ', id_plataforma = '$id_plataforma',id_classificacao = '$id_classificacao', id_categoria = '$id_categoria',id_loja = '$id_loja', id_distribuidora = '$id_distribuidora',id_modo_jogo ='$id_modo_jogo', id_idioma ='$id_idioma'";
		}
		
		mysqli_query($con, $sql);
	}
	
	echo json_encode(array('sucesso' => true, 'mensagem' => 'Produto cadastrado/alterado'));
	
	mysqli_close($con);
?>