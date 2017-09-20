<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$id_colegio = $_SESSION['colegio'];

	//AL PRINCIPIO COMPRUEBO SI HICIERON CLICK EN ALGUNA PÁGINA 
		if(isset($_GET['page']))
	{
	    $page= $_GET['page'];
	}
	else
	{
	    //SI NO DIGO Q ES LA PRIMERA PÁGINA
	    $page=1;
	}


	//Consulta a BD de nets prestadas
	$consulta = "SELECT PARQUE.ID_MAQUINA, PARQUE.SERIE, PARQUE.MARCA, PARQUE.MODELO, PARQUE.ESTADO, PARQUE.ESTADO_EQUIPO, PRESTAMOS.CARGADOR, PRESTAMOS.APEYNOM, PRESTAMOS.VIGENTE
						FROM parque_escolar AS PARQUE
						JOIN PRESTAMOS 
						ON PARQUE.ID_MAQUINA = PRESTAMOS.ID_MAQUINA_FK
						WHERE PARQUE.ESTADO = 'prestada'
						AND PARQUE.ID_COLEGIO_FK='$id_colegio'
						AND PRESTAMOS.VIGENTE = 1";
	$datos=$conexion->query($consulta);
	$num_rows = mysqli_num_rows($datos);

	//ACA SE DECIDE CUANTOS RESULTADOS MOSTRAR POR PÁGINA
		$rows_per_page= 10;
		  
		//CALCULO LA ULTIMA PÁGINA
		$lastpage= ceil($num_rows / $rows_per_page);
		  
		//COMPRUEBO QUE EL VALOR DE LA PÁGINA SEA CORRECTO Y SI ES LA ULTIMA PÁGINA
		$page=(int)$page;
		 
		if($page > $lastpage)
		{
		    $page= $lastpage;
		}
		 
		if($page < 1)
		{
		    $page=1;
		}
		 
		//CREO LA SENTENCIA LIMIT PARA AÑADIR A LA CONSULTA QUE DEFINITIVA
		$limit= 'LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;

		//REALIZO LA CONSULTA QUE VA A MOSTRAR LOS DATOS (ES LA ANTERIO + EL $limit)
		$consulta .=" $limit";
		$consulta_limit=mysqli_query($conexion,$consulta);
		  
		if(!$consulta_limit)
		{
		        //SI FALLA LA CONSULTA MUESTRO ERROR
		        die('Invalid query: ' . mysqli_error());
		}
		else
		{
			//Si no hay consulta con limit no hace nada
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Parque Escolar Prestadas</title>
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
					<?php
						if ($num_rows >= 1) { ?>
							<h2>Netbooks del parque escolar prestadas:</h2>
							<div class="tabla">
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
										<?php while($row = mysqli_fetch_assoc($consulta_limit)){?>
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
								echo "<p>Aún no se han prestado netbooks del parque escolar.</p>";
								echo "<a class='button button2' href='nets_disponibles.php'>Nets disponibles</a>";
								echo "<a class='button button2' href='nets_parque_escolar.php'>Nets Parque Escolar</a>";
						} ?>
						
					<?php
									include('../includes/paginacion.php');
								?>
			</div>
			<?php
				include('../includes/footer.php');
			?>
		</section>
	</body>
</html>
