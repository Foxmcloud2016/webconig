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

	//Consulta a BD de nets disponibles para prestar
	$consulta="SELECT ID_MAQUINA, SERIE, MARCA, MODELO, ESTADO,ESTADO_EQUIPO FROM PARQUE_ESCOLAR WHERE ESTADO='disponible' AND ID_COLEGIO_FK='$id_colegio'";
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
		<title>Parque Escolar Disponible</title>
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
								<?php while($row=$datos->fetch_assoc()){?>
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
						include('../includes/paginacion.php');
					?>	
			</div>
			<?php
				include('../includes/footer.php');
			?>
		</section>
	</body>
</html>