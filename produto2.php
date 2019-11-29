<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<section>
    <form action="cad_produto.php" method="POST">
        <fieldset>
            <label>Nome do cliente</label>
            <input type="text" name="nome"/><br/><br/>
            <label>Telefone</label>
            <input type="text" name="telefone"/><br/><br/>
            <label>Cidade</label>
            <input type="text" name="cidade"/><br/><br/>
            <label>email</label>
            <input type="text" name="email"/><br/><br/>
            <button type="submit">Cadastrar</button>
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