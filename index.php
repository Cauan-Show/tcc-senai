<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            session_start(); 
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
        <form autocomplete="on" method="POST" action="login.php">
            <fieldset>
                <legend>Entrar na conta</legend>
                <label>Usuário</label>
                <input name="login" type="text" placeholder="Ex: Cleiton"/></br></br>
                <label>Senha</label>
                <input name="senha" type="password" placeholder="Ex: natalha123"/></br></br>
                <a href="cadastrarusuario.html">Ainda não tem uma conta? Clique aqui para se cadastrar.</a></br></br>
                <button type="submit">Entrar</button>
            </fieldset>
        </form>
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