<?php
require_once "./php/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>ControlS</title>

</head>

<body>
    <nav class="navbar">
        <div class="saudacao">
            <img src="./user-svgrepo-com.svg" alt="">
            <h2><?php echo $_SESSION['nome'] ?></h2>
        </div>
        <div class="links">
            <a href="#cadastro">Cadastro de usuários</a>
            <a href="./cadProduct.php">Cadastrar Produto</a>
            <a href="./atualizaS.php">Atualizar Produto</a>
            <a href="./vendaP.php"> Venda</a>
            <a href="./relatorio.php">Relatórios</a>
        </div>
    </nav>
    <div id="menu">
        <div id="cadastro">
            <h3>Cadastro de Usuários</h3>
            <form action="./php/cadastro.php" method="POST">
                <div class="campo">
                    <p>Nome:</p>
                    <input type="text" name="nome" placeholder="Nome completo" required>
                </div>
                <div class="campo">
                    <p>CPF:</p>
                    <input type="text" name="cpf" placeholder="Digite o CPF" required>
                </div>
                <div class="campo">
                    <p>Email:</p>
                    <input type="email" name="email" placeholder="Digite o Email" required>
                </div>
                <div class="campo">
                    <p>Telefone:</p>
                    <input type="number" name="telefone" placeholder="Digite o telefone" required>
                </div>
                <div class="campo">
                    <p>Usuário:</p>
                    <input type="text" name="usuario" placeholder="Digite o usuario" required>
                </div>
                <div class="campo">
                    <p>Senha:</p>
                    <input type="password" name="senha" placeholder="Digite a senha" required>
                </div>
                <div class="campo">
                    <button type="submit" class="btn">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p>
            <a href="./php/logout.php">Sair</a>
        </p>
        <h2>Desenvolvido por Erik Dionata de Souza</h2>
    </footer>
</body>

</html>