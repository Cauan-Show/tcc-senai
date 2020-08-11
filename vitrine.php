<?php
    include("conecta.php");
    $bu = "SELECT * FROM produtos";
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
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:index.php');
        }
 
        $logado = $_SESSION['login'];
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
            echo "Olá $logado";
        ?>
        </br></br>
        <a href="sair.php"><button>Sair</button></a><hr/></br>
        <div align="center">
                <?php while($dado = $busca -> fetch_array()) { ?>
                <tr>
                    <?php $id = $dado["id"]; ?>
                    <td><?php echo $dado["nome"]; ?></td>
                    <td> R$ <?php echo $dado["preco"]; ?></td>
                    <td><?php echo "<a href='comprar.php?id=$id'>Comprar</a>";?></td>
                </tr></br></br>
                <?php } ?>
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