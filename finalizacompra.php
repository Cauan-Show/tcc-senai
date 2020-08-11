<?php
	session_start();
	include("conecta.php");
	$id = $_GET['id'];
	$endereco = $_POST['endereco'];
	$cpf = $_POST['cpf'];

	$subtrai = mysqli_query($conn, "SELECT quantidade (quantidade - 1) FROM produtos WHERE id = '$id' ");
	$adicionar = mysqli_query($conn, "UPDATE clientes SET endereco = '$endereco' WHERE cpf = '$cpf' ");
	
	echo("<script>location.href='vitrine.php';</script>");
	mysqli_close();
?>