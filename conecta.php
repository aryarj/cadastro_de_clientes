<?php
    $servername = "localhost";
    $database = "ary_prova";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password, $database);
    if (!$conn){
        die("Conexão falhou:".mysqli_connect_error());
    }
?>