<?php
include('../includes/inicio_sesion.php');
include('../mysql/conectar.php');

$tipo_colegio = $_POST['tipo_colegio'];
$cue = $_POST['cue'];
$nombre = $_POST['nombre'];
$director = $_POST['director'];
$dni = $_POST['dni'];
$domicilio = $_POST['domicilio'];
$ciudad = $_POST['ciudad'];
$distrito = $_POST['distrito'];

//consulta para verificar si el colegio no esta ya cargado en la BBDD
$verifico_duplicado = "SELECT `CUE` FROM `colegios` WHERE CUE = $cue";
$resultado_duplicado = mysqli_query($conexion, $verifico_duplicado) or die('Error: '.mysqli_error($conexion));
$row=mysqli_fetch_array($resultado_duplicado);

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
		<?php include('../includes/header.php') ?>
		<div id="cuerpo">
			<h2>Confirmar Nuevo Colegio</h2>
			<?php 

			if ($row['CUE'] == $cue) {
					echo "<p>El colegio $nombre no ha podido ser cargado en la base de datos. El mismo ya estaba cargado.</p>";
			}else{
					$query = "INSERT INTO `colegios`(`ID_COLEGIO`, `DIRECTOR`, `DNI`, `DOMICILIO`, `COLEGIO`, `CUE`, `CIUDAD`, `DISTRITO`, `TIPO_COLEGIO`) VALUES (NULL,'$director','$dni','$domicilio','$nombre',$cue,'$ciudad','$distrito', '$tipo_colegio')";
					$resultado= $conexion->query($query);

					echo "<p>El colegio $nombre fue agregado a la base de datos.</p>";
			}
			
			?>
			<a href="colegios_list.php" class="button button5">Volver a Colegios</a>
		</div>
		<?php
		include('../includes/footer.php');
		?>
	</section>
</body>
</html>
