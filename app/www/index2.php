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

    	<!--
        Customize the content security policy in the meta tag below as needed. Add 'unsafe-inline' to default-src to enable inline JavaScript.
        For details, see http://go.microsoft.com/fwlink/?LinkID=617521
 
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *">
           -->
		
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" type="text/css" href="css/index.css"> -->
        <title>app</title>
			
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
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
					capa2.setMap(map); //Si se coloca null el mapa no se dibuja de inicio
					capa3.setMap(map); //Si se coloca null el mapa no se dibuja de inicio
					capa4.setMap(map); //Si se coloca null el mapa no se dibuja de inicio
					capa5.setMap(map); //Si se coloca null el mapa no se dibuja de inicio
					
					
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
					
				}
		</script>

    </head>
    <!-- logo inifap -->
    <div class="logo">		
		<a href="#" class="image fit"><img src="images/inifap.png" alt="" /></a>
	</div>
	<?php include("include/header.html");?>
   	<body onLoad="initialize()">
        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="scripts/platformOverrides.js"></script>
        <script type="text/javascript" src="scripts/index.js"></script>
		<div class="container-fluid">
			<div class="container">
				<div class="text-center">
					<h1>Estaciones Agroclimáticas</h1>
					<br>
					<!-- MAPA -->
					<section id="MAPA" class="one dark cover">
						<div class="container">		
							<h3>Estaciones</h3>
							<br>
							<div id="map_canvas" ></div>
						</div>														
					</section>
				</div>
				<br>
				<div class="container">
					<form>
							<!--Controles para apagar y encender capas-->
		                	<input type="checkbox" value="1QmqsXAFzy6Ngivk8YXM0ZG2OEPttTiWKPs_Lv5pH"id="capa1" 	onClick="enciendecapas(this.value);" checked="checked">Municipios<br>
		                    <input type="checkbox" value="1O2Xjgu4DaLVANS7zPMwO_fIajhvVPkuEFtZ0LUcx"id="capa2" 	onClick="enciendecapas(this.value);" checked="checked">Uso de suelo<br>
							<input type="checkbox" value="1-evLAUWaXGtGY3QasNLavAsP9VIeZTMaBqw4aw-r"id="capa3" 	onClick="enciendecapas(this.value);" checked="checked">Edafologia<br>
							<input type="checkbox" value="1vGQYZWyRr_EUvIXLd_mnmOLzhiayBIwAv7Z1N1lT"id="capa4" 	onClick="enciendecapas(this.value);" checked="checked">Hidrologia<br>
		                 	<input type="checkbox" value="1bulqje2AuwBdIOrVHcfNjm4nWzWafCV_ZqUlbDjP"id="capa5" 	onClick="enciendecapas(this.value);" checked="checked">Frontera agricola
						</form>
						<br>
						<form>
							<input type="button" value="Boton" />
							<button type="button">Cargar estaciones</button>
						</form>	
				
						<form action="/action_page.php">
							estacion: <select name="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="fiat">Fiat</option>
							<option value="audi">Audi</option>
							</select>
						</form>
				</div>
				<div class="container">
				<!-- Datos cada 15 minutos -->
					<section id="15minutos" class="two">
						<div class="container">
							<h3>Datos cada 15 minutos</h3>					
							<table class="table table-striped">	
								<thead>
									<tr>
										<th>Variable</th>
										<th>Dato</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Velocidad del viento</td>
										<td>-- datos --</td>
									</tr>
									<tr>
										<td>Dirección del viento</td>
										<td>-- datos --</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
				</div>
				<!-- Estadisticos -->
				<div class="container">
					<section id="estadisticos" class="three">
						<div class="container">
							<h3>Datos Estadisticos</h3>
								
						</div>
					</section>
				</div>
				<!-- Temperatura y humedad relativa -->
				<div class="container">
					<section id="humedadrelativa" class="four">
						<div class="container">
							<h3>Temperatura y humedad relativa</h3>
								
						</div>
					</section>
				</div>
				<!-- Pronósticos -->
				<div class="container">
					<section id="Pronostico" class="four">
						<div class="container">
							<h3>Pronósticos</h3>
							<table class="table table-striped">	
								<thead>
									<tr>
										<th>Día</th>
										<th>Precipitación</th>
										<th>T Máx</th>
										<th>T Mín</th>
										<th>T Med</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Jueves</td>
										<td>23 mm</td>
										<td>24 ºC</td>
										<td>4 ºC</td>
										<td>15 ºC</td>
									</tr>
									<tr>
										<td>Viernes</td>
										<td>12 mm</td>
										<td>23 ºC</td>
										<td>2 ºC</td>
										<td>16 ºC</td>
									</tr>
								</tbody>
							</table>
								
						</div>
					</section>
				</div>			
	</body>
</html>
