

<?php

session_start("admin");

if(($_SESSION["usuario"]==null)||($_SESSION["senha"] ==null))
{
  header("location: http://carllussilva.com.br/01-amf/01-amf/sistema_de_matriculas/admin/");
}

include_once("conexao.php");

$resultado=$bd->query("SELECT * FROM aluno ORDER BY publica ASC, nota DESC, data_nasc ASC");

/*
while($row = mysql_fetch_assoc($resultado))
{
  echo "<b>NOME:</b> ".$row["nome"]."<br>";
  echo "<b>NOTA:</b> ". $row["nota"]."<br>";
  echo "<b>NASCIMENTO:</b> ". $row["data_nasc"]."<br>";
  echo "<b>CURSO1: </b>". $row["curso1"]."<br>";
  echo "<b>CURSO2: </b>". $row["curso2"]."<br>";
 echo "<b>MATRICULADO: </b>". $row["matriculado"]."<br><br>";
}
*/

$agrov=45;
$cont_agro=0;
$cont_porcent_agro=1;

$desv=45;
$cont_des=0;
$cont_porcent_des=1;

$admv=45;
$cont_adm=0;
$cont_porcent_admin=1;

$edfv=45;
$cont_edf=0;
$cont_porcent_edf=1;

$vporcento=mysql_num_rows($resultado)*0.2;
//echo "<h1>".$vporcento."</h1>";
$cont_vporcento=0;

$matriculado=0;

