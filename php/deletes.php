<?php
    

    if(!empty($_GET['id'])){
        include("./Conn.php");

        $id = $_GET['id'];

        $sql_get = "SELECT * FROM venda WHERE id = '$id'";
        $search = $conn->query($sql_get);

        if($search->num_rows > 0) {
            $delete_sql = "DELETE FROM venda WHERE id = '$id'";
            $del = $conn->query($delete_sql);
        }
        
    }
    
    header('Location:../relatorio.php');
    $conn->close();

?>