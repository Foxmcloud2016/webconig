<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	include('../includes/functions.php');
	$id_egresado = intval($_GET['id']);
	$queryegresado="SELECT ID_EGRESADO,DNI,comodatarios.APEYNOM,egresados.CURSO,egresados.DIVISION,egresados.TURNO FROM comodatarios INNER JOIN egresados WHERE ID_EGRESADO = $id_egresado";

	$resultado_egresado = $conexion->query($queryegresado);
	$egresado = mysqli_fetch_object($resultado_egresado);
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
		<div id="cuerpo" <?php echo $egresado->DNI ?>>
			<h2>Contrato de Cesión:</h2>
			<form action="acta_cesion.php" method="POST" target="_blank">
				<input class="en_linea" type="hidden" id='dni' name="dni_com" value="<?php echo $egresado->DNI; ?>"></input>
				<?php 
				  buscar_comodatario($egresado->DNI); 
				?>
				
				<label>¿El alumno/a es mayor de edad?:</label>
				<input id="mayor" type="radio" name="mayor" value="si" />Si <br />
				<input id="mayor" type="radio" name="mayor" value="no" />No <br />
				<?php #si no es mayor preguntar si es el mismo tutor que firma ?>
				<div id="mismo">
					<label>¿El Adulto responsable firmante es el mismo que se muestra arriba?:</label>
					<input id="mismo" type="radio" name="mismo" value="si" />Si 
					<br />
					<input id="mismo" type="radio" name="mismo" value="no" />No 
					<br/>	
				</div>
				<?php #si no es el mismo ingresar nuevos datos para el adulto. ?>
				<div id="nuevo_adulto">
					<label for="dni_adulto">DNI adulto:</label>
					<input type="text" name="dni_adulto">
					<label for="apeynom_adulto">Apellido y nombres del adulto:</label>
					<input type="text" name="apeynom_adulto">
					<label for="motivo">Motivo del cambio de adulto.</label>
					<textarea cols="40" rows="10" type="text" name="motivo"></textarea>
				</div>
				
				<label>Domicilio:</label>
				<input type="text" name="calle" id="domicilio"></input>
				<label>Número:</label>
				<input type="text" name="numero"></input>
				<label>Piso:</label>
				<input type="text" name="piso"></input>
				<label>Departamento:</label>
				<input type="text" name="depto"></input>
				
				<input type="hidden" name="curso" value="<?php echo $egresado->CURSO; ?>">
				<input type="hidden" name="division" value="<?php echo $egresado->DIVISION; ?>">
				<input type="hidden" name="turno" value="<?php echo $egresado->TURNO; ?>">
				<input class="button button2" id="mySubmit" type="submit" value="Generar Contrato"></input>
			</form>
		</div>
		</div>
		<?php
		include('../includes/footer.php');
		?>
	</section>
	<script type="text/javascript">

		$('#mismo').hide();
		$('#nuevo_adulto').hide();

		$('input[name="mayor"]').on('change', function() {
   			if ($('input[name="mayor"]:checked','form').val() == 'si') {
   				$('#mismo').hide();
				$('#nuevo_adulto').hide();
   			} else {
   				$('#mismo').show();	
   			}
		});

		$('input[name="mismo"]').on('change', function() {
   			if ($('input[name="mismo"]:checked','form').val() == 'si') {
				$('#nuevo_adulto').hide();
   			} else {
   				$('#nuevo_adulto').show();	
   			}
		});

	</script>
</body>
</html>