<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	include('../includes/estados.php');
	$queryegresados="SELECT ID_EGRESADO,DNI,comodatarios.APEYNOM,ANIO_EGRESO,CURSO,DIVISION,TURNO,ESTADO FROM comodatarios INNER JOIN egresados WHERE DNI = comodatarios.DNI_COM";

	$resultado_egresados=$conexion->query($queryegresados);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema generador de actas></title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
</head>
<body>
	<section id="contenedor">
		<?php include('../includes/header.php'); ?>
		<div id="cuerpo">
			<h2>Listado de Egresados</h2>
			<?php if ($resultado_egresados->num_rows == 0): ?>
				<div class='flex'>
					<div class='insert_wrong'>
					<p>Todavia no existen egresados en la BBDD</p>
					</div>
				</div>
			<?php else: ?>
			<div>
				<table>
					<!--   Header de tablas con nombres de columnas  !-->
						<tr>
							<th>DNI</th>
							<th>Apellidos y Nombres</th>
							<th>Año de egreso</th>
							<th>Curso</th>
							<th>Division</th>
							<th>Turno</th>
							<th>Estado</th>
							<th>Opciones</th>
						</tr>
						<!--   Bucle while para completar tabla con todos los registros de egresados   !-->
						<?php while($row=$resultado_egresados->fetch_assoc()){?>
          					<tr>	
								<td><?php echo $row['DNI'];?> </td>
								<td><?php echo $row['APEYNOM'];?> </td>
								<td><?php echo $row['ANIO_EGRESO'];?> </td>
          						<td><?php echo $row['CURSO'];?> </td>
          						<td><?php echo $row['DIVISION'];?> </td>
          						<td><?php echo $row['TURNO'];?> </td>
          						<td>
          						<?php 
          							# Genere una funcion para devolver el estado
          							# Mirar en la carpeta includes/estados.php
          							echo estado_egresado($row['ESTADO']);	
          						?>
          						</td>
          						
          						<td>
          							<a class="button button2" href="modificar_estado.php?id=<?php echo $row['ID_EGRESADO'] ;?>" >Modificar Estado</a>
          							<a class="button button2" href="modificar_egresado.php?id=<?php echo $row['ID_EGRESADO'] ;?>" >Modificar Egresado</a>
          							<a class="button" style='padding:0.25em' href='cesion_.php?id=<?php echo $row['ID_EGRESADO'] ;?>'  >Generar Contrato de Cesión</a>
          							<a class="button button3" href="baja_egresado.php?id_e=<?php echo $row['ID_EGRESADO'] ;?>" >Baja Egresado</a>
          						</td>
 							<tr> 
          				<?php } ?>
          				<!--   Fin de bucle   !-->
				</table>
			</div>
			<?php endif ?>
		</div>
			<?php include('../includes/footer.php'); ?>
		</section>
	</body>
</html>