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
<section>
    <?php
        include("produto2.php");
    ?>
</section>
<hr/>
</body>
</html>