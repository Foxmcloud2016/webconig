<?php
	
	
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	$id_colegio = $_SESSION['colegio'];
	$dni_nombre = $_POST['dni'];
	$apeynom = $_POST['apeynom'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$serie = $_POST['serie'];
	$id_prestamo = $_POST['id_prestamo'];
	$id_maquina = $_POST['id_maquina'];
	$estado_equipo = $_POST['estado_equipo'];
	$prestamo_vigente = $_POST['prestamo_vigente'];
	$adeuda_bateria = $_POST['adeuda_bateria'];
	$adeuda_cargador = $_POST['adeuda_cargador'];
	$adeuda_antena = $_POST['adeuda_antena'];

	$comodatario = $_POST['comodatario'];



	$query_parque_escolar="UPDATE PARQUE_ESCOLAR SET ESTADO = 'disponible', ESTADO_EQUIPO = '$estado_equipo' WHERE ID_MAQUINA = '$id_maquina'";
	$resultado_parque_escolar=$conexion->query($query_parque_escolar);

	$query_prestamo = "UPDATE PRESTAMOS SET VIGENTE = '$prestamo_vigente', ADEUDA_BATERIA = '$adeuda_bateria', ADEUDA_CARGADOR = '$adeuda_cargador', ADEUDA_ANTENA = '$adeuda_antena' WHERE ID_MAQUINA_FK = '$id_maquina' AND ID_PRESTAMO = '$id_prestamo'";
	$result_prestamo = $conexion->query($query_prestamo);

	$arrayName = array('success' => 'exito', );
	$output = json_encode($arrayName);
	echo $output;
?>