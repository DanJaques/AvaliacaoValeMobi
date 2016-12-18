<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>

    <script>
        function LoginSucesso() {
            setTimeout("window.location='paginaInicial.html'", 0);
        }

        function LoginFalhou() {
            setTimeout("window.location='index.html'", 0);
        }

        function Mensagem()
        {
            alert("Usuário ou senha incorretos.");

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

$email=$_POST['email'];
$senha=$_POST['senha'];
$sql=mysql_query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ") or die(mysql_error());
$row = mysql_num_rows($sql);

if ($row>0){
    session_start();
    $_SESSION['email']=$_POST['email'];
    $_SESSION['senha']=$_POST['senha'];
    echo"<script>LoginSucesso()</script>";
} else {
    echo"<script>LoginFalhou()</script>" ;
   echo"<script>Mensagem()</script>" ;

}


?>
</body>
</html>