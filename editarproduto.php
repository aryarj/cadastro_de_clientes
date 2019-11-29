<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<div align="center"><h1><b>Cadastro de clientes</b></h1></div>
<hr/>
<table>
    <tr>
        <td>
            <a href='produto.php' style='text-decoration:none; font-weight:bold;'>Home</a> |
        </td>
        <td>
            <?php
                session_start();
                include("conecta.php");
                $user = $_SESSION["user"];
                echo $user;
                echo "&nbsp;|&nbsp;";
                echo "<a href='sair.php' style='text-decoration:none; font-weight:bold;'>&nbsp;&nbsp;Sair&nbsp;</a>";
            ?>
        </td>
    </tr>
</table>
<br/>
<?php
    include("conecta.php");
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM cliente WHERE id = '".$id."'") or die(mysqli_error($conn));
    while($produto = $sql->fetch_array()){
?>
<section>
    <form action="atualizaproduto.php?id=<?php echo $id; ?>" method="POST">
        <fieldset>
            <label>Nome do cliente</label>
            <input type="text" name="nome" value="<?php echo $produto['nome'];?>"/><br/><br/>
            <label>Telefone</label>
            <input type="text" name="telefone" value="<?php echo $produto['telefone'];?>"/><br/><br/>
            <label>Cidade</label>
            <input type="text" name="cidade" value="<?php echo $produto['cidade'];?>"/><br/><br/>
            <label>email</label>
            <input type="text" name="email" value="<?php echo $produto['email'];?>"/><br/><br/>
            <?php
            }
            ?>
            <button type="submit">Atualizar</button>
        </fieldset>
    </form>
    <br/>
    <hr/>
    <?php
        $sql = mysqli_query($conn, "SELECT * FROM cliente ORDER BY nome") or die(mysqli_error($conn));
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nome do cliente</th>";
        echo "<th>Telefone</th>";
        echo "<th>Cidade</th>";
        echo "<th>email</th>";
        echo "<th>Ações</th>";
        echo "</tr>";
        while ($produto = mysqli_fetch_array($sql)){
            $id = $produto['id'];
            echo "<tr>";
            echo "<td>".$produto['nome']."</td>";
            echo "<td>".$produto['telefone']."</td>";
            echo "<td>".$produto['cidade']."</td>";
            echo "<td>".$produto['email']."</td>";
            echo '<td><a href="editarproduto.php?id='.$id.'">Editar</a>&nbsp;|&nbsp;<a href="apagarproduto.php?id='.$id.'">Apagar</a></td>';
        }
        echo "</table>";
        mysqli_close($conn);
    ?>    
</section>
<hr/>
</body>
</html>