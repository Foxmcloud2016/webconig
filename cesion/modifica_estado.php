<?php 
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	#Variables del formulario
	$id_egresado = intval($_POST['id_egresado']); # Id del colegio a modificar
	$estado = intval($_POST['estado']); # Datos a modificar
	#Conexion con la bd
	
	#Actualizamos en la BD
	
	$querymodi="UPDATE egresados SET ESTADO = '$estado' WHERE ID_EGRESADO = '$id_egresado' " ;
	$Resultado = $conexion->query($querymodi) or die(mysqli_error($conexion));
	
	#Cerramos la conexion
	mysqli_close($conexion);
	header("Location: lista_egresados.php");	
 ?>