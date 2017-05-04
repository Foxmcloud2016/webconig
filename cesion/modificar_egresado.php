<?php
	$id_egresado = intval($_GET['id']);
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$queryegresados="SELECT DNI,ANIO_EGRESO,CURSO,DIVISION,TURNO,ESTADO FROM EGRESADOS WHERE ID_EGRESADO = $id_egresado";
	$resultado_egresado=$conexion->query($queryegresados);
	$egresado = $resultado_egresado->fetch_object();
	$dni = $egresado->DNI;
	$anio_egreso = $egresado->ANIO_EGRESO;
	$curso = $egresado->CURSO;
	$division = $egresado->DIVISION;
	$turno = $egresado->TURNO;
?>
<html>

<head>
	<title>Modificar Colegio</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<section id="contenedor">
			<?php
				include('../includes/header.php');
			?>
			<div id="cuerpo">
				<h2>Modificar Egresado</h2>
				<br/>
				<form action='modifica_egresado.php' method ="POST">
					<input type="hidden" name="id_egresado" value="<?php echo $id_egresado ?>">
					<label for="dni">DNI</label>
					<input type="text" name="dni"  value="<?php echo $dni; ?>" required="true">
					<label for="anio">Año de Egreso</label>
					<input type="text" name="anio" value="<?php echo $anio_egreso; ?>" required="true">
					<label for="curso">Curso</label>
					<input type="text" name="curso" value="<?php echo $curso; ?>" required="true">
					<label for="division">División</label>
					<input type="text" name="division" value="<?php echo $division ;?>" required="true">
					<label for="turno">Turno</label>
					<input type="text" name="turno" value="<?php echo $turno ;?>" required="true">
					<br />
					<input type="submit" value="Modificar Estado"></input>
					<a class='button' href="lista_egresados.php">Cancelar</a>
					</form>
			</div>
		</div>
		<script type="text/javascript">
			
		</script>
		<?php
				include('../includes/footer.php');
			?>
	</section>
</body>

</html>