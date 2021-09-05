<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CADASTRO</title>
<link rel="stylesheet" type="text/css" href="css/geral.css"/>

		<!-- Google -->
		<meta name="description" content="Painel de Gestão de Matrícula e Automatizador de Seleção de Alunos da EEEP Antonio Mota Filho" />
        <meta name="keywords" content="AMF, EEEP, Antonio Mota Filho, Matrícula/>
        <meta name="robots" content="index, follow">
        <link rel="Shortcut Icon" type="image/x-icon" href="img/favicon.ico">    
    
    
        <!-- Facebook -->
        <meta property="og:url" content="http://motafilho.com.br/">
        <meta property="og:title" content="Painel de Gestão de Matrícula e Automatizador de Seleção de Alunos da EEEP Antonio Mota Filho">
        <meta property="og:site_name" content="ForróZapp">
        <meta property="og:description" content="Painel de Gestão de Matrícula e Automatizador de Seleção de Alunos da EEEP Antonio Mota Filho">
        <meta property="og:image" content="http://motafilho.com.br/admin/images/logo300x300.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">

<?php
session_start();
if(($_SESSION["usuario"]==null)||($_SESSION["senha"] ==null))
{
  header("location: index.php");
}
?>


</head>

<body id="consideracoesiniciais">

<div id="layout">

	<div id="topo">	
		
		<div id="barra">
			<div id="esquerda"></div>
				<div id="data"><?php echo "Tamboril-CE BRASIL".date("d-m-Y"); ?></div>
					<div id = "brasao_governo"></div>
		</div>
</div>
  <div id = "central" >
    <div id="area2" style="height:400px;">
      <div id = "area" style="height:400px;">
        <div class="interno">
          <h3><b>**CADASTRO DE NOVO ALUNO**</b></h3>
          <form action="insere_aluno.php" method="post"><BR>
            <label>NOME DO ALUNO:</label><BR>
            <input name="nome" style="margin:5px;" type="text" size=35/>
            <br/>
            <label class="senha">DATA DE NASCIMENTO:</label><BR>
            <input name="data_nasc" style="margin:5px;" type="date" size=35/>
			<br/>
            <label class="senha">NOTA MEDIA:</label><BR>
            <input name="media" style="margin:5px;" type="text" size=35/>
            <br/>
			<label>OPCAO 1:</label><BR>
            <SELECT name="op1" style="margin:5px;">
				<option value="adm">ADMINISTRACAO</option>
				<option value="agro">AGROPECUARIA</option>
				<option value="des">DESIGN DE INTERIORES</option>
				<option value="edf">EDIFICACOES</option>
			</SELECT>
			<br/>
			<label>OPCAO 2:</label><BR>
            <SELECT name="op2" style="margin:5px;">
				<option value="adm">ADMINISTRACAO</option>
				<option value="agro">AGROPECUARIA</option>
				<option value="des">DESIGN DE INTERIORES</option>
				<option value="edf">EDIFICACOES</option>
			</SELECT>
			<br/>
			<label>VINDO DE ESCOLA PUBLICA?:</label><BR>
				<input type="checkbox" name="publica" style="margin:5px;">SIM
			<br/>
			<label>RESIDENTE NO  BAIRRO DA ESCOLA?:</label><BR>
				<input type="checkbox" name="bairro" style="margin:5px;">SIM
            <br/>
            <input name="button" type="submit" style="width:250px; float:center;margin:10px;" class= "botao" value="Ok"/>
          </form>
        </div>
      </div>
    </div>
  </div>
	<div id="rodape">
      &copy; 2016-2018 - Governo do Estado do Ceará - Todos os direitos reservados.
	</div>

</div>
</div>
</body>
</html>
