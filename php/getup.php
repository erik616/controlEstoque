<?php
    include("./Conn.php");

    $id = $_POST['produtos'];
    $estoque = $_POST['estoque'];

    print_r($id.' '.$estoque);
    $sql = "UPDATE produtos SET estoque= '$estoque' WHERE id = '$id'";
    $get_sql = $conn->query($sql) or die("Falha na conexão".$conn->error);

if($get_sql){

    header("Location: ../atualizaS.php");
    echo '<script language="javascript">alert("Atualizado com sucesso");</script>';

}else{

    header("Location: ../atualizaS.php?=erro Ao Atualizar");
}

$conn->close(); ?>

?>