while($row = mysql_fetch_assoc($resultado))
{
	$matriculado=0;
  //echo "<b>NOME:</b> ".$row["nome"]."<br>";
  //echo "<b>NOTA:</b> ". $row["nota"]."<br>";
  //echo "<b>NASCIMENTO:</b> ". $row["data_nasc"]."<br>";
  //echo "<b>CURSO1: </b>". $row["curso1"]."<br>";
  //echo "<b>CURSO2: </b>". $row["curso2"]."<br>";

  if(($row["curso1"]=="agro")&&($cont_agro<$agrov))
  {
    if(($row["publica"]==0)&&($cont_porcent_agro<=9))
    {
       $cont_porcent_agro++;
       //echo "<b>MATRICULADO: </b>"."AGRO"."<br><br>";
       mysql_query("UPDATE `aluno` SET `matriculado` = 'Agropecuaria' WHERE `aluno`.`id` = ".$row["id"].";");
       $cont_agro++;
	   
	   $matriculado=1;
    }
    else if($row["publica"]==1)
    {
       //echo "<b>MATRICULADO: </b>"."AGRO"."<br><br>";
       mysql_query("UPDATE `aluno` SET `matriculado` = 'Agropecuaria' WHERE `aluno`.`id` = ".$row["id"].";");
       $cont_agro++;
	   
	   $matriculado=1;
    }
    else
    {
      $matriculado=0;
    }
  }
  else if(($row["curso1"]=="des")&&($cont_des<$desv))
  {
    if(($row["publica"]==0)&&($cont_porcent_des<=9))
    {
       $cont_porcent_des++;
       //echo "<b>MATRICULADO: </b>"."DES"."<br><br>";
       mysql_query("UPDATE `aluno` SET `matriculado` = 'Design de Interiores' WHERE `aluno`.`id` = ".$row["id"].";");
       $cont_des++;
	   
	   $matriculado=1;
    }
    else if($row["publica"]==1)
    {
       //echo "<b>MATRICULADO: </b>"."DES"."<br><br>";
       mysql_query("UPDATE `aluno` SET `matriculado` = 'Design de Interiores' WHERE `aluno`.`id` = ".$row["id"].";");
       $cont_des++;
	   
	   $matriculado=1;
    }
    else
    {
      $matriculado=0;
    }

  }
  else if(($row["curso1"]=="adm")&&($cont_adm<$admv))
  {
    if(($row["publica"]==0)&&($cont_porcent_admin<9))
    {
       $cont_porcent_admin++;
       //echo "<b>MATRICULADO: </b>"."ADM"."<br><br>";
       mysql_query("UPDATE `aluno` SET `matriculado` = 'Administra????o de Empresas' WHERE `aluno`.`id` = ".$row["id"].";");
       $cont_adm++;
	   
	   $matriculado=1;
    }
    else if($row["publica"]==1)
    {
       //echo "<b>MATRICULADO: </b>"."ADM"."<br><br>";
       mysql_query("UPDATE `aluno` SET `matriculado` = 'Administra????o de Empresas' WHERE `aluno`.`id` = ".$row["id"].";");
       $cont_adm++;
	   
	   $matriculado=1;
    }
    else
    {
      $matriculado=0;
    }
  }
  else if(($row["curso1"]=="edf")&&($cont_edf<$edfv))
  {
    if(($row["publica"]==0)&&($cont_porcent_edf<=9))
    {
       $cont_porcent_edf++;
       //echo "<b>MATRICULADO: </b>"."EDF"."<br><br>";
       mysql_query("UPDATE `aluno` SET `matriculado` = 'Edifica????es' WHERE `aluno`.`id` = ".$row["id"].";");
       $cont_edf++;
	   
	   $matriculado=1;
     }
    else if($row["publica"]==1)
    {
       //echo "<b>MATRICULADO: </b>"."EDF"."<br><br>";
       mysql_query("UPDATE `aluno` SET `matriculado` = 'Edifica????es' WHERE `aluno`.`id` = ".$row["id"].";");
       $cont_edf++;
	   
	   $matriculado=1;
    }
    else
    {
      $matriculado=0;
    }
  }

  if($matriculado==0)
  {
    if(($row["curso2"]=="agro")&&($cont_agro<$agrov))
    {
      if(($row["publica"]==0)&&($cont_porcent_agro<=9))
      {
         $cont_porcent_agro++;
         //echo "<b>MATRICULADO: </b>"."AGRO"."<br><br>";
         mysql_query("UPDATE `aluno` SET `matriculado` = 'Agropecuaria' WHERE `aluno`.`id` = ".$row["id"].";");
         $cont_agro++;
       }
       else if($row["publica"]==1)
       {
         //echo "<b>MATRICULADO: </b>"."AGRO"."<br><br>";
         mysql_query("UPDATE `aluno` SET `matriculado` = 'Agropecuaria' WHERE `aluno`.`id` = ".$row["id"].";");
         $cont_agro++;
       }
       else
       {
         mysql_query("UPDATE `aluno` SET `matriculado` = 'CLASSIFICAVEL' WHERE `aluno`.`id` = ".$row["id"].";");
       }
    
    }
    else if(($row["curso2"]=="des")&&($cont_des<$desv))
    {
      if(($row["publica"]==0)&&($cont_porcent_des<=9))
      {
         $cont_porcent_des++;
         //echo "<b>MATRICULADO: </b>"."DES"."<br><br>";
         mysql_query("UPDATE `aluno` SET `matriculado` = 'Design de Interiores' WHERE `aluno`.`id` = ".$row["id"].";");
         $cont_des++;
       }
       else if($row["publica"]==1)
       {
         //echo "<b>MATRICULADO: </b>"."DES"."<br><br>";
         mysql_query("UPDATE `aluno` SET `matriculado` = 'Design de Interiores' WHERE `aluno`.`id` = ".$row["id"].";");
         $cont_des++;
       }
       else
       {
         mysql_query("UPDATE `aluno` SET `matriculado` = 'CLASSIFICAVEL' WHERE `aluno`.`id` = ".$row["id"].";");
       }
    }
    else if(($row["curso2"]=="adm")&&($cont_adm<$admv))
    {
      if(($row["publica"]==0)&&($cont_porcent_adm<9))
      {
         $cont_porcent_adm++;
         //echo "<b>MATRICULADO: </b>"."ADM"."<br><br>";
         mysql_query("UPDATE `aluno` SET `matriculado` = 'Administra????o de Empresas' WHERE `aluno`.`id` = ".$row["id"].";");
         $cont_adm++;
      }
       else if($row["publica"]==1)
       {
         //echo "<b>MATRICULADO: </b>"."ADM"."<br><br>";
         mysql_query("UPDATE `aluno` SET `matriculado` = 'Administra????o de Empresas' WHERE `aluno`.`id` = ".$row["id"].";");
         $cont_adm++;
       }
       else
       {
         mysql_query("UPDATE `aluno` SET `matriculado` = 'CLASSIFICAVEL' WHERE `aluno`.`id` = ".$row["id"].";");
       }

    }
    else if(($row["curso2"]=="edf")&&($cont_edf<$edfv))
    {
      if(($row["publica"]==0)&&($cont_porcent_edf<=9))
      {
         $cont_porcent_edf++;
         //echo "<b>MATRICULADO: </b>"."EDF"."<br><br>";
         mysql_query("UPDATE `aluno` SET `matriculado` = 'Edifica????es' WHERE `aluno`.`id` = ".$row["id"].";");
         $cont_edf++;
       }
       else if($row["publica"]==1)
       {
         //echo "<b>MATRICULADO: </b>"."EDF"."<br><br>";
         mysql_query("UPDATE `aluno` SET `matriculado` = 'Edifica????es' WHERE `aluno`.`id` = ".$row["id"].";");
         $cont_edf++;
       }
       else
       {
         mysql_query("UPDATE `aluno` SET `matriculado` = 'CLASSIFICAVEL' WHERE `aluno`.`id` = ".$row["id"].";");
       }
    }
    else
    {
       //echo "<b>MATRICULADO: </b>"."AGRO"."<br><br>";
       mysql_query("UPDATE `aluno` SET `matriculado` = 'CLASSIFICAVEL' WHERE `aluno`.`id` = ".$row["id"].";");
    }

  }
}

