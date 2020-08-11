<?php
    $servername = "localhost";
    $database = "assados";
    $username = "root";
    $password = "senhafodaroot123";
    $conn = new mysqli($servername, $username, $password, $database);
    if (!$conn){
        die ("Conexão falhou:".mysqli_connect_error());
    } 
?>