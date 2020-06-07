<?php

include ("conecta.php");

$nome= $_POST ["nome"];	
$login= $_POST ["login"];	
$senha= $_POST["senha"];

$dbname='heroku_f1ac2596f1753e7';
$usuario='bc2145f4b3765f';
$password='b3acd899';
$localhost='us-cdbr-east-05.cleardb.net';

$conexao = mysqli_connect($localhost,$usuario,$password,$dbname) or die ('Não foi possível conectar');
$query = "INSERT INTO `usuario` (`nome`,`login`,`senha`) VALUES ('$nome', '$login', '$senha')";
//print $query;
mysqli_query($conexao, $query) or die ("Erro no comando SQL:".mysqli_error());
header("location: Login.php");

/*
if (!$conexao) die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error());
//conectando com a tabela do banco de dados
print "OI";
$banco = mysqli_select_db($conexao, "REA");
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());


mysqli_query($conexao, $query);

echo "<meta http-equiv='refresh' content='3;URL=Login.php'>";
*/
?> 
</body>
</html>
