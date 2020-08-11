<?php
session_start();
include("conecta.php");
$login = $_POST['login'];
$senha = base64_encode($_POST['senha']);
if($login == "" || $senha == ""){
    echo ("<script>alert('Login ou senha em branco!');</script>");
    echo ("<script>location.href='index.php';</script>");
}
$logar = mysqli_query($conn, "SELECT * FROM clientes WHERE login = '$login' AND senha = '$senha'") or die("Erro ao selecionar!");
if(mysqli_num_rows ($logar) > 0 )
{
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	echo ("<script>location.href='vitrine.php';</script>");
}
else{
	unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    echo ("<script>alert('Login ou senha inválido!');</script>");
    echo ("<script>location.href='index.php';</script>");  
}
mysqli_close($conn);
?> 