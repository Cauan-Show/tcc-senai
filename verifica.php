<?php
    include("conecta.php");
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = base64_encode($_POST['senha']);
    $email = $_POST['email'];

    $usuario = mysqli_query($conn, "SELECT * FROM clientes WHERE cpf = '$cpf'") or die (mysqli_error($conn));
    if(mysqli_num_rows($usuario) > 0){
        echo ("<script>alert('CPF já cadastrado em nossa base de dados!');</script>");
        echo ("<script>location.href='cadastrarusuario.html';</script>");
        mysqli_close($conn);
    }
    $logusuario = mysqli_query($conn, "SELECT * FROM clientes WHERE login = '$login'") or die (mysqli_error($conn));
    if (mysqli_num_rows($logusuario) > 0){
        echo ("<script>alert('Nome de usuário já cadastrado! Tente novamente!');</script>");
        echo ("<script>location.href = 'cadastrarusuario.html';</script>");
        mysqli_close($conn);
    }
    $sql = "INSERT INTO clientes(cpf, nome, login, senha, email) VALUES ('$cpf', '$nome', '$login', '$senha', '$email')";
    $cadastrar = mysqli_query($conn, $sql);
    echo ("<script>alert('Cadastro de usuário realizado com sucesso! Faça o seu login!');</script>");
    echo ("<script>location.href = 'index.php';</script>");
    mysqli_close($conn);
?>