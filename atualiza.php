<?php
	include("conecta.php");
	$id = $_GET['id'];
	$nome = $_POST['nome'];
	$quantidade = $_POST['quantidade'];
	$preco = $_POST['preco'];

	$atualiza = mysqli_query($conn, "UPDATE produtos SET nome = '$nome', quantidade = '$quantidade', preco = '$preco' WHERE id = '$id' ");
	echo ("<script>location.href = 'admin.php';</script>");
	mysqli_close($conn);
?>