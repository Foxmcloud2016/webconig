<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$id_colegio = $_SESSION['colegio'];

	//Consulta a BD de nets disponibles para prestar
	$query_disponible="SELECT ID_MAQUINA, SERIE, MARCA, MODELO, ESTADO,ESTADO_EQUIPO FROM PARQUE_ESCOLAR WHERE ESTADO='disponible' AND ID_COLEGIO_FK='$id_colegio'";
	$result_disponible=$conexion->query($query_disponible);
	//Consulta a BD de nets prestadas
	$query_prestada = "SELECT PARQUE.ID_MAQUINA, PARQUE.SERIE, PARQUE.MARCA, PARQUE.MODELO, PARQUE.ESTADO, PARQUE.ESTADO_EQUIPO, PRESTAMOS.CARGADOR, PRESTAMOS.APEYNOM, PRESTAMOS.VIGENTE
						FROM parque_escolar AS PARQUE
						JOIN PRESTAMOS 
						ON PARQUE.ID_MAQUINA = PRESTAMOS.ID_MAQUINA_FK
						WHERE PARQUE.ESTADO = 'prestada'
						AND PARQUE.ID_COLEGIO_FK='$id_colegio'
						AND PRESTAMOS.VIGENTE = 1";
	$result_prestada=$conexion->query($query_prestada);
	$cuenta_prestada = mysqli_num_rows($result_prestada);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Parque Escolar</title>
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

					<?php
						if ($cuenta_prestada >= 1) { ?>
							<div>
								<h2>Netbooks del parque escolar prestadas:</h2>
								<table>
									<!--   Header de tablas con nombres de columnas  !-->
										<tr>
											<th>Prestada a:</th>
											<th>Serie</th>
											<th>Marca</th>
											<th>Modelo</th>
											<th>Estado</th>
											<th>Estado del Equipo</th>
											<th>Se le presto cargador?</th>
											<th>Acciones</th>
										</tr>
										<!--   Bucle while para completar tabla con todos los registros de colegios   !-->
										<?php while($row=$result_prestada->fetch_assoc()){?>
			              					<tr>
			              						<td><?php echo $row['APEYNOM'];?> </td>	
												<td><?php echo $row['SERIE'];?> </td>
												<td><?php echo $row['MARCA'];?> </td>
			              						<td><?php echo $row['MODELO'];?> </td>
			              						<td><?php echo $row['ESTADO'];?> </td>
			              						<td><?php echo $row['ESTADO_EQUIPO'];?> </td>
			              						<td><?php if ($row['CARGADOR']==1) {
			              							echo 'Si';
			              						}else{
			              							echo 'No';
			              						}?></td>
			              						<td> <a class='button button2' href='form_devolucion.php?id=<?php echo $row['ID_MAQUINA'] ?>'>Devolver Net</a>
			              							<a class='button button2' href="prestamo_pdf.php?id_m=<?php echo $row['ID_MAQUINA'] ?>" target="_blank">Generar PDF</a>
			              							<a class='button button2' href="modificar_prestamo.php?id_m=<?php echo $row['ID_MAQUINA'] ?>">Modificar datos</a>
			              						</td>
			     							<tr> 
			              				<?php } ?>

			              				<!--   Fin de bucle while  !-->
								</table>
							</div>
					<?php }else{
								//No hay nets prestadas, entonces no muestra nada
						} ?>
						
					
			</div>
			<?php
				include('../includes/footer.php');
			?>
		</section>
	</body>
</html>