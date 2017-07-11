<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

<?php 
$soapclient = new SoapClient('http://clima.inifap.gob.mx/data/webservice.asmx?WSDL');

//variables
//echo $_POST ["select_estaciones"];
	$edo=10;
	$numero = $_POST ["select_estaciones"];
//echo $estacion;




?>

<?php 
	//Create the client object
	

	//Use the functions of the client, the params of the function are in 
	//the associative array
	
	
	
	// variables que usamos de entrada para solicitar informacion
	
	//juntamos todos los paramentros en esa variable para posteriormente mandarlos a llamar
	$params = array('numero' => $numero,'estacion' => $numero, 'edo' => $edo);
//	$params = array('edo' => '10');				// id del estado del cual queremos obtener las estaciones


?>
	

<?php	
	 //// estacuiones datos
	$responseEstacionDatos = $soapclient->EstacionDatos($params);
	$responseEstacionDatosString = $responseEstacionDatos->EstacionDatosResult;
	
	// Parse information
	$xml_datos = $responseEstacionDatos->EstacionDatosResult;
    $doc_datos = new DOMDocument();
    $doc_datos->loadXML($xml_datos);
	
	 $arrayEstacionDatosFecha = [];
	 $arrayEstacionDatosPrec = [];
	 $arrayEstacionDatosTemp = [];
	 $arrayEstacionDatosDir = [];
	 $arrayEstacionDatosVel = [];
	 $arrayEstacionDatosRad = [];
	 $arrayEstacionDatosHumr = [];
	 $arrayEstacionDatosHumh = [];
?>


---------------- Datos  de la estacion ------------------
  
 <table>
 
 <tr>
<td>Fecha y hora:</td>
<td>
<?php
//precipitacion	
	for ($i=0; $i < 1; $i++) { 
		$arrayEstacionDatosFecha[] = $doc_datos->getElementsByTagName('fecha')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo " " . $arrayEstacionDatosFecha[$j] . "<br>";
	}
?>
</td>
</tr>
 
<tr>
<td>precipitacion:</td>
<td>
<?php
//precipitacion	
	for ($i=0; $i < 1; $i++) { 
		$arrayEstacionDatosPrec[] = $doc_datos->getElementsByTagName('prec')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo  $arrayEstacionDatosPrec[$j] . "<br>";
	}
?>
</td>
</tr>

<tr>
<td>temperatura:</td>
<td>
<?php
//temperatura	 
	for ($i=0; $i < 1; $i++) { 
	   	$arrayEstacionDatosTemp[] = $doc_datos->getElementsByTagName('temt')->item($i)->nodeValue;	
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo $arrayEstacionDatosTemp[$j] . " <br>";	
	}
?>
</td>
</tr>

<tr>
<td>direccion del viento:</td>
<td>
<?php
	//direccion del viento	 
	for ($i=0; $i < 1; $i++) { 
	   	$arrayEstacionDatosDir[] = $doc_datos->getElementsByTagName('dirv')->item($i)->nodeValue;	
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo $arrayEstacionDatosDir[$j] . "<br>";	
	}
?>
</td>
</tr>

<tr>
<td>Velocidad del viento:	</td>
<td>
<?php
//VELOCIDAD DEL VIENTO	
	for ($i=0; $i < 1; $i++) { 

		$arrayEstacionDatosVel[] = $doc_datos->getElementsByTagName('velv')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo  $arrayEstacionDatosVel[$j] . "<br>";
	}
?>
</td>
</tr>

<tr>
<td>Radiacion:</td>
<td>
<?php
//radiacion
	for ($i=0; $i < 1; $i++) { 
		
		$arrayEstacionDatosRad[] = $doc_datos->getElementsByTagName('radg')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo  $arrayEstacionDatosRad[$j] . "<br>";
		}
?>
</td>
</tr>

<tr>
<td>Humedad r:</td>
<td>
<?php
//humedad r		
	for ($i=0; $i < 1; $i++) { 
		$arrayEstacionDatosHumr[] = $doc_datos->getElementsByTagName('humr')->item($i)->nodeValue;	
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo  $arrayEstacionDatosHumr[$j] . "<br>";
	}
?>
</td>
</tr>

<tr>
<td>Humedad H:</td>
<td>
<?php
	
//Humedad h
	for ($i=0; $i < 1; $i++) { 

		$arrayEstacionDatosHumh[] = $doc_datos->getElementsByTagName('humh')->item($i)->nodeValue;	

		}
	
	for ($j=0; $j < 1; $j++) { 
		echo  $arrayEstacionDatosHumh[$j] . "<br>";
		
	}
?>
</td>
</tr>  

</table>
 
