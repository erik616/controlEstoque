<?php
require_once "./php/validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ControlS</title>
    <link rel="stylesheet" href="css/style.css">

</head>



<body>
    <nav class="navbar">
        <div class="saudacao">
            <img src="./user-svgrepo-com.svg" alt="">
            <h2><?php echo $_SESSION['nome'] ?></h2>
        </div>
        <div class="links">
            <a href="./home.php">Cadastro de usuários</a>
            <a href="#cadastro-product">Cadastrar Produto</a>
            <a href="./atualizaS.php">Atualizar Produto</a>
            <a href="./vendaP.php"> Venda</a>
            <a href="./relatorio.php">Relatórios</a>
    </nav>
    <div id="menu">
        <div id="cadastro-product">
            <h3>Cadastro de Produtos</h3>
            <form action="./php/produto.php" method="POST">
                <div class="campo">
                    <p>Nome:</p>
                    <input type="text" name="nome" placeholder="Nome completo">
                </div>
                <div class="campo">
                    <p>Preço de Compra:</p>
                    <input type="text" name="compra" placeholder="Digite o Preço">
                </div>
                <div class="campo">
                    <p>Preço de venda:</p>
                    <input type="text" name="venda" placeholder="Digite o Valor de Venda">
                </div>
                <div class="campo">
                    <p>Estoque:</p>
                    <input type="number" name="estoque" placeholder="Digite a Quantidade Disponivel">
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