<?php
	
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	#Variables del formulario
	$id_colegio = intval($_POST['id_colegio']); # Id del colegio a modificar
	$direnuevo = $_POST['directora']; # Datos a modificar
	$dninuevo = $_POST['dni'];
	$colenuevo = $_POST['colegio'];
	$dominuevo = $_POST['domicilio'];
	$ciudadnueva = $_POST['ciudad'];
	
	#Conexion con la bd
	
	#Actualizamos en la BD
	
	$querymodi="UPDATE COLEGIOS SET DIRECTOR = '$direnuevo' , DNI = '$dninuevo', COLEGIO = '$colenuevo', DOMICILIO = '$dominuevo', CIUDAD = '$ciudadnueva' WHERE ID_COLEGIO = '$id_colegio' " ;
	$Resultado = $conexion->query($querymodi);
	
	#Cerramos la conexion
	mysqli_close($conexion);
	header("Location: colegios_list.php");	
?>
