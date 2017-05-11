<?php
include('../includes/inicio_sesion.php');
include('../mysql/conectar.php');

$dni = $_POST['dni_com'];
$anio_egreso = $_POST['anio_egreso'];
$curso = $_POST['curso'];
$division = $_POST['division'];
$turno = $_POST['turno'];
$estado = 1;


$query = "INSERT INTO `egresados`(`ID_EGRESADO`, `DNI`, `ANIO_EGRESO`, `CURSO`, `DIVISION`, `TURNO`, `ESTADO`) VALUES (NULL, $dni, $anio_egreso, '$curso', '$division', '$turno', $estado)";
//$resultado = mysqli_query($conexion, $query) or die('Error: '.mysqli_error($conexion));
$resultado= $conexion->query($query);

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
			<h2>Confirmar Egresado</h2>
			<?php 

				if ($resultado) {
					echo "<p>El alumno/a con DNI $dni fue marcado como egresado.</p>";
				}else{
					echo "<p>El alumno/a con DNI $dni no ha podido ser cargado en la base de datos. Revise que los datos del alumno/a y reintente la operacion. Es posible que el alumno/a ya se enuentre en el listado de egresados.</p>";
				}
			?>
			
		</div>
		<?php
		include('../includes/footer.php');
		?>
	</section>
</body>
</html>
