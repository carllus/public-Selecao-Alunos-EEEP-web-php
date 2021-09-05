<?php
include_once("conexao.php");

$resultado=$bd->query("SELECT * FROM aluno ORDER BY nome ASC");

$a=1;
foreach($resultado as $aluno)
{
	echo $a."-".utf8_encode($aluno["nome"])."<br>";
	$a++;
}

?>