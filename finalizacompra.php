<?php
	session_start();
	include("conecta.php");
	$id = $_GET['id'];
	$cpf = $_POST['cpf'];
	$endereco_cliente = $_POST['endereco_cliente'];
	$telefone_cliente = $_POST['telefone_cliente'];
	
	$nome_cliente = $_SESSION['login'];

	$gerar_pedido = mysqli_query($conn, "
		INSERT INTO pedidos ('endereco_cliente', 'nome_cliente', 'telefone_cliente') VALUES ('$endereco_cliente', '$nome_cliente', '$telefone_cliente')
		 ");
	
	echo("<script>location.href='vitrine.php';</script>");
	mysqli_close();
?>