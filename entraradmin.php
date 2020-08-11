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
        <form method="POST" action="loginadmin.php">
            <fieldset>
                <legend>Entrar no modo admin</legend>
                <label>Admin</label>
                <input name="loginadmin" type="text"/></br></br>
                <label>Senha</label>
                <input name="senhaadmin" type="password"/></br></br>
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