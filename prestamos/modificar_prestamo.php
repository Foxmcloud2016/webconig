<?php
	
	$id_maquina = intval($_GET['id_m']);
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	$queryprestamo="SELECT * FROM PRESTAMOS WHERE ID_MAQUINA_FK = '$id_maquina' AND VIGENTE=1";
	$resultadoprestamo=$conexion->query($queryprestamo);

	$prestamo = $resultadoprestamo->fetch_object();

?>


<html>

<head>
	<title>Modificar Colegio</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<section id="contenedor">
			<?php  include('../includes/header.php');  ?>
			<div id="cuerpo">
				<h2>Modificar Datos de Prestamo</h2>
				<br/>
				
				<form name='fo' id="fo" action="realizar_modiprestamo.php" method ="POST">
							<label for= 'tipo_comodatario'>Tipo de Comodatario:</label>
							<select name="comodatario" id="comodatario" value="<?php echo $prestamo->TIPO_COM_PRE ?>" required>
								<option value="0">Alumno</option>
								<option value="1">Docente</option>
							</select>
							<br/>
							<label for= 'dni'>DNI</label>
							<input type="text" name="dni" id="dni" value="<?php echo $prestamo->DNI ?>" required> </input>
							<br/>
							<label for= 'apeynom'>Apellido y nombre</label>
							<input type="text" name="apeynom" id="apeynom" value="<?php echo $prestamo->APEYNOM ?>" required> </input>
							<br/>
							<label for= 'cargador'>Cargador</label>
							<select name="cargador" id="cargador" value="<?php echo $prestamo->CARGADOR ?>" required>
								<option value="1">Si</option>
								<option value="0">No</option>
							</select>
							<br />
							<input type="text" name="id_maquina" id="id_maquina" value="<?php echo $id_maquina; ?>" hidden="true">
							<input class = 'button' id='button' type="submit" value="Modificar datos"></input>
							<a class='button button2' href="admin_prestamo.php">Cancelar</a>
						</form>
			</div>
		</div>
		<?php
					include('../includes/footer.php');
				?>
	</section>
</body>

</html>