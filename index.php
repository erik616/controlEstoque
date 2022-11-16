<?php
require './php/Conn.php';

// if(isset($_POST['usuario']) || isset($_POST['senha'])) {
    
//     include("validador.php");
    // $usuario = $conn->real_escape_string($_POST['usuario']);
    // $senha = $conn->real_escape_string($_POST['senha']);

    // $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
    // $query_sql = $conn->query($sql) or die("Falha na conexão".$conn->error);

    // $num = $query_sql->num_rows;
    // if($num == 1) {
    //     $usuario_conn = $query_sql->fetch_assoc();

    //     if(!isset($_SESSION)) {
    //         session_start();
    //     }

    //     $_SESSION['id'] = $usuario_conn['id'];
    //     $_SESSION['nome'] = $usuario_conn['id'];

    //     header("Location: home.php");
    // } else {
    //     echo 'ERRO';
    // }
//}
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <title>ControlS</title>
</head>

<body>
    <nav class="navbar">
        <h2>Sistemas de Controle de Estoque</h2>
    </nav>
    <main class="main">
        <div class="container">
            <h2>Entre com Usuário e Senha</h2>
            <form action="./php/validador.php" method="post">
                <div id="campos">
                    <div class="campo">
                        <p>Usuário</p>
                        <input type="text" name="usuario" id="usuario" placeholder="Digite seu nome de Usuário" required />
                    </div>
                    <div class="campo">
                        <p>Senha</p>
                        <input type='password' name='senha' id="senha" placeholder="Digite sua senha" required/>
                    </div>
                </div>
                <button class="btn" type="submit">Entrar</button>
            </form>
        </div>
    </main>
    <footer class="footer">
        <h2>Desenvolvido por Erik Dionata de Souza</h2>
    </footer>
    <?php $conn->close();?>
</body>

</html>