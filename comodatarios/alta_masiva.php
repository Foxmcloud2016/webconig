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
</head>
<body>
	<section id="contenedor">
		<?php
		include('../includes/header.php');
		?>
		<div id="cuerpo">
			 <div class="comodatarios">
			 	<div class="col1">
			 		<h2>Alta masiva de comodatarios sin net asignada aún:</h2>
			 		 				<form action='masiva_comodatarios.php' method='post' enctype="multipart/form-data">
			 		 					<label for="file"> Importar Archivo : </label>
			 		 						<input type='file' name='sel_file' size='20'>
			 		 	  					<input type='submit' name='submit' value='Importar comodatarios'>
			 		 	 			 </form>
			 	</div>
			 	<div class="col2">
			 		<p>Descargue <a href="masiva_comodatarios.xls">aquí</a> el archivo excel para completar los datos necesarios para el alta masiva de comodatarios.</p>
			 	</div>
			 </div>
 			 <div class="nets">
 			 	<div class="col1">
 			 		<h2>Asignación de netbooks a comodatarios:</h2>
 			 					<form action='masiva_nets.php' method='post' enctype="multipart/form-data">
 			 						<label for="file"> Importar Archivo : </label>
 			 							<input type='file' name='sel_file' size='20'>
 			 					   		<input type='submit' name='submit' value='Asignar netbooks'>
 			 		</form>
 			 	</div>
 			 	<div class="col2">
			 		<p>Descargue <a href="masiva_nets.xls">aquí</a> el archivo excel para completar los datos necesarios para asignar netbooks de forma masiva a los comodatarios cargados anteriormente.</p>
			 	</div>
 			 </div>
 			 <div class="completa">
 			 	<div class="col1">
 			 		<h2>Alta masiva completa:</h2>
 			 					<form action='masiva_completa.php' method='post' enctype="multipart/form-data">
 			 						<label for="file"> Importar Archivo : </label>
 			 							<input type='file' name='sel_file' size='20'>
 			 					   		<input type='submit' name='submit' value='Importar comodatarios + nets'>
 			 		</form>
 			 	</div>
 			 	<div class="col2">
			 		<p>Descargue <a href="masiva_completa.xls">aquí</a> el archivo excel para completar los datos necesarios para cargar comodatarios con sus respectivas netbooks.</p>
			 	</div>
 			 </div>
		</div>
		<?php
			include('../includes/footer.php');
		?>
	</section>
</body>
</html>