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
			<h2>Alta de Colegio:</h2>
			<form action="procesa_alta_colegio.php" method="POST">
				<label for="tipo_colegio">Seleccione tipo de institución:</label>
				<select name="tipo_colegio" id="tipo_colegio">
					<option value="Secuandaria">Secundaria</option>
					<option value="Especial">Especial</option>
					<option value="ISFD">ISFD</option>
				</select>
				<label for="cue">CUE:</label>
				<input type="text" name="cue" required>
				<label for="nombre">Nombre del Colegio:</label>
				<input type="text" name="nombre" required>
				<label for="director">Nombre Director/a:</label>
				<input type="text" name="director" required>
				<label for="dni">DNI Director/a:</label>
				<input type="text" name="dni" required>
				<label for="domicilio">Domicilio del Colegio:</label>
				<input type="text" name="domicilio" required>
				<label for='ciudad'>Ciudad</label>
					<select name='ciudad' id='ciudad' required>
						<option value='Rio Grande'>Rio Grande</option>
						<option value='Tolhuin'>Tolhuin</option>
						<option value='Ushuaia'>Ushuaia</option>
					</select>
				<label for="distrito">Distrito:</label>
				<input type="text" name="distrito" required>
				<input type="submit" value="Agregar colegio"></input>
				<a href="colegios_list.php" class="boton button5">Cancelar</a>
			</form>
		</div>
		<?php
			include('../includes/footer.php');
		?>
	</section>
</body>
</html>
