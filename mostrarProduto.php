<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet"  type="text/css" href="bootstrap/css/estilo.css"/>


    <title></title>
</head>
<body>

<table class="table table-hover">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Descrição </th>
        <th>Código</th>
        <th>Quantidade</th>
    </tr>
    </thead>
    <tbody>




<?php
$host="localhost";
$user="1063728";
$pass="danielqpzm";
$banco="1063728";
$conexao = new mysqli($host, $user, $pass, $banco);

$sql = "SELECT * FROM cadastro LIMIT 30;";
$result = mysqli_query($conexao, $sql);

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

mysqli_close($conexao);
?>

</tbody>
    </table>

</body>
</html>