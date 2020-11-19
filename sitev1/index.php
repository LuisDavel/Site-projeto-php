<?php
	include('conexao.php');
?>
<?php
	if ($_SESSION['id'] == "") {
		header("Location:login.php");
	}
?>		

<!DOCTYPE html>
<html>
<head>
	<title>Emanation - Sua Loja digital de jogos</title>
	<link rel="stylesheet" type="text/css" href="css/styleIndex.css" />
</head>
<body>
<header id="Cabeçalho">
		<nav id="Navegador">
            <a class="Ativo" href="index.php">INICIO</a>
			<a href="listar-forma-pagamento.php">LISTAR CARTÕES</a> 
			<a href="listar-cliente.php">LISTAR CLIENTE</a> 
			<a href="cadastro-cliente.php">CLIENTE</a>
			<a href="cadastro-forma-pagamento.php">CADASTRO FORMA PAGAMENTO</a>
            <a href="login.php?acao=sair"><?php echo ''.$_SESSION['nome_completo']?></a>
		</nav>
	</header>
	
	<section id="Corpo">	
		 
	
	
	</section>
</body>
</html>