<?php 
include("./Conn.php");

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query_usuario = "INSERT INTO usuario
                (nome, cpf, email, telefone, usuario, senha)
                VALUES ('$nome', '$cpf', '$email', '$telefone', '$usuario', '$senha')";

    if(mysqli_query($conn,$query_usuario)){

        echo '<script language="javascript">console.log("Usuário cadastrado com sucesso!");</script>';
        header("Location: ../home.php?=sucess");

    }else{

        echo '<script language="javascript">console.log("Erro ao cadastrar");</script>';
        header("Location: ../home.php?=fail");
        
    }
        
    mysqli_close($conn);
?>