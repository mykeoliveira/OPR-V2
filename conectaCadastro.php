<?php

include ("conecta.php");

$nome= $_POST ["nome"];	
$login= $_POST ["login"];	
$senha= $_POST["senha"];

//conectando com o localhost - mysqli
$conexao = mysqli_connect("localhost","myke1","","REA") or die ('Não foi possível conectar');
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