------------------datos estadisticos----------------
 
 
 <?php	
	$arrayGetEstadisticosFecha  = [];
	$arrayGetEstadisticosprecAcumulada  = [];
	$arrayGetEstadisticosTempMax  = [];
	$arrayGetEstadisticosTempMin  = [];
    $arrayGetEstadisticosTempMed  = [];
	$arrayGetEstadisticosHumR  = [];
	$arrayGetEstadisticosDirV  = [];
$arrayGetEstadisticosVelV  = [];
$arrayGetEstadisticosDirVText  = [];


	 



	 //// estacuiones datos
	$responseGetEstadisticos  = $soapclient->GetEstadisticos ($params);
	$responseGetEstadisticosString = $responseGetEstadisticos ->GetEstadisticosResult;
	
	// Parse information
	$xml_estadisticos = $responseGetEstadisticos->GetEstadisticosResult;
    $doc_estadisticos = new DOMDocument();
    $doc_estadisticos->loadXML($xml_estadisticos);

?>	
	
	<table>
 
 <tr>
<td>Fecha y hora:</td>
<td>
<?php
//fecha	
	for ($i=0; $i < 1; $i++) { 
		$arrayGetEstadisticosFecha[] = $doc_estadisticos->getElementsByTagName('fecha')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo "" . $arrayGetEstadisticosFecha[$j] . "<br>";
	}


?>
</td>
</tr>

<td>precipitacion:</td>
<td>
<?php
//precipitacion	
for ($i=0; $i < 1; $i++) { 
		$arrayEstacionDatosPrec[] = $doc_estadisticos->getElementsByTagName('prec')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo $arrayEstacionDatosPrec[$j] . "<br>";
	}
?>
</td>
</tr>

<td>temperatura maxima:</td>
<td>
<?php
//: temperatura maxima
	for ($i=0; $i < 1; $i++) { 
		$arrayGetEstadisticosTempMax[] = $doc_estadisticos->getElementsByTagName('tmax')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo  $arrayGetEstadisticosTempMax[$j] . "° centigrados" . "<br>";
	}
?>
</td>
</tr>


<td>Temperatura minina:</td>
<td>
<?php

//: temperatura mínima
	for ($i=0; $i < 1; $i++) { 
		$arrayGetEstadisticosTempMin[] = $doc_estadisticos->getElementsByTagName('tmin')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo $arrayGetEstadisticosTempMin[$j] . "° centigrados" . "<br>";
	}

?>
</td>
</tr>


<td>temperatura media:</td>
<td>
<?php
//temperatura media
	for ($i=0; $i < 1; $i++) { 
		$arrayGetEstadisticosTempMed[] = $doc_estadisticos->getElementsByTagName('tmed')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo  $arrayGetEstadisticosTempMed[$j] . "° centigrados" . "<br>";
	}
?>
</td>
</tr>


<td>humedad relativa:</td>
<td>
<?php
//humedad relativa
	for ($i=0; $i < 1; $i++) { 
		$arrayGetEstadisticosHumR[] = $doc_estadisticos->getElementsByTagName('humr')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo  $arrayGetEstadisticosHumR[$j] . "<br>";
	}
?>
</td>
</tr>


<td>velocidad del viento:</td>
<td>
<?php


//: velocidad del viento
	for ($i=0; $i < 1; $i++) { 
		$arrayGetEstadisticosVelV[] = $doc_estadisticos->getElementsByTagName('velv')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo  $arrayGetEstadisticosVelV[$j] . " km/h" ."<br>";
	}
?>
</td>
</tr>

<td>dirección del viento:</td>
<td>
<?php


//: dirección del viento
	for ($i=0; $i < 1; $i++) { 
		$arrayGetEstadisticosDirV[] = $doc_estadisticos->getElementsByTagName('dirv')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo  $arrayGetEstadisticosDirV[$j] ;
	}
?>
</td>
</tr>

<td>con direccion hacia el: </td>
<td>
<?php



//dirección del viento en formato texto
	for ($i=0; $i < 1; $i++) { 
		$arrayGetEstadisticosDirVText[] = $doc_estadisticos->getElementsByTagName('dirvTexto')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo $arrayGetEstadisticosDirVText[$j] . "<br>";
	}

?>
</td>
</tr>

<td>precipitacion acumulada:</td>
<td>
<?php

//precipitacion	acumulada|
	for ($i=0; $i < 1; $i++) { 
		$arrayGetEstadisticosprecAcumulada[] = $doc_estadisticos->getElementsByTagName('precAcumulada')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo $arrayGetEstadisticosprecAcumulada[$j] . "<br>";
	}
?>
</td>
</tr>
</table>

  </body>
</html>