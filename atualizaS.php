<?php
require_once "./php/validador_acesso.php";
include('./php/Conn.php');

$sql = "SELECT id, nome FROM produtos ORDER BY nome";
$get_sql = $conn->query($sql) or die("Falha na conexão" . $conn->error);

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
            <a href="./home.php">Cadastro de usuários</a>
            <a href="./cadProduct.php">Cadastrar Produto</a>
            <a href="#atualiza-venda">Atualizar Produto</a>
            <a href="./vendaP.php"> Venda</a>
            <a href="./relatorio.php">Relatórios</a>
        </div>
    </nav>
    <div id="menu">
        <div id="atualiza-venda">
            <h3>Atualizar Estoque</h3>
            <form action="./php/getup.php" method="POST">
                <div class="campo">
                    <p>Produto:</p>
                    <select name="produtos" id="produtos" required>
                        <option value="" selected>Escolher...</option>
                        <?php while ($produto = $get_sql->fetch_assoc()) { ?>
                            <option value="<?php echo $produto['id'] ?>" key=<?php echo $produto['id'] ?>>
                                <?php echo $produto['nome'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="campo">
                    <p>Quantidade:</p>
                    <input type="text" name="estoque" placeholder="Digite a quantidade" required>
                </div>
                <div class="campo">
                    <button type="submit" class="btn">Atualizar</button>
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
    <?php $conn->close();?>
</body>

</html>