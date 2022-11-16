<?php
require_once "./php/validador_acesso.php";
include('./php/Conn.php');

$sql_prod = "SELECT * FROM produtos";
$get_prod = $conn->query($sql_prod);

$sql_sale = "SELECT * FROM venda";
$get_sale = $conn->query($sql_sale);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylo.css">

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
            <a href="./atualizaS.php">Atualizar Produto</a>
            <a href="./vendaP.php"> Venda</a>
            <a href="#relatorios">Relatórios</a>
        </div>
    </nav>
    <div id="menu">
        <div id="butoes">
            <button class="btnU">Relatorio de Produtos</button>
            <button class="btnD">Relatorio de Vendas</button>
        </div>
        <div id="ralatorios">
            <div id="rp" class="hide">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço de Compra</th>
                        <th>Preço de Venda</th>
                        <th>Estoque</th>
                        <th>Ação</th>
                    </tr>
                    <?php while ($item = $get_prod->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $item['id'] ?></td>
                            <td><?php echo $item['nome'] ?></td>
                            <td><?php echo $item['compra'] ?></td>
                            <td><?php echo $item['venda'] ?></td>
                            <td><?php echo $item['estoque'] ?></td>
                            <td>
                                <a class="del" href="./php/delete.php?id=<?php echo $item['id']?>">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <div id="rv" class="hide">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Valor da Venda</th>
                        <th>Quantidade</th>
                        <th>Açao</th>
                    </tr>

                    <?php while ($item = $get_sale->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $item['id']?></td>
                            <td><?php echo $item['produto']?></td>
                            <td><?php echo $item['venda']?></td>
                            <td><?php echo $item['qunatidade']?></td>
                            <td>
                                <a class="del" href="./php/deletes.php?id=<?php echo $item['id']?>">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>
            <a href="./php/logout.php">Sair</a>
        </p>
        <h2>Desenvolvido por Erik Dionata de Souza</h2>
    </footer>
    <script src="./js/script.js"></script>
</body>

</html>