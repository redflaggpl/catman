<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CATMAN - FUSM</title>
</head>
<BODY>
<?php
define('APP_PATH', dirname(__FILE__) );

define( 'DS', '/' );

include ('includes/elfic.ini.php');

function getCatedraId($catedra)
{
	$db = new DB();
	$sql = "SELECT id FROM catedra WHERE nombre = '$catedra'";
	return $db->queryUniqueValue($sql);
}

function getTutorId($tutor)
{
	$t = array();
	$t = explode(' ', $tutor);
	$apellido = $t[0];
	$nombre = isset($t[1]) ? $t[1] : 0;
	
	$db = new DB();
	$sql = "SELECT id FROM usuarios "
	     . "WHERE nombres LIKE '%$nombre%' AND apellidos LIKE '%$apellido%'";
	return $db->queryUniqueValue($sql);
}

function getDia($fecha)
{
	if($fecha == "") return "";//Mar. 6:30 - 10:00 pm
	$t = explode(' ', $fecha);
	$dia = $t[0];
	
	switch($dia)
	{
		case 'Lun.': return 1;
		break;
		case 'Mar.': return 2;
		break;
		case 'Mie.': return 3;
		break;
		case 'Jue.': return 4;
		break;
		case 'Vie.': return 5;
		break;
		case 'Sab.': return 6;
		break;
		case 'Dom.': return 7;
		
	}
}

function sumaTiempo($horas)
{
	$t = explode(":", $horas);
	return $t[0] + 12 .":".$t[1];
}

function getHora($fecha)
{
	//Mar. 6:30 - 10:00 pm
	if($fecha == "") return "";
	$h = explode(' ', $fecha);
	$hm = $h[1];
	
	if(isset($h[4]) && $h[4] == "pm")
	{
		return sumaTiempo($hm); 
	}
	else
	{
		return $hm;
	}
}

$row = 1; 
$f = fopen ("cursos.csv","r"); 
$i = 1;
$j = 1;
while ($data = fgetcsv ($f, 1000, ";")) 
{ 
	$cid =  getCatedraId(isset($data[0]) ? $data[0]: 0);
	$tid = getTutorId(isset($data[2]) ? $data[2] : 0);
	
	if($cid > 0 && $tid > 0)
	{
		$p['catedra_id'] = $cid;
		$p['grupo'] = isset($data[1]) ? $data[1] : "" ;
		$p['tutor_id'] = $tid;
		$p['periodo_id'] = 2;
		$p['dia'] = getDia(isset($data[3]) ? $data[3] : "");
		$p['hora'] = getHora(isset($data[3]) ? $data[3] : "");
		$p['estado'] = 1;
		
		$db = new DB();
		if(!$db->perform('cursos', $p))
		{
			//echo "Error creando curso " .$data[0];
			//echo "\n<br>";
		}
		else
		{
			//echo "Se creó el curso " . $data[0];
			//echo "\n<br>";

			$i++;
		}
		
	}
	else
	{
		echo "$j - <span style='color: red;'>";
		if(!$cid)
		{
			echo "No se recupero id de catedra $data[0]";
			echo "\n<br>";
		}
		if(!$tid)
		{
			echo "No se recupero tutor $data[2]";
			echo "\n<br>";
		}
		echo "</span>";
		$j++;
	}
}
fclose ($f);
echo "TOTAL IMPORTADOS: $i";
?>
</BODY>
</html>

