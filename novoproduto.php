<?php
	include("conecta.php");
	$nome = $_POST['nome'];
	$quantidade = $_POST['quantidade'];
	$preco = $_POST['preco'];

	$insere = mysqli_query($conn, "INSERT INTO produtos (nome, quantidade, preco) VALUES ('$nome','$quantidade','$preco') ");
	echo ("<script>location.href = 'admin.php';</script>");
	mysqli_close($conn);
?>