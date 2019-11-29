<?php
    session_start();
    include("conecta.php");
    $nomeprod = $_POST['nome'];
    $quantidade = $_POST['telefone'];
    $preco = $_POST['cidade'];
    $email=$_POST['email'];
    /*echo $nomeprod;*/
    $sql2=mysqli_query($conn,"SELECT * from cliente where nome='".$nomeprod."'");
    if (mysqli_num_rows($sql2)>0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Esse cliente já foi cadastrado!');
        window.location.href='produto.php';
        </script>";
}else{
        $sql = "INSERT INTO cliente(nome,telefone,cidade,email) VALUES ('$nomeprod','$quantidade','$preco','$email')";
        if(mysqli_query($conn,$sql)){
            echo "<script language='javascript' type='text/javascript'>
            alert('Cliente cadastrado com sucesso!');
            window.location.href='produto.php';
            </script>";
        }else{
            echo "<script language='javascript' type='text/javascript'>
            alert('Cliente não foi cadastrado!');
            window.location.href='produto.php';
            </script>";
        }
    }
        
    mysqli_close($conn);
?>