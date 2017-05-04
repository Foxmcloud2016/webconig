<?php 
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	$id_egresado=$_POST['id_egresado'];

	$query_egresado = "DELETE FROM `egresados` WHERE ID_EGRESADO = $id_egresado";

	$resultado_egresados = $conexion->query($query_egresado);

	//header('Location: parque_escolar.php');

	$arrayName = array('success' => 'exito', );
	$output = json_encode($arrayName);
	//$output = $json->encode($arrayName);
	echo $output;

 ?>