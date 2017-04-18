<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$id_colegio = $_SESSION['colegio'];

	//Consulta a BD de nets que alguna vez se prestaron y ya fueron devueltas (historial de prestamos)
	$query = "SELECT PRESTAMOS.DNI, PRESTAMOS.APEYNOM, PRESTAMOS.ID_MAQUINA_FK, PRESTAMOS.VIGENTE, PRESTAMOS.TIPO_COM_PRE, PRESTAMOS.ADEUDA_BATERIA, PRESTAMOS.ADEUDA_CARGADOR, PRESTAMOS.ADEUDA_ANTENA, PRESTAMOS.MOTIVO_PRESTAMO, PARQUE.SERIE, PARQUE.MARCA, PARQUE.MODELO
						FROM parque_escolar AS PARQUE
						JOIN PRESTAMOS 
						ON PARQUE.ID_MAQUINA = PRESTAMOS.ID_MAQUINA_FK
						WHERE PARQUE.ID_COLEGIO_FK='$id_colegio'
						AND PRESTAMOS.VIGENTE=0 
						ORDER BY PARQUE.MARCA, PARQUE.MODELO, PARQUE.SERIE";
	$resultado=$conexion->query($query);
	$cant_resultados = mysqli_num_rows($resultado);



	/*

	SELECT PRESTAMOS.DNI, PRESTAMOS.APEYNOM, PRESTAMOS.ID_MAQUINA_FK, PRESTAMOS.VIGENTE, PRESTAMOS.TIPO_COM_PRE, PRESTAMOS.ADEUDA_BATERIA, PRESTAMOS.ADEUDA_CARGADOR, PRESTAMOS.ADEUDA_ANTENA, PRESTAMOS.MOTIVO_PRESTAMO, PARQUE.SERIE, PARQUE.MARCA, PARQUE.MODELO FROM parque_escolar AS PARQUE JOIN PRESTAMOS ON PARQUE.ID_MAQUINA = PRESTAMOS.ID_MAQUINA_FK WHERE PARQUE.ID_COLEGIO_FK=5 GROUP BY PARQUE.SERIE



	//ordena por nombre de marca, modelo y serie
	SELECT PRESTAMOS.DNI, PRESTAMOS.APEYNOM, PRESTAMOS.ID_MAQUINA_FK, PRESTAMOS.VIGENTE, PRESTAMOS.TIPO_COM_PRE, PRESTAMOS.ADEUDA_BATERIA, PRESTAMOS.ADEUDA_CARGADOR, PRESTAMOS.ADEUDA_ANTENA, PRESTAMOS.MOTIVO_PRESTAMO, PARQUE.SERIE, PARQUE.MARCA, PARQUE.MODELO FROM parque_escolar AS PARQUE JOIN PRESTAMOS ON PARQUE.ID_MAQUINA = PRESTAMOS.ID_MAQUINA_FK WHERE PARQUE.ID_COLEGIO_FK=5 ORDER BY PARQUE.MARCA, PARQUE.MODELO, PARQUE.SERIE





	*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Historial de Prestamos</title>
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
					<?php
						if ($cant_resultados >= 1) { ?>
							<div>
								<h2>Historial de prestamos:</h2>
								<?php echo "Cantidad de registros: "; echo($cant_resultados);?>
								<table>
									<!--   Header de tablas con nombres de columnas  !-->
										<tr>
											<th>DNI</th>
											<th>APEYNOM</th>
											<th>Marca</th>
											<th>Modelo</th>
											<th>Serie</th>
											<th>Adeuda cargador</th>
											<th>Adeuda bateria</th>
											<th>Adeuda antena</th>
										</tr>
										<!--   Bucle while para completar tabla con todos los registros de colegios   !-->
										<?php while($row=$resultado->fetch_assoc()){?>
			              					<tr>
			              						<td><?php echo $row['DNI'];?> </td>	
												<td><?php echo $row['APEYNOM'];?> </td>
												<td><?php echo $row['MARCA'];?> </td>
			              						<td><?php echo $row['MODELO'];?> </td>
			              						<td><?php echo $row['SERIE'];?> </td>
			              						<td><?php if ($row['ADEUDA_CARGADOR']==1) {
			              							echo 'Si';
			              						}else{
			              							echo 'No';
			              						}?></td>
			              						<td><?php if ($row['ADEUDA_BATERIA']==1) {
			              							echo 'Si';
			              						}else{
			              							echo 'No';
			              						}?></td>
			              						<td><?php if ($row['ADEUDA_ANTENA']==1) {
			              							echo 'Si';
			              						}else{
			              							echo 'No';
			              						}?></td>
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