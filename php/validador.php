<?php
    include("./Conn.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
    $query_sql = $conn->query($sql) or die("Falha na conexão".$conn->error);

    $num = $query_sql->num_rows;
    if($num == 1) {
        $usuario_conn = $query_sql->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario_conn['id'];
        $_SESSION['nome'] = $usuario_conn['nome'];

        header("Location: ../home.php");
    } else {
        header ("Location: index.php?login=erro");
    }

?>