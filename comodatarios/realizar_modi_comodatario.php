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
	$curso = $_POST['curso'];
	$division = $_POST['division'];
	$turno = $_POST['turno'];
	$tipo_com = $_POST['tipo_com'];

	#Actualizamos en la BD
	/*
	$querymodi="UPDATE COLEGIOS SET DIRECTOR = '$direnuevo' , DNI = '$dninuevo', COLEGIO = '$colenuevo', DOMICILIO = '$dominuevo', CIUDAD = '$ciudadnueva' WHERE ID_COLEGIO = '$id_colegio' " ;
	$Resultado = $conexion->query($querymodi);
	*/
	$querymodi="UPDATE COMODATARIOS SET TIPO_COM = '$tipo_com', CUIL = '$cuil', DNI_COM = '$dni' , APEYNOM = '$apeynom', DNI_ADULTO = '$dni_adulto', APEYNMOM_A = '$apeynom_a', MARCA = '$marca', MODELO = '$modelo', SERIE = '$serie', CURSO = '$curso', DIVISION = '$division', TURNO = '$turno' WHERE ID_COMODATARIO = '$id_comodatario' " ;
	//$Resultado = $conexion->query($querymodi);
	//$result = mysqli_query($conexion, $querymodi) or die("Error " .mysqli_error($conexion));
	$result = mysqli_query($conexion, "UPDATE COMODATARIOS SET TIPO_COM = '$tipo_com', CUIL = '$cuil' ,DNI_COM = '$dni' , APEYNOM = '$apeynom', DNI_ADULTO = '$dni_adulto', APEYNOM_A = '$apeynom_a', MARCA = '$marca', MODELO = '$modelo', SERIE = '$serie', CURSO = '$curso', DIVISION = '$division', TURNO = '$turno' WHERE ID_COMODATARIO = '$id_comodatario' ") or die("Error " .mysqli_error($conexion));
	#Cerramos la conexion
	mysqli_close($conexion);
	header("Location: comodatarios_todos.php");

?>
