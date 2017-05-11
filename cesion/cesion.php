<?php
include('../includes/inicio_sesion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Administrativo</title>
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
			<form action="confirmar_cesion.php" method="POST">
				<label>DNI del comodatario:</label>
				<input class="en_linea" type="text" id='dni' name="dni_com"></input>
				<input class='button button2' id='btnbuscarcom' type='button' onclick='buscarcom()' value="Buscar comodatario"></input>
				<div id='respuestatxt'></div>
				<div id='oculto' >
					<label>Año de Egreso:</label>
					<input type="text" name="anio_egreso"></input>
					<label>Curso:</label>
					<input type="text" name="curso"></input>
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
				<input class="button button2" id="mySubmit" type="submit" value="Marcar como Egresado"></input>
			</form>
			<script>document.getElementById("mySubmit").disabled = true;</script>	
		</div>
		<?php
		include('../includes/footer.php');
		?>
	</section>
</body>
</html>
