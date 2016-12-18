<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>

    <script>
    function VoltarPgInicial2()
    {
    location.href="paginaInicial.html";
    }
    </script>
</head>


<body>



<?php
$host="localhost";
$user="1063728";
$pass="danielqpzm";
$banco="1063728";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die(mysql_error());
echo"<script>alert('Venda realizada com sucesso!')</script>";
echo"<script>VoltarPgInicial2()</script>";

?>
</body>
</html>