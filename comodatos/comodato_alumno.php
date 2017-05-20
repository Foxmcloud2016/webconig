<?php
include('../includes/inicio_sesion.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema Administrativo</title>
		<meta charset="utf-8" />
		<!--Estilo para el desplegable de los DNI-->
		<!--link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"-->
		<!--link rel="stylesheet" href="../js/jquery-ui.css"-->
		<!--Fin estilo desplegable DNI-->
		<link rel="stylesheet" type="text/css" href="../estilos/general.css">
		<link rel="stylesheet" type="text/css" href="../estilos/header.css">
		<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
		<!--JQuery para desplegable de DNI-->
		<script src="../js/jquery-3.1.1.min.js"></script>
		<script src="../js/myscripts.js"></script>
	</head>
	<body>
		<section id="contenedor">
			<?php
				include('../includes/header.php');
			?>
			<div id="cuerpo">
				<h2>Contrato de Comodato (p/ Alumnos):</h2>
				<form action="acta_comodato_alumno.php" method="POST" target="_blank">
					<label>DNI del alumno/a:</label>
					<input class="en_linea" type="text" name="dni_comodatario" id="dni"></input>
					<input class='button button2' id='btnbuscarcom' type='button' onclick='buscarcom()' value="Buscar comodatario"></input>
					<div id='respuestatxt'></div>
					<div id='oculto'>
						<label>Domicilio:</label>
						<input type="text" name="calle" id="domicilio"></input>
						<label>Número:</label>
						<input type="text" name="numero"></input>
						<label>Piso:</label>
						<input type="text" name="piso"></input>
						<label>Departamento:</label>
						<input type="text" name="depto"></input>
					</div>
					<input class="button button2" type="submit" id="mySubmit" value="Generar Contrato"></input>	
				</form>	
				<script>document.getElementById("mySubmit").disabled = true;</script>				
			</div>
			<?php
				include('../includes/footer.php');
			?>
		</section>
	</body>
</html>