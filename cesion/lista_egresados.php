<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	include('../includes/estados.php');
	$id_colegio = $_SESSION['colegio'];
	#$queryanios="SELECT DNI,comodatarios.ID_COLEGIO_FK,ANIO_EGRESO FROM comodatarios INNER JOIN egresados WHERE DNI = comodatarios.DNI_COM AND ID_COLEGIO_FK = $id_colegio ";
	$queryanios="SELECT DNI,comodatarios.ID_COLEGIO_FK,ANIO_EGRESO FROM comodatarios INNER JOIN egresados WHERE DNI = comodatarios.DNI_COM AND ID_COLEGIO_FK = $id_colegio ";
	$queryegresados="SELECT egresados.ID_EGRESADO,egresados.DNI,comodatarios.APEYNOM,comodatarios.ID_COLEGIO_FK,egresados.ANIO_EGRESO,egresados.CURSO,egresados.DIVISION,egresados.TURNO,egresados.ESTADO FROM comodatarios INNER JOIN egresados WHERE DNI = comodatarios.DNI_COM AND ID_COLEGIO_FK = $id_colegio ";
	#$queryegresados="SELECT ID_EGRESADO,DNI,comodatarios.APEYNOM,comodatarios.ID_COLEGIO_FK,ANIO_EGRESO,CURSO,DIVISION,TURNO,ESTADO FROM comodatarios INNER JOIN egresados WHERE DNI = comodatarios.DNI_COM AND ID_COLEGIO_FK = $id_colegio ";
	$resultado_anios=$conexion->query($queryanios);
	$resultado_egresados=$conexion->query($queryegresados);
	$lista_anios = [];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Administrativo></title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
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
			<br>
			<form>
				<select id="anio">
					<option value="0">Seleccione un año</option>
					<?php while($row=$resultado_anios->fetch_assoc()){ ?>
							<!-- Si no esta en el array el anio entonces-->
							<?php if (! in_array($row['ANIO_EGRESO'],$lista_anios)):
								$anio = $row['ANIO_EGRESO'];
								echo "<option value='$anio'>$anio</option>";
								$lista_anios[] = $row['ANIO_EGRESO'];
							 endif ?>
					<?php } ?>
				</select>
				<div id="block-filtro">
						<label>Filtrar por DNI</label>
						<input id="dni" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
						<label>Filtrar por Apellido o nombres</label>
						<input id="apeynom" type="text">
						<button id='btnfiltrar' class='button' type="button">Buscar Egresado</button>
				</div>
			</form>

			<div id='datos' class="tabla">
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

	<script type="text/javascript">
			$('#anio').change(function(){
					$.get( "buscar_egresados_por_anio.php", { dni_apeynom: 0, anio : $('#anio').val(), } )
				  .done(function( data ) {
						$('#datos').hide();
				    document.getElementById("datos").innerHTML = data;
						$('#datos').slideDown();
				  });
			});

			$('#btnfiltrar').click(function(){
				$.get( "buscar_egresados_por_anio.php", { dni_apeynom: 1, dni : $('#dni').val(), apeynom: $('#apeynom').val() } )
				.done(function( data ) {
					$('#datos').hide();
					document.getElementById("datos").innerHTML = data;
					$('#datos').slideDown();
				});
			});

	</script>
</html>
