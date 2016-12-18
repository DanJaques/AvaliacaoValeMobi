<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$host="localhost";
$user="1063728";
$pass="danielqpzm";
$banco="1063728";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die(mysql_error());


$sql = "SELECT * FROM produto LIMIT 30;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

        echo    "<tr>
        <td>".$row["nome"]."</td>
        <td>".$row["descricao"]."</td>
        <td>".$row["codigo"]."</td>
        <td>".$row["quantidade"]."</td>

    </tr>";

    }
} else {echo "0 results";}

mysqli_close($conn);
?>
</body>
</html>