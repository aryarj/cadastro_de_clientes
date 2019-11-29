<?php
    session_start();
    include ("conecta.php");
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $sql = "UPDATE cliente SET nome = '$nome',telefone = '$telefone',cidade = '$cidade',email='$email' WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Cliente atualizado com sucesso!');
        window.location.href = 'produto.php';
        </script>";
    } else {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Não foi possível atualizar o cliente!');
        window.location.href = 'produto.php';
        </script>";
    }
    mysqli_close($conn);
?>