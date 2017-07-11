<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

<?php 
	//Create the client object
	$soapclient = new SoapClient('http://clima.inifap.gob.mx/data/webservice.asmx?WSDL');

	//Use the functions of the client, the params of the function are in 
	//the associative array
	
	
	
	// variables que usamos de entrada para solicitar informacion
	$edo=10;
	$numero=33;
	$estacion=33;

	
	//juntamos todos los paramentros en esa variable para posteriormente mandarlos a llamar
	$params = array('numero' => $numero,'estacion' => $estacion, 'edo' => $edo);
//	$params = array('edo' => '10');				// id del estado del cual queremos obtener las estaciones
	
	//establecemos las conexiones y mandamos los parametros
	$responseGetEstaciones = $soapclient->GetEstaciones($params);
	$responseGetEstacionesString = $responseGetEstaciones->GetEstacionesResult; // convertir de objeto a string
	
	
	

	// Parse information
	$xml = $responseGetEstaciones->GetEstacionesResult;
    $doc = new DOMDocument();
    $doc->loadXML($xml);
    
	
// VARIABLES que nos va arrojar 
	$arrayEstacionesNombre = [];
	$arrayEstacionesNumero = [];


	
    for ($i=0; $i < 22; $i++) { 
    	$arrayEstacionesNumero[] = $doc->getElementsByTagName('numero')->item($i)->nodeValue;
    	$arrayEstacionesNombre[] = $doc->getElementsByTagName('nombre')->item($i)->nodeValue;
    }
  //imprime todas las estaciones 
	/*for ($j=0; $j < 22; $j++) { 
		echo "Estación número: " . $arrayEstacionesNumero[$j] . " Nombre: " , $arrayEstacionesNombre[$j] . "<br>";
	}
	*/
//var_dump($responseGetEstaciones);

?>
	
	
	<form id="form1" name="form1"method="post" action="soapFunction_3-copia2.php">
	selecciones estacion-------->
	<select name="select_estaciones" >
    	<?php
	for ($j=0; $j < 22; $j++) { ?>
		<option value= <?php echo $arrayEstacionesNumero[$j]?> > <?php echo $arrayEstacionesNombre[$j]."</br>";
		}
	?> </option>
	</select>
		<input type="submit" value= "enviar datos">			
		 
<?php 
 //$nombre=  $_POST ["select_estaciones"];
 ?>


  </body>
</html>