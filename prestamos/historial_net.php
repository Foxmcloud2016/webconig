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

	$marca = $_GET['marca'];
	$modelo = $_GET['modelo'];
	$serie = $_GET['serie'];



	//Consulta a BD de nets que alguna vez se prestaron y ya fueron devueltas (historial de prestamos)
	$consulta = "SELECT PRESTAMOS.ID_PRESTAMO, PRESTAMOS.DNI, PRESTAMOS.APEYNOM, PRESTAMOS.ID_MAQUINA_FK, PRESTAMOS.VIGENTE, PRESTAMOS.TIPO_COM_PRE, PRESTAMOS.ADEUDA_BATERIA, PRESTAMOS.ADEUDA_CARGADOR, PRESTAMOS.ADEUDA_ANTENA, PRESTAMOS.MOTIVO_PRESTAMO, PARQUE.SERIE, PARQUE.MARCA, PARQUE.MODELO, PARQUE.ESTADO_EQUIPO, PARQUE.ESTADO
						FROM parque_escolar AS PARQUE
						JOIN PRESTAMOS 
						ON PARQUE.ID_MAQUINA = PRESTAMOS.ID_MAQUINA_FK
						WHERE PARQUE.ID_COLEGIO_FK='$id_colegio'
						/*AND PRESTAMOS.VIGENTE=0*/
						AND PARQUE.SERIE='$serie'
						/*ORDER BY PARQUE.MARCA, PARQUE.MODELO, PARQUE.SERIE*/
						ORDER BY PRESTAMOS.ID_PRESTAMO";
	$datos=$conexion->query($consulta);
	$num_rows = mysqli_num_rows($datos);

	//ACA SE DECIDE CUANTOS RESULTADOS MOSTRAR POR PÁGINA , EN EL EJEMPLO PONGO 15
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
		<title>Historial de Prestamos</title>
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
							<div>
								<h2>Historial de prestamo de:</h2>
								<h4><?php echo "$marca $modelo $serie"; ?></h4>
								<?php echo "<p>Cantidad de veces prestada: ".($num_rows)."</p>";?>
								<table>
									<!--   Header de tablas con nombres de columnas  !-->
										<tr>
											<th>DNI</th>
											<th>Apellido y nombre</th>
											<th>Tipo Comodatario</th>
											<th>Adeuda cargador</th>
											<th>Adeuda bateria</th>
											<th>Adeuda antena</th>
											<th>Estado del equipo</th>
											<th>Prestada?</th>
										</tr>

										 <?php while($row = mysqli_fetch_assoc($consulta_limit))
          {  ?>
			              					<tr>
			              						<td><?php echo $row['DNI'];?> </td>	
												<td><?php echo $row['APEYNOM'];?> </td>
												<td><?php if ($row['TIPO_COM_PRE']==1) {
			              							echo 'Docente';
			              						}else{
			              							echo 'Alumno/a';
			              						}?></td>
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
			              						<td><?php echo $row['ESTADO_EQUIPO'];?> </td>
			              						<td><?php if ($row['VIGENTE']=='1') {
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
								//No hay nets prestadas
								echo "<p>La netbook <b>$marca $modelo $serie</b> no ha sido prestada en ninguna oportunidad.</p>";
								echo "<a class='button button2' href='nets_parque_escolar.php'>Volver al historial</a>";
						} ?>
						<?php

						include('paginacion.php');

								?>
			</div>
			<?php
				include('../includes/footer.php');
			?>
		</section>
	</body>
</html>