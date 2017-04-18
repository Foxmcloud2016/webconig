<?php

include('../includes/inicio_sesion.php');
include('../mysql/conectar.php');

$id_maquina=$_POST['id_maquina'];
$id_colegio = $_SESSION['colegio'];
$estado = 'baja';


$query_parque_escolar = "UPDATE PARQUE_ESCOLAR SET ESTADO='$estado' WHERE ID_MAQUINA=$id_maquina AND ID_COLEGIO_FK=$id_colegio";

$resultado_parq_esco = $conexion->query($query_parque_escolar);

//header('Location: parque_escolar.php');

$arrayName = array('success' => 'exito', );
	$output = json_encode($arrayName);
	//$output = $json->encode($arrayName);
	echo $output;
	
?>