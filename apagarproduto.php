<?php
    session_start();
    include("conecta.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM cliente WHERE id='$id'";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'>
        alert('Cliente apagado com sucesso!');
        window.location.href='produto.php';
        </script>";
    }else{
        echo "<script language='javascript' type='text/javascript'>
        alert('Cliente não foi apagado!');
        window.location.href='produto.php';
        </script>";
    }
    mysqli_close($conn);
?>