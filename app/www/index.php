<!DOCTYPE html>
<html>
    <head>
	
	
<title>Fusion tables</title>
<style type="text/css">
			   #map_canvas {
				 width: 650px;
				 height: 450px;
				 margin-bottom: 10px;
				 top:0%; 
				 left:0%;
			   }
		</style>

    <!--       Customize the content security policy in the meta tag below as needed. Add 'unsafe-inline' to default-src to enable inline JavaScript.
        For details, see http://go.microsoft.com/fwlink/?LinkID=617521
 
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *">
           -->
		
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <title>app</title>
		
		

		 	
        <script type="text/javascript" 
		 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmcLeXIJBjlADIfqoowBWiSIlvhKKESWs&callback=initMap">
		</script>
		
        <script type="text/javascript">
			//definir capa fusion Tables
				var capa1 = new google.maps.FusionTablesLayer({
				query: {
					  select: 'geometry',
					  from: '1QmqsXAFzy6Ngivk8YXM0ZG2OEPttTiWKPs_Lv5pH'
					},
					options:{ 
			        styleId: 2,
					templateId: 2
					}
				});
					var capa2 = new google.maps.FusionTablesLayer({
				query: {
					  select: 'geometry',
					  from: '1O2Xjgu4DaLVANS7zPMwO_fIajhvVPkuEFtZ0LUcx'
					},
					options:{ 
			        styleId: 2,
					templateId: 2
					}
				});
				
				
				var capa3 = new google.maps.FusionTablesLayer({
				query: {
					  select: 'geometry',
					  from: '1-evLAUWaXGtGY3QasNLavAsP9VIeZTMaBqw4aw-r'
					},
					options:{ 
			        styleId: 2,
					templateId: 2
					}
				});
					var capa4 = new google.maps.FusionTablesLayer({
				query: {
					  select: 'geometry',
					  from: '1vGQYZWyRr_EUvIXLd_mnmOLzhiayBIwAv7Z1N1lT'
					},
					options:{ 
			        styleId: 2,
					templateId: 2
					}
				});
						var capa5 = new google.maps.FusionTablesLayer({
				query: {
					  select: 'geometry',
					  from: '1bulqje2AuwBdIOrVHcfNjm4nWzWafCV_ZqUlbDjP'
					},
					options:{ 
			        styleId: 2,
					templateId: 2
					}
				});
				
				
				var capa6 = new google.maps.FusionTablesLayer({
				query: {
					  select: 'geometry',
					  from: '1Oi5hOeI-D7QQv0VbbPdz6xWQ_6v74tkR_JtdX-e9'
					},
					options:{ 
			        styleId: 2,
					templateId: 2
					}
				});
				

			function initialize(){
				//Latitud y Longitud del centro del mapa Google Maps
					var posicion = new google.maps.LatLng(19.292222222222, -99.653888888889); 
					//Opciones de Mapa
					var opcionesmap = {
						zoom: 8,
						center: posicion,
						panControl: true,
						zoomControl: true,
						scaleControl: true,
						mapTypeId: google.maps.MapTypeId.HYBRID
					};
					map = new google.maps.Map(document.getElementById("map_canvas"), opcionesmap); 
					//Se establece si las capas se dibujan en el mapa
					capa1.setMap(map);
					capa2.setMap(null); //Si se coloca null el mapa no se dibuja de inicio
					capa3.setMap(null); //Si se coloca null el mapa no se dibuja de inicio
					capa4.setMap(null); //Si se coloca null el mapa no se dibuja de inicio
					capa5.setMap(null); //Si se coloca null el mapa no se dibuja de inicio
					capa6.setMap(map); //Si se coloca null el mapa no se dibuja de inicio
					
					
				}
				
			function enciendecapas(seleccionTablaID){
				if (seleccionTablaID == "1QmqsXAFzy6Ngivk8YXM0ZG2OEPttTiWKPs_Lv5pH"){
						 if (document.getElementById("capa1").checked == true) {
						   if(capa1.getMap() == null) { capa1.setMap(map); }
						 }
						 if (document.getElementById("capa1").checked == false) {
							 capa1.setMap(null);  /*Apaga Capa*/
						 }
					}//FIN IF		
				if (seleccionTablaID == "1O2Xjgu4DaLVANS7zPMwO_fIajhvVPkuEFtZ0LUcx"){
						 if (document.getElementById("capa2").checked == true) {
						   if(capa2.getMap() == null) { capa2.setMap(map); }
						 }
						 if (document.getElementById("capa2").checked == false) {
							 capa2.setMap(null);  /*Apaga Capa*/
						 }
					}//FIN IF		
					if (seleccionTablaID == "1-evLAUWaXGtGY3QasNLavAsP9VIeZTMaBqw4aw-r"){
						 if (document.getElementById("capa3").checked == true) {
						   if(capa3.getMap() == null) { capa3.setMap(map); }
						 }
						 if (document.getElementById("capa3").checked == false) {
							 capa3.setMap(null);  /*Apaga Capa*/
						 }
					}//FIN IF		
					if (seleccionTablaID == "1vGQYZWyRr_EUvIXLd_mnmOLzhiayBIwAv7Z1N1lT"){
						 if (document.getElementById("capa4").checked == true) {
						   if(capa4.getMap() == null) { capa4.setMap(map); }
						 }
						 if (document.getElementById("capa4").checked == false) {
							 capa4.setMap(null);  /*Apaga Capa*/
						 }
					}//FIN IF		
					if (seleccionTablaID == "1bulqje2AuwBdIOrVHcfNjm4nWzWafCV_ZqUlbDjP"){
						 if (document.getElementById("capa5").checked == true) {
						   if(capa5.getMap() == null) { capa5.setMap(map); }
						 }
						 if (document.getElementById("capa5").checked == false) {
							 capa5.setMap(null);  /*Apaga Capa*/
						 }
					}//FIN IF		
					
					if (seleccionTablaID == "1Oi5hOeI-D7QQv0VbbPdz6xWQ_6v74tkR_JtdX-e9"){
						 if (document.getElementById("capa6").checked == true) {
						   if(capa6.getMap() == null) { capa6.setMap(map); }
						 }
						 if (document.getElementById("capa6").checked == false) {
							 capa6.setMap(null);  /*Apaga Capa*/
						 }
					}//FIN IF		
					}
		</script>
		
		
			

		
    </head>
   <body onLoad="initialize()">
	
	
	<div data-role="page" id= "inicio">
		<div data-role="header" >
		<h1>Aplicacion Mobil INIFAP Estado de México</h1>
					
					</div>
	
					</div>
	
	<!-- logo inifap -->
			<div class="logo">
					<article class="item">
							<a href="#" class="image fit"><img src="images/inifap.png" alt="" /></a>
						
							<!--o puede llevarnos al lin la imagen a inicio con este codigo
							<a href="index.html" class="image fit"><img src="imagenes/inifap.jpg" alt="" /></a>
							-->
					</article>
			</div>
  

   
        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="scripts/platformOverrides.js"></script>
        <script type="text/javascript" src="scripts/index.js"></script>
		
		
				
						<div class="inner">
				<header>
					<h1><a href="index.html" id="logo">ESTACIONES AGROCLIMATICAS</a></h1>
					<hr />				
				</header>
				
			</div>
				
				
					
				<!-- lista de links para el DEZPLAZAMIENTO  -->
			<nav id="nav">	
					<ul>
						<li><a href="#MAPA" 			id="MAPA-link"			  class="skel-layers-ignoreHref"><span class="icon fa-home">MAPA</span></a></li>
						<li><a href="#15minutos" 		id="15minutos-link" 	  class="skel-layers-ignoreHref"><span class="icon fa-th">Datos cada 15 minutos</span></a></li>
						<li><a href="#estadisticos" 	id="estadisticos-link" 	  class="skel-layers-ignoreHref"><span class="icon fa-th">Datos estadisticos</span></a></li>
						<li><a href="#Pronostico" 		id="Pronostico-link"      class="skel-layers-ignoreHref"><span class="icon fa-th">Pronostico</span></a></li>
						
					</ul>
			</nav>
		
			
						<!-- MAPA -->
					<section id="MAPA" class="one dark cover">
						<div class="container">
							<header>			
							<h1>Estaciones </h1>
							</header>

						<!--	<footer>
								<a href="#portfolio" class="button scrolly">Magna Aliquam</a>
							</footer> -->
		
						</div>														
					</section>
					
					
	<table>
          <tr>
				<td>
					<div id="map_canvas" ></div>
				</td>
				
          </tr>
     </table>
					
					
					
					<table>
          <tr>
				<td>
					<form>
					<!--Controles para apagar y encender capas-->
					<input type="checkbox" value="1Oi5hOeI-D7QQv0VbbPdz6xWQ_6v74tkR_JtdX-e9"id="capa6" 	onClick="enciendecapas(this.value);" checked="checked">Estaciones agroclimáticas<br>
                	<input type="checkbox" value="1QmqsXAFzy6Ngivk8YXM0ZG2OEPttTiWKPs_Lv5pH"id="capa1" 	onClick="enciendecapas(this.value);" checked="checked">Municipios<br>
                    <input type="checkbox" value="1O2Xjgu4DaLVANS7zPMwO_fIajhvVPkuEFtZ0LUcx"id="capa2" 	onClick="enciendecapas(this.value);" >Uso de suelo<br>
					<input type="checkbox" value="1-evLAUWaXGtGY3QasNLavAsP9VIeZTMaBqw4aw-r"id="capa3" 	onClick="enciendecapas(this.value);" >Edafologia<br>
					<input type="checkbox" value="1vGQYZWyRr_EUvIXLd_mnmOLzhiayBIwAv7Z1N1lT"id="capa4" 	onClick="enciendecapas(this.value);" >Hidrologia<br>
                 	<input type="checkbox" value="1bulqje2AuwBdIOrVHcfNjm4nWzWafCV_ZqUlbDjP"id="capa5" 	onClick="enciendecapas(this.value);" >Frontera agricola<br>
   				  
					
					</form>
				</td>
				<td>
			
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
	
	
	<form id="form1" name="form1"method="post" >
             Estacion
	<select name="select_estaciones" onchange= "seleccionaestacion("this.form")" >
    	<?php
	for ($j=0; $j < 22; $j++) { ?>
		<option value= <?php echo $arrayEstacionesNumero[$j]?> > <?php echo $arrayEstacionesNombre[$j]."</br>";
		}
	?> </option>
	</select>
		<input type="submit" value= "Consultar">			
					</form>

				</td>
          </tr>
     </table>
					
					
					
			   


			
					<!-- Datos cada 15 minutos -->
					<section id="15minutos" class="two">
						<div class="container">
							<header>
								<h1>Datos de la estacion</h1>					
	
							</header>

							<p></p>

						</div>
					</section>
					
					
					
					
						<!-- aqui empieza las tablas 					-->
				
				
			<?php 		


