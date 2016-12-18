<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>

    <script>
        function VoltarPgInicial()
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

?>

<?php

$nomeProduto=$_POST['nomeProduto'];
$descProduto=$_POST['descProduto'];
$codProduto=$_POST['codProduto'];
$qtdProduto=$_POST['qtdProduto'];
$sql = mysql_query("INSERT INTO cadastro(nome, descricao, codigo, quantidade)VALUES('$nomeProduto', '$descProduto', '$codProduto', '$qtdProduto')");
echo"<script>alert('Produto cadastrado com sucesso!')</script>";
echo"<script>VoltarPgInicial()</script>";
?>

</body>
</html>