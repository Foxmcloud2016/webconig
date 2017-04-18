<?php

include('../includes/inicio_sesion.php');
include('../mysql/conectar.php');

$id_colegio = $_SESSION['colegio'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$serie = $_POST['serie'];
$estado = $_POST['estado'];
$estado_equipo = $_POST['estado_equipo'];

$query_parque_escolar = "INSERT INTO PARQUE_ESCOLAR (ID_MAQUINA, ID_COLEGIO_FK, SERIE, MARCA, MODELO, ESTADO, ESTADO_EQUIPO) VALUES (0, '$id_colegio', '$serie', '$marca', '$modelo', '$estado', '$estado_equipo')";

$resultado_parq_esco = $conexion->query($query_parque_escolar);

//header('Location: parque_escolar.php');

$arrayName = array('success' => 'exito', );
	$output = json_encode($arrayName);
	//$output = $json->encode($arrayName);
	echo $output;
	
?>