<?php

	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	#Variables del formulario
	/*
	$id_colegio = intval($_POST['id_colegio']); # Id del colegio a modificar
	$direnuevo = $_POST['directora']; # Datos a modificar
	$dninuevo = $_POST['dni'];
	$colenuevo = $_POST['colegio'];
	$dominuevo = $_POST['domicilio'];
	$ciudadnueva = $_POST['ciudad'];
	*/
	$id_comodatario = $_POST['id_comodatario'];
	$dni = $_POST['dni'];
	$cuil = $_POST['cuil'];
	$apeynom = $_POST['apeynom'];
	$dni_adulto = $_POST['dni_adulto'];
	$apeynom_a = $_POST['apeynom_a'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$serie = $_POST['serie'];
	#Conexion con la bd

	#Actualizamos en la BD
	/*
	$querymodi="UPDATE COLEGIOS SET DIRECTOR = '$direnuevo' , DNI = '$dninuevo', COLEGIO = '$colenuevo', DOMICILIO = '$dominuevo', CIUDAD = '$ciudadnueva' WHERE ID_COLEGIO = '$id_colegio' " ;
	$Resultado = $conexion->query($querymodi);
	*/
	$querymodi="UPDATE COMODATARIOS SET CUIL = '$cuil', DNI_COM = '$dni' , APEYNOM = '$apeynom', DNI_ADULTO = '$dni_adulto', APEYNMOM_A = '$apeynom_a', MARCA = '$marca', SERIE = '$serie' WHERE ID_COMODATARIO = '$id_comodatario' " ;
	//$Resultado = $conexion->query($querymodi);
	$result = mysqli_query($conexion, "UPDATE COMODATARIOS SET CUIL = '$cuil' ,DNI_COM = '$dni' , APEYNOM = '$apeynom', DNI_ADULTO = '$dni_adulto', APEYNOM_A = '$apeynom_a', MARCA = '$marca', SERIE = '$serie' WHERE ID_COMODATARIO = '$id_comodatario' ") or die("Error " .mysqli_error($conexion));
	#Cerramos la conexion
	mysqli_close($conexion);
	header("Location: listar_comodatarios.php");

?>
