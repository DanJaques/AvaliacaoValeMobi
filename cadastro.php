<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title></title>

    <script>
        function Voltar()
        {
            location.href="index.html";
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
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysql_query("INSERT INTO usuarios(nome,email,senha)VALUES('$nome', '$email', '$senha')");
echo"<script>alert('Cadastro realizado com sucesso!')</script>";
echo"<script>Voltar()</script>";
?>



</body>
</html>