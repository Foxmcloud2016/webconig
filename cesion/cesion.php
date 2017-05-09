<?php
include('../includes/inicio_sesion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema generador de actas</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	<script type="text/javascript" src='../js/myscripts.js'></script>
	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
	</script>
</head>
<body>
	<section id="contenedor">
		<?php include('../includes/header.php') ?>
		<div id="cuerpo">
			<h2>Alta de Egresado</h2>
			<form action="acta_cesion.php" method="POST" target="_blank">
				<label>DNI del comodatario:</label>
				<input class="en_linea" type="text" id='dni' name="dni_com"></input>
				<input class='button button2' id='btnbuscarcom' type='button' onclick='buscarcom()' value="Buscar comodatario"></input>
				<div id='respuestatxt'>
				</div>
				<div id='oculto' >
					<label>¿El alumno/a es mayor de edad?:</label>
					<input type="radio" name="mayor" value="si" />Si <br />
					<input type="radio" name="mayor" value="no" />No <br />
					<label>Domicilio:</label>
					<input type="text" name="calle" id="domicilio"></input>
					<label>Número:</label>
					<input type="text" name="numero"></input>
					<label>Piso:</label>
					<input type="text" name="piso"></input>
					<label>Departamento:</label>
					<input type="text" name="depto"></input>
					<label>Curso:</label>
					<select name="curso">
						<option value="3°">3°</option>
						<option value="4°">4°</option>
						<option value="6°">6°</option>
						<option value="7°">7°</option>
					</select>
					<label>División:</label>
					<input type="text" name="division"></input>
					<label>Turno:</label>
					<select name="turno">
						<option value="mañana">Mañana</option>
						<option value="tarde">Tarde</option>
						<option value="vespertino">Vespertino</option>
					</select>
				</div>
				<input class="button button2" id="mySubmit" type="submit" value="Generar Contrato"></input>
			</form>
			<script>document.getElementById("mySubmit").disabled = true;</script>	
		</div>
		<?php
		include('../includes/footer.php');
		?>
	</section>
</body>
</html>