$anterior="";

$resultado=mysql_query("SELECT * FROM aluno ORDER BY matriculado ASC, nota DESC, data_nasc ASC");

$quantos_adm=0;
$quantos_agro=0;
$quantos_des=0;
$quantos_edf=0;
while($row=mysql_fetch_assoc($resultado))
{
	if($row["matriculado"]=="Administra????o de Empresas")
        {
		$quantos_adm++;
        }
	if($row["matriculado"]=="Agropecuaria")
        {
		$quantos_agro++;
        }
	if($row["matriculado"]=="Design de Interiores")
        {
		$quantos_des++;
        }
	if($row["matriculado"]=="Edifica????es")
        {
		$quantos_edf++;
        }
}

echo "<h3><a href='#adm'>administra????o com $quantos_adm/45</a>";
echo "<br><br>";
echo "<a href='#agro'>Agropecu??ria com $quantos_agro/45</a>";
echo "<br><br>";
echo "<a href='#des'>Design de Interiores com $quantos_des/45</a>";
echo "<br><br>";
echo "<a href='#edf'>Edifica????es com $quantos_edf/45</a></h3>";

$resultado=mysql_query("SELECT * FROM aluno ORDER BY matriculado ASC, nota DESC, data_nasc ASC");

$classificacao=0;

