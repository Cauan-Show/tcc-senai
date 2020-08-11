<?php
session_start();
include("conecta.php");
$login = $_POST['loginadmin'];
$senha = $_POST['senhaadmin'];
if($login == "" || $senha == ""){
    echo ("<script>alert('Login ou senha em branco!');</script>");
    echo ("<script>location.href='entraradmin.php';</script>");
}
$logar = mysqli_query($conn, "SELECT * FROM admin WHERE loginadmin = '$login' AND senhaadmin = '$senha'") or die("Erro ao selecionar!");
if(mysqli_num_rows ($logar) > 0 )
{
	$_SESSION['loginadmin'] = $login;
	$_SESSION['senhaadmin'] = $senha;
	echo ("<script>location.href='admin.php';</script>");
}
else{
	unset ($_SESSION['loginadmin']);
    unset ($_SESSION['senhaadmin']);
    echo ("<script>alert('Login ou senha inválido!');</script>");
    echo ("<script>location.href='entraradmin.php';</script>");  
}
mysqli_close($conn);
?> 