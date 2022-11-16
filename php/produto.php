<?php 
include("Conn.php");

    $nome = $_POST['nome'];
    is_float($compra = $_POST['compra']);
    is_float($venda = $_POST['venda']);
    $estoque = $_POST['estoque'];

    $query_product = "INSERT INTO produtos
                (nome, compra, venda, estoque)
                VALUES ('$nome', '$compra', '$venda', '$estoque')";

    if(mysqli_query($conn,$query_product)){

        header("Location: ../cadProduct.php?=sucess");
        
    }else{
        //echo 'Erro:'. mysqli_connect_error();
        header("Location: ../cadProduct.php?=fail");
        
    }
        
    mysqli_close($conn);

?>