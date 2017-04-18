<?php
	$id_migracion = intval($_GET['id_m']);

	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$querymigracion= "SELECT C3.APEYNOM,C3.SERIE, C1.COLEGIO AS 'COLEGIO_ORIGEN', C2.COLEGIO AS 'COLEGIO_DESTINO', G.ESTADO, G.ID_COLEGIO_O, G.ID_COLEGIO_D, G.ID_COMODATARIO_FK FROM migraciones G INNER JOIN colegios C1 ON C1.ID_COLEGIO = G.ID_COLEGIO_O INNER JOIN colegios C2 ON C2.ID_COLEGIO = G.ID_COLEGIO_D INNER JOIN comodatarios C3 ON C3.ID_COMODATARIO = G.ID_COMODATARIO_FK WHERE G.ID_MIGRACION = '".$id_migracion."'";
	$resultadomigracion=$conexion->query($querymigracion);
  $migracion = mysqli_fetch_object($resultadomigracion);
?>

<html>

<head>
	<title>Baja de Migracion</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
  <link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<section id="contenedor">
			<?php include('../includes/header.php'); ?>
			<div id="cuerpo">
				<h2>Dar de baja migracion</h2>
				<br/>
        <p>¿Quiere dar de baja la migracion del alumno <?php echo $migracion->APEYNOM ?>?</p>
				<p>Colegio Origen: <?php echo $migracion->COLEGIO_ORIGEN ?></p>
				<p>Colegio Destino: <?php echo $migracion->COLEGIO_DESTINO ?></p>
				<form action='bajar_migracion.php' method ="POST">
						<input type="hidden"  name="id_m" value="<?php echo $id_migracion ?>">
						<input type="hidden"  name="id_com" value="<?php echo $migracion->ID_COMODATARIO_FK ?>">
			     <input class ='button' type="submit" value="Dar de baja Migracion"></input>
			     <a class='button button2' href="listar_migraciones.php">Volver</a>
				</form>
			</div>
		</div>
		<?php
				include('../includes/footer.php');
			?>
	</section>
</body>

</html>
