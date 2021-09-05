<?php

session_start();

if(($_SESSION["usuario"]==null)||($_SESSION["senha"] ==null))
{
  header("location: index.php");
}
else
{
	$nome=utf8_decode($_POST["nome"]);
	$data_nasc=$_POST["data_nasc"];
	$media=$_POST["media"];
        $media=str_replace(",",".",$media);
	$op1=$_POST["op1"];
	$op2=$_POST["op2"];
	
	if(isset($_POST["publica"]))
	{
	$publica=1;
	}
	else{
	$publica=0;
	}
	
	if(isset($_POST["bairro"]))
	{
	$bairro=1;
	}
	else{
	$bairro=0;
	}

	include_once("../conexao.php");

	$result=$bd->query("INSERT INTO `aluno` (`nome`, `nota`, `data_nasc`, `curso1`, `curso2`, `matriculado`, `publica`, `bairro`, `id`) 
	                               VALUES ('$nome', '$media', '$data_nasc', '$op1', '$op2', '', '$publica', '$bairro', NULL);");
								   

	if($result)
	{
		echo "<H1>CADASTRADO COM SUCESSO<BR>REDIRECIONANDO...</H1>";
		echo "<meta http-equiv='refresh' content='1;url=http://carllussilva.com.br/01-amf/01-amf/sistema_de_matriculas/admin/painel.php' />";
	}


}

?>
