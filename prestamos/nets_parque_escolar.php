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

	//Consulta a la BBDD de todas las nets del parque escolar
	$consulta = "SELECT ID_MAQUINA, (SELECT DISTINCT SERIE) as SERIE, MARCA, MODELO, ESTADO, ESTADO_EQUIPO FROM PARQUE_ESCOLAR WHERE ID_COLEGIO_FK='$id_colegio'";
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
		<title>Netbooks del parque escolar</title>
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
							<div class="tabla">
								<h2>Netbooks del parque escolar:</h2>
								<?php echo "<p>Cantidad de equipos del parque escolar: ".($num_rows)."</p>";?>
								<table>
									<!--   Header de tablas con nombres de columnas  !-->
										<tr>
											<th>Marca</th>
											<th>Modelo</th>
											<th>Serie</th>
											<th>Estado del equipo</th>
											<th>Historial</th>
										</tr>
										<!--   Bucle while para completar tabla con todos los registros de colegios   !-->
										<!--?php while($row=$resultado->fetch_assoc()){?-->
										 <?php while($row = mysqli_fetch_assoc($consulta_limit))
          {  ?>
			              					<tr>
			              						<td><?php echo $row['MARCA'];?> </td>	
												<td><?php echo $row['MODELO'];?> </td>
												<td><?php echo $row['SERIE'];?> </td>
			              						<td><?php echo $row['ESTADO_EQUIPO'];?> </td>
			              						<td><?php echo "<a class='button button2' href="."historial_net.php?marca=".$row['MARCA']."&modelo=".$row['MODELO']."&serie=".$row['SERIE'].">Ver historial</a>";?></td>
			              				<?php } ?>

			              				<!--   Fin de bucle while  !-->
								</table>
								
							</div>
					<?php }else{
								//No hay nets prestadas, entonces no muestra nada
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