<?php
    include("conecta.php");
    $id = $_GET['id'];
    $busca = "SELECT * FROM produtos WHERE id = '$id'";
    $buscar = $conn -> query($busca) or die ($conn -> error);
    $dado = $buscar -> fetch_array();
    $idv2 = $dado["id"];
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
        <fieldset> 
            <?php echo "<form method='POST' action='finalizacompra.php?id=$idv2'>";?>
            		*imagem do produto*</br>
                	<?php echo $dado["nome"]; ?></br>               	
                	Em estoque: <?php echo $dado["quantidade"]; ?></br>
                	R$<?php echo $dado["preco"]; ?></br></br>

                	<label>Confirme seu CPF: </label>
                	<input placeholder="Ex: XXX.XXX.XXX-XX" name="cpf"/></br></br> 
                	<label>Telefone para contato: </label>
                	<input placeholder="Ex: (XX) XXXX-XXXX" name="telefone_pedido"/></br></br>	
                	<label>Endereço de entrega: </label>
                	<input placeholder="Ex: R. Chihiro Bairro Naughisa 999" name="endereco_pedido"/></br></br> 	
                <button type="submit">Confirmar Compra</button>
            </form>
        </fieldset>
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