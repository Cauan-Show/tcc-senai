<?php
	include("conecta.php");
	$id = $_GET['id'];

	$apaga = mysqli_query($conn, "DELETE FROM produtos WHERE id = '$id' ");
	echo ("<script>location.href = 'admin.php';</script>");
	mysqli_close($conn);
?>