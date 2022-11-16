<?php
    include("./Conn.php");

    $id = $_POST['produtos'];
    $estoque = $_POST['estoque'];

    

    $sql_get = "SELECT * FROM produtos WHERE id = '$id' ";
    $get_sql = $conn->query($sql_get) or die("Falha na conexão" . $conn->error);
    $item = $get_sql->fetch_assoc();

    $id_bd = $item['id'];
    $nome_bd = $item['nome'];
    $venda_bd =  $item['venda'];
    $estoque_bd = $item['estoque'];
    
    if($estoque > $estoque_bd)
    {

        header("Location: ../vendaP.php?=Estoque Insuficiente");

    }
    else if($estoque < $estoque_bd)
    {

    $new_estoque = $estoque_bd - $estoque;
    print_r($new_estoque);

    $sql = "UPDATE produtos SET estoque = '$new_estoque' WHERE id = '$id'";
    $set_sql = $conn->query($sql) or die("Falha na conexão".$conn->error);

    

    // GRAVAR EM UM ARQUIVO AS INFORMAÇÕES DA VENDA
    $preco_venda = $estoque * $venda_bd;
    $sql_set = "INSERT INTO venda(id, produto, venda, qunatidade) 
    VALUES ('$id_bd ','$nome_bd','$preco_venda','$estoque')";
    mysqli_query($conn,$sql_set);

    if($set_sql){

        header("Location: ../vendaP.php?=Vendido com Sucesso");

    }else{

        header("Location: ../vendaP.php?=ERRO");
    }
}

    $conn->close(); 
?>

