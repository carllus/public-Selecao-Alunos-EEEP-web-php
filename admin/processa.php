<?php
session_start();
$usuario=$_POST["usuario"];
$senha=$_POST["senha"];


if((($usuario=="USUARIO")&&($senha=="SENHA")) || (($usuario=="USUARIO")&&($senha=="USUARIO")))
{
  $_SESSION["usuario"] = $_POST["usuario"];
  $_SESSION["senha"] = $_POST["senha"];
  header("location: painel.php");
}
else
{
  echo "<h1>USUÁRIO E(OU) SENHA INCORRETO</h1>";
  echo "<meta http-equiv='refresh' content='2;url=http://".$_SERVER["HTTP_HOST"]."/sistema_de_matriculas/admin/' />";
}


?>