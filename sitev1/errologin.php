<?php
	
	include('conexao.php');


	$login = $_POST['nome_login'];
	$senha = MD5($_POST['password_login']);

	$queryLogin = "SELECT * FROM usuarios where login = '$login' and senha = '$senha'";
	$retornoLogin = mysqli_query($con, $queryLogin);

	$logaSite = "";

	if (!mysqli_num_rows($retornoLogin)){
		echo "erro ao autenticar usuário"; 
	} else {
		header('Location: index.html');
	}


  ?>