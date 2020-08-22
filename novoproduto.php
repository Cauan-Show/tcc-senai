<?php
	include("conecta.php");
	$nome = $_POST['nome'];
	$quantidade = $_POST['quantidade'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$imagem = $_FILES['imagem']['tmp_name'];
	$tamanho = $_FILES['imagem']['size'];
	$tipo_imagem = $_FILES['imagem']['type'];
	$nome_imagem = $_FILES['imagem']['name'];

	if ($imagem != "" )
	{
	    $fp = fopen($imagem, "rb");
	    $conteudo = fread($fp, $tamanho);
	    $conteudo = addslashes($conteudo);
	    fclose($fp);

	$inserir = mysqli_query($conn, " INSERT INTO produtos (nome,
	quantidade, preco, descricao, imagem, tamanho, tipo_imagem, nome_imagem) VALUES ('$nome','$quantidade','$preco','$descricao','$imagem','$tamanho','$tipo_imagem','$nome_imagem') ") or die ("Erro ao inserir o produto. Tente Novamente");
		if(mysqli_affected_rows($conn) > 0){
	    	echo "<script>location.href='admin.php';</script>";
		}
	 	else{
	    	echo "<script>alert('Não foi possível enviar!');</script>";
	    	echo "<script>location.href='adicionar.php';</script>";
	 	}
	}
	
	else{
		echo"<script>alert('Não foi possível carregar a imagem.');</script>";
		echo"<script>location.href='adicionar.php';</script>";
	}
	   
	mysqli_close($conn);
?>