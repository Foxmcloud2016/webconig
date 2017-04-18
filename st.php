<?php
	include('includes/inicio_sesion.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sistema generador de actas</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="estilos/general.css">
		<link rel="stylesheet" type="text/css" href="estilos/form_comodato.css">
	</head>
	<body>
		<section id="contenedor">
			<header>
				<div id="head"></div>
				<div id="titulo">
					<a href="home.php"><h1>Sistema Generador de Actas</h1></a>
				</div>
			</header>
			<div id="cuerpo">
				<h2>Acta de Servicio Técnico:</h2>
				<form action="acta_st.php" method="POST" target="_blank">
					<span>Seleccione su colegio:</span>
					<select name="escuela_o">
						<option value="antartida">Antártida Argentina</option>
						<option value="piedrabuena">Piedrabuena</option>
						<option value="soberania">Soberanía Nacional</option>
						<option value="alicia">Alicia M. de Justo</option>
						<option value="cpet" selected>CPET</option>
						<option value="polivalente">Polivalente RG</option>
						<option value="haspen">Haspen</option>
						<option value="guevara">Guevara</option>
						<option value="trejo">Trejo Noel</option>
						<option value="maradona">Maradona</option>
						<option value="favaloro">Favaloro</option>
						<option value="zink">Padre Zink</option>
						<option value="marti">José Martí</option>
						<option value="arko">Técnico Arko</option>
						<option value="polivalente_ush">Polivalente Ushuaia</option>
						<option value="sobral">José María Sobral</option>
						<option value="andes">Los Andes</option>
						<option value="sabato">Sábato</option>
						<option value="kloketen">Kloketen</option>
					</select>
					</br>
					<span>Marca netbook:</span>
					<select name="marca">
						<option value="EXO">EXO</option>
						<option value="BGH">Positivo BGH</option>
						<option value="Samsung">Samsung</option>
						<option value="CX">CX</option>
						<option value="PC-BOX">PC-BOX</option>
						<option value="Noblex">Noblex</option>
						<option value="Coradir">Coradir</option>
					</select>
					</br>
					<span>Modelo netbook:</span>
					<select name="modelo">
						<option value="E10IS">E10IS</option>
						<option value="E11IS2">E11IS2</option>
						<option value="100NZC">100NZC</option>
						<option value="NT1015E">NT1015E</option>
						<option value="C5">C5</option>
						<option value="Schoolmate11">Schoolmate 11</option>
					</select>
					</br>
					<span>Número de serie:</span>
					<input type="text" name="serie"></input>
					<br />
					<span>Quien retira la netbook es:</span>
					<select name="pmt">
						<option value="padre">Padre</option>
						<option value="madre">Madre</option>
						<option value="tutor">Tutor</option>
					</select>
					</br>
					<span>Nombre y apellido del padre/madre/tutor:</span>
					<input type="text" name="adulto" class="nombre"></input>
					</br>
					<span>DNI del padre/madre/tutor/a:</span>
					<input type="text" name="dni_adulto"></input>
					</br>
					<span>Nombre y apellido del alumno/a:</span>
					<input type="text" name="alumno" class="nombre"></input>
					</br>
					<span>DNI del alumno/a:</span>
					<input type="text" name="dni_alumno"></input>
					</br>
					<span>Curso:</span>
					<select name="curso">
						<option value="1°">1°</option>
						<option value="2°">2°</option>
						<option value="3°">3°</option>
						<option value="4°">4°</option>
						<option value="5°">5°</option>
						<option value="6°">6°</option>
					</select>
					<span>División:</span>
					<select name="division">
						<option value="1°">1°</option>
						<option value="2°">2°</option>
						<option value="3°">3°</option>
						<option value="4°">4°</option>
						<option value="5°">5°</option>
						<option value="6°">6°</option>
						<option value="7°">7°</option>
						<option value="8°">8°</option>
						<option value="9°">9°</option>
					</select>
					<span>Turno:</span>
					<select name="turno">
						<option value="mañana">Mañana</option>
						<option value="tarde">Tarde</option>
						<option value="vespertino">Vespertino</option>
					</select>
					</br>
					<span>A continuación marque los componentes dañados o con fallas por los que la netbook requirio ST:</span>
							</br>
							<input type="checkbox" name="teclado" value="teclado" />Teclado<br />
							<input type="checkbox" name="motherboard" value="motherboard" />Motherboard<br />
							<input type="checkbox" name="pantalla" value="pantalla"/>Pantalla<br />
							<input type="checkbox" name="tpm" value="TPM"/>TPM<br />
							<input type="checkbox" name="disco" value="disco_rigido"/>Disco Rígido<br />
							<input type="checkbox" name="wifi" value="placa-wi-fi"/>Placa wi-fi<br />
							<input type="checkbox" name="varias" value="fallas varias"/>Fallas Varias<br />
					<input type="submit" value="Generar Acta"></input>	
				</form>					
			</div>
			<footer>
				<div id="pie">
					<a id="logout" href="logout.php">Cerrar sesión</a>	
				</div>
			</footer>
		</section>
	</body>
</html>