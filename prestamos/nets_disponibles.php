<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$id_colegio = $_SESSION['colegio'];

	//Consulta a BD de nets disponibles para prestar
	$query_disponible="SELECT ID_MAQUINA, SERIE, MARCA, MODELO, ESTADO,ESTADO_EQUIPO FROM PARQUE_ESCOLAR WHERE ESTADO='disponible' AND ID_COLEGIO_FK='$id_colegio'";
	$result_disponible=$conexion->query($query_disponible);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Parque Escolar Disponible</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../estilos/general.css">
		<link rel="stylesheet" type="text/css" href="../estilos/header.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<section id="contenedor">
			<?php
				include('../includes/header.php');
			?>
			<div id="cuerpo">
					<div>
						<h2>Netbooks del parque escolar disponibles:</h2>
						<table>
							<!--   Header de tablas con nombres de columnas  !-->
								<tr>
									<th>Serie</th>
									<th>Marca</th>
									<th>Modelo</th>
									<th>Estado</th>
									<th>Estado del Equipo</th>
									<th>Acciones</th>
								</tr>
								<!--   Bucle while para completar tabla con todos los registros de colegios   !-->
								<?php while($row=$result_disponible->fetch_assoc()){?>
	              					<tr>		
										<td><?php echo $row['SERIE'];?> </td>
										<td><?php echo $row['MARCA'];?> </td>
	              						<td><?php echo $row['MODELO'];?> </td>
	              						<td><?php echo $row['ESTADO'];?> </td>
	              						<td><?php echo $row['ESTADO_EQUIPO'];?> </td>
	              						<td> <a class="button button2" href='form_prestamo.php?id=<?php echo $row['ID_MAQUINA'] ?>'>Prestar Net</a>
	              							<a class='button button2' href="baja_netbook.php?id_m=<?php echo $row['ID_MAQUINA'] ?>">Dar de baja net</a>
	              						</td>
	     							<tr> 
	              				<?php } ?>
	              				<!--   Fin de bucle   !-->
						</table>
					</div>		
			</div>
			<?php
				include('../includes/footer.php');
			?>
		</section>
	</body>
</html>