<?php
	
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	#Variables del formulario
	$tipo_colegio = $_POST['tipo_colegio'];
	$id_colegio = intval($_POST['id_colegio']); # Id del colegio a modificar
	$direnuevo = $_POST['directora']; # Datos a modificar
	$dninuevo = $_POST['dni'];
	$colenuevo = $_POST['colegio'];
	$dominuevo = $_POST['domicilio'];
	$ciudadnueva = $_POST['ciudad'];
	$distrito = $_POST['distrito'];
	
	#Conexion con la bd
	
	#Actualizamos en la BD
	
	$querymodi="UPDATE COLEGIOS SET DIRECTOR = '$direnuevo' , DNI = '$dninuevo', COLEGIO = '$colenuevo', DOMICILIO = '$dominuevo', CIUDAD = '$ciudadnueva', TIPO_COLEGIO = '$tipo_colegio', DISTRITO = '$distrito' WHERE ID_COLEGIO = '$id_colegio' " ;
	$Resultado = $conexion->query($querymodi);
	
	#Cerramos la conexion
	mysqli_close($conexion);
	header("Location: colegios_list.php");	
?>
