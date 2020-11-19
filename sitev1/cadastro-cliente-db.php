<?php 
    include('conexao.php');
?>
<?php 
    $nome     = $_POST['nome'];
    $email    = $_POST['email'];
    $telefone = $_POST['telefone'];
    $usuario  = $_POST['usuario'];
    $senha   = $_POST['senha'];
    $arquivo  = $_FILES['foto'];
    $foto     = 'null';
    $data = date('Y-m-d');

    $senhaEncriptada = md5($senha);


    if ($arquivo) {
       $caminho = $arquivo['tmp_name'];
       $novo = date('YmdHis') . $arquivo['name'];
       if( move_uploaded_file($caminho, "img_upload_cliente/$novo")){
            $foto = "'$novo'";
       }
    }

    $sql = "INSERT INTO cliente VALUES (null,'$nome', '$email', '$telefone', '$usuario', '$senhaEncriptada', $foto , 2, '$data')";
    
    $retorno = mysqli_query($con, $sql);
    if ($retorno) {
        header('location: login.php?retorno=CadastroSucess');
    }else{
        echo 'Cliente não foi cadastrado! Erro: ' .mysqli_error($con);
    };

?>