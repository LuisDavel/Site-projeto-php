<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro Cliente</title>
		<link rel="stylesheet" type="text/css" href="css/styleCadastroCliente.css" />
	</head>
	<body>
	<header id="Cabeçalho">
		<nav id="Navegador">
            <a href="index.php">INICIO</a>
			<a href="#">NOTICIA</a> 
			<a class="Ativo" href="cadastro-cliente.php">CLIENTE</a>
			<a href="cadastro-forma-pagamento.php">CADASTRO FORMA PAGAMENTO</a>
			<a href="#">CADASTRO VENDAS</a>              
		</nav>
	</header>
		<section id="Corpo">	
			<div class = "MoveLado">
				<form action="cadastro-cliente-db.php" method="post" enctype="multipart/form-data" class="">
					<label for="nome">Nome Completo:</label><br>
					<input class='input_modifica' type="text" name="nome" id="nome" maxlength="20">
					<p>* Utilizado para salvar o nome.</p>
	
					<label for="email">Email:</label><br>
					<input class='input_modifica' type="text" name="email" id="email" maxlength="100">
					<p>* Utilizado para relatar informações com o cliente.</p>
	
					<label for="telefone">Telefone:</label><br>
					<input class='input_modifica' type="text" name="telefone" id="telefone" maxlength="11">
					<p>* Utilizado para segurança da conta.</p>
	
					<label for="usuario">Login:</label><br>
					<input class='input_modifica' type="text" name="usuario" id="usuario" maxlength="20">
					<p>* Utilizado para fazer seu login na plataforma.</p>
	
					<label for="senha">Senha:</label><br>
					<input class='input_modifica' type="password" name="senha" id="senha" minlength="8" maxlength="12">
					<p>* Utilizado para fazer seu login na plataforma.</p>
	
					<label for="foto">Foto</label><br>
					<input type="file" name="foto">
					<p>* Foto utilizada no perfil.</p><br><br>
	
					<input class='input_botao' type="submit" value="Cadastrar">
				</form>
			</div>
		</section>
	</body>
</html>
