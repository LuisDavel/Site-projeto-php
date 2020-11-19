<?php 
    include('conexao.php');
?>
<?php 
    $quantidade     = $_POST['quantidade'];
    $data_compra    = date('d/m/Y');
    $formaPagamento = $_POST['formaPagamento'];


    $sql = "INSERT INTO tipo_pagamento ('$quantidade', '$data_compra', '$formaPagamento')";
    
    $retorno = mysqli_query($con, $sql);
    if ($retorno) {
        header('location: login.php?retorno=CadastroSucess');
    }else{
        echo 'Cliente não foi cadastrado! Erro: ' .mysqli_error($con);
    };
    mysqli_close();

?>