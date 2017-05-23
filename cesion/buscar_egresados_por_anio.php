<?php

	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	include('../includes/estados.php');
	$id_colegio = $_SESSION['colegio'];


	if ($_GET['dni_apeynom'] == 0) {
		$anio = $_GET['anio'];
		#$query_egresados = "SELECT ID_EGRESADO,DNI,comodatarios.APEYNOM,comodatarios.ID_COLEGIO_FK,ANIO_EGRESO,CURSO,DIVISION,TURNO,ESTADO FROM comodatarios INNER JOIN egresados ON DNI = comodatarios.DNI_COM AND ID_COLEGIO_FK = $id_colegio";
		$query_egresados = "SELECT egresados.ID_EGRESADO,egresados.DNI,comodatarios.APEYNOM,comodatarios.ID_COLEGIO_FK,egresados.ANIO_EGRESO,egresados.CURSO,egresados.DIVISION,egresados.TURNO,egresados.ESTADO FROM comodatarios INNER JOIN egresados ON DNI = comodatarios.DNI_COM AND ID_COLEGIO_FK = $id_colegio";
	} else if (($_GET['dni_apeynom']) == 1) {
		if (!empty($_GET['dni'])) {
			$dni = $_GET['dni'];
			#$query_egresados = "SELECT ID_EGRESADO,DNI,comodatarios.APEYNOM,comodatarios.ID_COLEGIO_FK,ANIO_EGRESO,CURSO,DIVISION,TURNO,ESTADO FROM comodatarios INNER JOIN egresados ON DNI = $dni AND ID_COLEGIO_FK = $id_colegio";
			$query_egresados = "SELECT egresados.ID_EGRESADO,egresados.DNI,comodatarios.DNI_COM,comodatarios.APEYNOM,comodatarios.ID_COLEGIO_FK,egresados.ANIO_EGRESO,egresados.CURSO,egresados.DIVISION,egresados.TURNO,egresados.ESTADO FROM comodatarios INNER JOIN egresados ON DNI_COM = DNI WHERE DNI = $dni AND ID_COLEGIO_FK = $id_colegio";
		} elseif (!empty($_GET['apeynom'])){
			$apeynom = $_GET['apeynom'];
			#$query_egresados = "SELECT ID_EGRESADO,DNI,comodatarios.APEYNOM,comodatarios.ID_COLEGIO_FK,ANIO_EGRESO,CURSO,DIVISION,TURNO,ESTADO FROM comodatarios INNER JOIN egresados ON DNI = comodatarios.DNI_COM AND ID_COLEGIO_FK = $id_colegio AND APEYNOM LIKE '%$apeynom%'";
			$query_egresados = "SELECT egresados.ID_EGRESADO,egresados.DNI,comodatarios.APEYNOM,comodatarios.ID_COLEGIO_FK,egresados.ANIO_EGRESO,egresados.CURSO,egresados.DIVISION,egresados.TURNO,egresados.ESTADO FROM comodatarios INNER JOIN egresados ON DNI = comodatarios.DNI_COM AND ID_COLEGIO_FK = $id_colegio AND comodatarios.APEYNOM LIKE '%$apeynom%'";
		}
	}

	if (!isset($query_egresados)) { echo "<div class='insert_wrong'>Debe ingresar algún valor en los filtros.</div>";}/*Lo agregué yo (JP)*/
	
	if (isset($query_egresados)) {
		$resultado_egresados=$conexion->query($query_egresados) or die("Error " .mysqli_error($conexion));;
	if (mysqli_num_rows($resultado_egresados) > 0) {
		echo "<table>
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
		";
				 while($row=$resultado_egresados->fetch_object()){
					 $estado = estado_egresado($row->ESTADO);
						echo "<tr>
							<td> $row->DNI </td>
							<td> $row->APEYNOM </td>
							<td> $row->ANIO_EGRESO </td>
							<td> $row->CURSO </td>
							<td> $row->DIVISION </td>
							<td> $row->TURNO </td>
							<td> $estado </td>
							<td>
								<a class='button button2' href='modificar_estado.php?id=$row->ID_EGRESADO' >Modificar Estado</a>
								<a class='button button2' href='modificar_egresado.php?id=$row->ID_EGRESADO' >Modificar Egresado</a>
								<a class='button' style='padding:0.25em' href='cesion_.php?id=$row->ID_EGRESADO' >Generar Contrato de Cesión</a>
								<a class='button button3' href='baja_egresado.php?id_e=$row->ID_EGRESADO' >Baja Egresado</a>
							</td>
						<tr>";
			}
		echo "	</table>";


	} else {
		echo "<div class='insert_wrong'>El egresado no se encuentra con el dni o apellido y nombre ingresado.</div>";
	}
	}

 ?>
