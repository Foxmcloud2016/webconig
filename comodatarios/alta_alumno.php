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
</head>
<body>
	<section id="contenedor">
		<?php
		include('../includes/header.php');
		?>
		
		<div id="cuerpo">
			<h2>Alta de Alumno:</h2>
			<form action="procesa_alta_comodatario.php" method="POST">
				<label for="dni">DNI alumno:</label>
				<input type="text" name="dni" required>
				<label for="apellido">Apellido alumno:</label>
				<input type="text" name="apellido" required>
				<label for="nombre">Nombre alumno:</label>
				<input type="text" name="nombre" required>
				<label for="dni_adulto">DNI adulto:</label>
				<input type="text" name="dni_adulto" required>
				<label for="apellido_adulto">Apellido adulto:</label>
				<input type="text" name="apellido_adulto" required>
				<label for="nombre_adulto">Nombre adulto:</label>
				<input type="text" name="nombre_adulto" required>
				<label for="marca">Marca netbook:</label>
				<input type="text" name="marca" required>
				<label for="modelo">Modelo netbook:</label>
				<input type="text" name="modelo" required>
				<label for="serie">Número de serie:</label>
				<input type="text" name="serie" required>
				<input class="oculto" type="text" name="tipo_comodatario" value="alumno">
				<input type="submit" value="Agregar comodatario"></input>
			</form>
		</div>
		<?php
			include('../includes/footer.php');
		?>
	</section>
</body>
</html>
