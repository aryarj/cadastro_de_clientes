<?php
session_start();
include("conecta.php");
$login = $_POST['login'];
$senha = $_POST['senha'];
if($login == "" || $senha == ""){
    echo ("<script>alert('Login ou senha em branco!');</script>");
    echo ("<script>location.href='index.php';</script>");
}
$logar = mysqli_query($conn, "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die("Erro ao selecionar!");
if(mysqli_num_rows($logar)>0){
    $_SESSION["user"] = $_POST['login'];
    echo ("<script>location.href='produto.php';</script>");
} else {
    echo ("<script>alert('Login ou senha inválido!');</script>");
    echo ("<script>location.href='index.php';</script>");
}
mysqli_close($conn);
?> 