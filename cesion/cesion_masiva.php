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
			<div class="comodatarios">
				<div class="col1">
					<h2>Alta masiva de egresados:</h2>
					<form action='procesa_masiva.php' method='post' enctype="multipart/form-data">
						<label for="file"> Importar Archivo : </label>
						<input type='file' name='sel_file' size='20'>
						<input type='submit' name='submit' value='Importar egresados'>
					</form>
				</div>
				<div class="col2">
					<p>Descargue <a href="masiva_egresados.xls">aquí</a> el archivo excel para completar los datos necesarios para el alta masiva de egresados.</p>
				</div>
			</div>
		</div>
		<?php
		include('../includes/footer.php');
		?>
	</section>
</body>
</html>