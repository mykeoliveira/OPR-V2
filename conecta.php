<?php
$dbname='heroku_f1ac2596f1753e7';
$usuario='bc2145f4b3765f';
$password='b3acd899';
$localhost='us-cdbr-east-05.cleardb.net';

//Passo 1 - Conecta ao servidor MySQL
if(!($id = mysqli_connect($localhost,$usuario,$password,$dbname))) {
  echo "<p align=\"center\"><big><strong>Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.
  </strong></big></p>";
  exit;
}

//Passo 2 - Seleciona o Banco de Dados
if(!($con=mysqli_select_db($id, $dbname))) {
  echo " <p align=\"center\"><big><strong>Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.
  </strong></big></p>";
  exit;
}

?>