?>
					
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
	
     $arrayEstacionDatosNumero = [];
	 $arrayEstacionDatosFecha = [];
	 $arrayEstacionDatosPrec = [];
	 $arrayEstacionDatosTemp = [];
	 $arrayEstacionDatosDir = [];
	 $arrayEstacionDatosVel = [];
	 $arrayEstacionDatosRad = [];
	 $arrayEstacionDatosHumr = [];
	 $arrayEstacionDatosHumh = [];
?>



			

 <table>
 
  <tr>
<td>Numero de la estacion:</td>
<td>
<?php
//precipitacion	
	for ($i=0; $i < 1; $i++) { 
		$arrayEstacionDatosNumero[] = $doc_datos->getElementsByTagName('numero')->item($i)->nodeValue;
		}
	
	for ($j=0; $j < 1; $j++) { 
		echo " " . $arrayEstacionDatosNumero[$j] . "<br>";
	}
?>
</td>
</tr>
 
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
		echo $arrayEstacionDatosTemp[$j] ."° centigrados" . " <br>";	
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
		echo  $arrayEstacionDatosVel[$j] . " km/h" ."<br>";
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
 
					
					<!-- Datos estadisticos -->
					<section id="estadisticos" class="three">
						<div class="container">
							<header>
								<h1>Datos Estadisticos</h1>
								</header>
				</div>
				</section>
				
				
 
 
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
						
					
						</section>	<!-- Pronostico -->
					<section id="Pronostico" class="five">
						<div class="container">

							<header>
							<h1>Pronostico</h1>

		<table border= "1" , id= pronostico>
  			 <tr>
    		  	<th scope="col">Dia 1</th>
   			 <th scope="col">Datos;</th>
   			 </tr>			 
		<tr>
			<th scope="col">Precipitacion</th>
			<td>&nbsp;</td>
  		 </tr>
 		<tr>
			<th>Temperatura maxima</th>
			<th>---datos---</th>
		</tr>
		<tr>
			<th>Temperatura minima</th>
			<th>---datos---</th>
		</tr>
		<tr>
			<th>Temperatura media</th>			<th>---datos---</th>
		</tr>
		

</table
								
							</header>

						</div>
					</section>
					
					
					
					<div data-role="footer">
					<h4>Aplicacion INIFAP Estado de México</h4>
					
					</div>
					
    </body>
</html>