while($row = mysql_fetch_assoc($resultado))
{

if($row["publica"]==1){ $row["publica"]="sim"; }
else{ $row["publica"]="n??o"; }


 if($row["matriculado"]!="CLASSIFICAVEL")
 {
  if($anterior!=$row["matriculado"])
  {
    
    $anterior=$row["matriculado"];

    if($row["matriculado"]=="Administra????o de Empresas")
    {
      $classificacao=0;

?>
<center>
<img src="http://2.bp.blogspot.com/-cOLWeGs65Xs/ToBco7mAdvI/AAAAAAAAAP0/APkY1RVkxuw/s1600/logo+eeep.png" width="200" height="100">
</center>
<?php

      echo "<center><h1 id='adm' style='background-color:blue; color:white;'>".$cont_adm. "/". $admv. " CLASSIFICADOS EM ADMINISTRA????O DE EMPRESAS<br></h1></center>";
      $mat="adm";
    }
/*
    else if(($row["matriculado"]=="CLASSIFICAVEL")&&(($row["curso1"]=="adm")||($row["curso2"]=="adm")))
    {
      echo "<center><h1 style='background-color:blue; color:white;'>".$cont_adm. "/". $admv. "CASSIFICAVEL EM ADMINISTRA????O DE EMPRESAS<br></h1></center>";
    }
*/

    else if($row["matriculado"]=="Agropecuaria")
    {
      $classificacao=0;
?>
<center>
<img src="http://2.bp.blogspot.com/-cOLWeGs65Xs/ToBco7mAdvI/AAAAAAAAAP0/APkY1RVkxuw/s1600/logo+eeep.png" width="200" height="100">
</center>
<?php

      echo "<center><h1 id='agro' style='background-color:green; color:white;'>".$cont_agro. "/". $agrov. " CLASSIFICADOS EM AGROPECU??RIA<br></h1></center>";
      $mat="agro";
    }

/*
    else if(($row["matriculado"]=="CLASSIFICAVEL")&&(($row["curso1"]=="agro")||($row["curso2"]=="agro")))
    {
      echo "<center><h1 style='background-color:green; color:white;'>".$cont_agro. "/". $agrov. "CLASSIFICAVEL EM AGROPECU??RIA<br></h1></center>";
    }
*/

    else if($row["matriculado"]=="Design de Interiores")
    {
      $classificacao=0;
?>
<center>
<img src="http://2.bp.blogspot.com/-cOLWeGs65Xs/ToBco7mAdvI/AAAAAAAAAP0/APkY1RVkxuw/s1600/logo+eeep.png" width="200" height="100">
</center>
<?php

      echo "<center><h1 id='des' style='background-color:pink; color:white;'>".$cont_des. "/". $desv. " CLASSIFICADOS EM DESIGN DE INTERIORES<br></h1></center>";
      $mat="des";
    }
/*
    else if(($row["matriculado"]=="CLASSIFICAVEL")&&(($row["curso1"]=="des")||($row["curso2"]=="des")))
    {
      echo "<center><h1 style='background-color:pink; color:white;'>".$cont_des. "/". $desv. "CLASSIFICAVEL EM DESIGN DE INTERIORES<br></h1></center>";
    }
*/


    else if($row["matriculado"]=="Edifica????es")
    {
      $classificacao=0;
?>
<center>
<img src="http://2.bp.blogspot.com/-cOLWeGs65Xs/ToBco7mAdvI/AAAAAAAAAP0/APkY1RVkxuw/s1600/logo+eeep.png" width="200" height="100">
</center>
<?php
      echo "<center><h1 id='edf' style='background-color:black; color:white;'>".$cont_edf. "/". $edfv. " CLASSIFICADOS EM EDIFICA????ES<br></h1></center>";
      $mat="edf";
    }
/*
    else if(($row["matriculado"]=="CLASSIFICAVEL")&&(($row["curso1"]=="edf")||($row["curso2"]=="edf")))
    {
      echo "<center><h1 style='background-color:black; color:white;'>".$cont_edf. "/". $edfv. "CLASSIFICAVEL EM EDIFICA????ES<br></h1></center>";
    }
*/

    else
    {
      //echo "<center><h1 style='background-color:red; color:white;'>N??O MATRICULADOS<br></h1></center>";
    }
  }
  
  $classificacao++;
  echo "<b>".$classificacao." - </b> ".$row["nome"]." - ";
  echo "<b>NOTA:</b> ". $row["nota"]."<br>";
	$data = new DateTime($row["data_nasc"]);
  //echo "<b>NASCIMENTO:</b> ". $data->format('d-m-Y') ."<br>";
  //echo "<b>Publica?</b> ". $row["publica"]."<br>";
  //echo "<b>CURSO1: </b>". $row["curso1"]."<br>";
  //echo "<b>CURSO2: </b>". $row["curso2"]."<br><br>";

/*
if($row["curso1"]==$mat)
{  echo "<b style='color:white; background-color:green;'>CURSO1: </b>". $row["curso1"]."<br>";}
else 
{  echo "<b>CURSO1: </b>". $row["curso1"]."<br>"; }

if($row["curso2"]==$mat)
{  echo "<b style='color:white; background-color:blue;'>CURSO2: </b>". $row["curso2"]."<br>";}
else 
{  echo "<b>CURSO2: </b>". $row["curso2"]."<br>"; }

  echo "<b>PUBLICA?:</b>". $row["publica"]."<br>";
 echo "<b>MATRICULADO: </b>". $row["matriculado"]."<br><br>";
*/
 }
}


$resultado=mysql_query("SELECT * FROM aluno ORDER BY matriculado ASC, nota DESC, data_nasc ASC");

?>
<center>
<img src="http://2.bp.blogspot.com/-cOLWeGs65Xs/ToBco7mAdvI/AAAAAAAAAP0/APkY1RVkxuw/s1600/logo+eeep.png" width="200" height="100">
</center>
<?php

echo "<center><h1 style='background-color:yellow; color:white;'>LISTA DE CLASSIFICAVEIS<br></h1></center>";

$contador_clas=0;
while($row = mysql_fetch_assoc($resultado))
{

if($row["publica"]==1){ $row["publica"]="sim"; }
else{ $row["publica"]="n??o"; }

 if($row["matriculado"]=="CLASSIFICAVEL")
 {
	$contador_clas++;

  //echo "<b>CLASSIFICAVEL EM: ".$row["curso1"]." ou ".$row["curso2"]."<br>";
  //echo "<b>NOME:</b> ".$row["nome"]."<br>";
    echo $contador_clas." - ".$row["nome"]." - ";
  echo "<b>NOTA:</b> ". $row["nota"]."<br>";
  $data = new DateTime($row["data_nasc"]);
  //echo "<b>NASCIMENTO:</b> ". $data->format('d-m-Y') ."<br>";
  //echo "<b>Publica?</b> ". $row["publica"]."<br>";
  //echo "<b>CURSO1: </b>". $row["curso1"]."<br>";
  //echo "<b>CURSO2: </b>". $row["curso2"]."<br><br>";
 }
}

?>
