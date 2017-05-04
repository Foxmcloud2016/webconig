<?php 
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	#Variables del formulario
	$id_egresado = intval($_POST['id_egresado']); # Id del colegio a modificar
	$dni = intval($_POST['dni']);
	$anio = $_POST['anio'];
	$curso = $_POST['curso'];
	$division = $_POST['division'];
	$turno = $_POST['turno'];
	#Conexion con la bd
	
	#Actualizamos en la BD
	$querymodi= "UPDATE `egresados` SET `DNI`=$dni,`ANIO_EGRESO`=$anio,`CURSO`='$curso',`DIVISION`='$division',`TURNO`='$turno' WHERE ID_EGRESADO = '$id_egresado'";
	#$querymodi="UPDATE egresados SET 'DNI' = $dni,'ANIO_EGRESO' = $anio,'CURSO' = '$curso','DIVISION' = '$division','TURNO' = '$turno' WHERE ID_EGRESADO = '$id_egresado' ";
	$Resultado = $conexion->query($querymodi) or die(mysqli_error($conexion));
	
	#Cerramos la conexion
	mysqli_close($conexion);
	header("Location: lista_egresados.php");	
 ?>