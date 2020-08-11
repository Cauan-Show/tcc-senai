<?php
    include("conecta.php");
    $bu = "SELECT id, nome, quantidade, preco FROM produtos";
    $busca = $conn -> query($bu) or die ($conn -> error);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php 
        /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
         simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
        o caminho para a página principal do site , burlando assim a obrigação de 
        fazer um login, com isso se ele não estiver feito o login não será criado a session, 
        então ao verificar que a session não existe a página redireciona o mesmo
         para a index.php.*/
        session_start();
        if((!isset ($_SESSION['loginadmin']) == true) and (!isset ($_SESSION['senhaadmin']) == true))
        {
            unset($_SESSION['loginadmin']);
            unset($_SESSION['senhaadmin']);
            header('location:index.php');
        }
         
        $adminlogado = $_SESSION['loginadmin'];
        ?>
        <meta name="author" content="SENAI CTM"/>
        <meta charset="UTF8"/>
        <link rel="sortcut icon" href="imagens\logo.jpg" type="image/jpg"/>
        <link rel="stylesheet" href="css\pagestyle.css"/>
        <title>Divino Assados</title>
    </head>
    <body>
        <div align="center">
            <h1>Divino Assados</h1>
        </div>
        <?php
            echo "Olá $adminlogado , você está agora no modo de administração";
        ?>
        </br></br>
        <a href="sairadmin.php"><button>Sair do modo admin</button></a><hr/></br>
        <div align="center">
            <table border="1px" width="465px">
                <tr>
                    <td>ID</td>
                    <td>Nome do produto</td>
                    <td>Quantidade em estoque</td>
                    <td>Preço</td>
                    <td>Ação</td>
                </tr>
                <?php while($dado = $busca -> fetch_array()) { ?>
                <tr>
                    <td><?php echo $dado["id"]; ?></td>
                    <?php $id = $dado["id"]; ?>
                    <td><?php echo $dado["nome"]; ?></td>
                    <td><?php echo $dado["quantidade"]; ?></td>
                    <td><?php echo $dado["preco"]; ?></td>
                    <td><?php echo "<a href='editar.php?id=$id'>Editar</a>";?> | <?php echo "<a href='excluir.php?id=$id'>Excluir</a>";?></td>
                </tr>
                <?php } ?>
            </table>
            </br>
            <a href="adicionar.php"><button> Adicionar Produto </button></a>
        </div>
        <footer>
            </br>
            </br>
            </br>
            <hr/>
            <p></p>
            <h4 align="center">TDS02 - SENAI - CTM</h4>
            <h5 align="center">Maringá - 2020</h5>
        </footer>
    </body>
</html>