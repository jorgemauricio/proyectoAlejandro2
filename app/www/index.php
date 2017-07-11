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
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/index.css">
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
		<div class="inner">
			<header>
				<h1><a href="index.html" id="logo">Estaciones Agroclimáticas</a></h1>
				<br>			
			</header>
		</div>
				
				
					
				<!-- lista de links para el DEZPLAZAMIENTO  -->
			<nav id="nav">	
					<ul>
						<li><a href="#MAPA" 			id="MAPA-link"			  class="skel-layers-ignoreHref"><span class="icon fa-home">MAPA</span></a></li>
						<li><a href="#15minutos" 		id="15minutos-link" 	  class="skel-layers-ignoreHref"><span class="icon fa-th">Datos cada 15 minutos</span></a></li>
						<li><a href="#estadisticos" 	id="estadisticos-link" 	  class="skel-layers-ignoreHref"><span class="icon fa-th">Datos estadisticos</span></a></li>
						<li><a href="#humedadrelativa"  id="humedadrelativa-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Temperatura y humedadrelativa</span></a></li>
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
                	<input type="checkbox" value="1QmqsXAFzy6Ngivk8YXM0ZG2OEPttTiWKPs_Lv5pH"id="capa1" 	onClick="enciendecapas(this.value);" checked="checked">Municipios<br>
                    <input type="checkbox" value="1O2Xjgu4DaLVANS7zPMwO_fIajhvVPkuEFtZ0LUcx"id="capa2" 	onClick="enciendecapas(this.value);" checked="checked">Uso de suelo<br>
					<input type="checkbox" value="1-evLAUWaXGtGY3QasNLavAsP9VIeZTMaBqw4aw-r"id="capa3" 	onClick="enciendecapas(this.value);" checked="checked">Edafologia<br>
					<input type="checkbox" value="1vGQYZWyRr_EUvIXLd_mnmOLzhiayBIwAv7Z1N1lT"id="capa4" 	onClick="enciendecapas(this.value);" checked="checked">Hidrologia<br>
                 	<input type="checkbox" value="1bulqje2AuwBdIOrVHcfNjm4nWzWafCV_ZqUlbDjP"id="capa5" 	onClick="enciendecapas(this.value);" checked="checked">Frontera agricola
					</form>
				</td>
				<td>
			
			
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
				</td>
          </tr>
     </table>
					
			
					<!-- Datos cada 15 minutos -->
					<section id="15minutos" class="two">
						<div class="container">
							<header>
								<h1>Datos cada 15 minutos</h1>					
	<table border="1">							
		
		<tr>
			<th>Velocidad del viento</th>
			<th>---datos---</th>
		</tr>
		<tr>
			<th scope="col">Direccion del viento;</th>
      		<th scope="col">&nbsp;</th>
		</tr>
			
	</table
							</header>

							<p></p>

						</div>
					</section>
					
					
					
					<!-- Datos estadisticos -->
					<section id="estadisticos" class="three">
						<div class="container">
							<header>
								<h1>Datos Estadisticos</h1>
								</header>
				</div>
				</section>

				
						<!-- Temperatura y humedad relativa -->
					<section id="humedadrelativa" class="four">
						<div class="container">

							<header>
								<h1>Temperatura y humedad relativa</h1>
							</header>
						</div>




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
    </body>
</html>
