<?php
	
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	#Variables del formulario
	$id_maquina = intval($_POST['id_maquina']); 
	$tipo_comodatario = $_POST['comodatario']; # Datos a modificar
	$dninuevo = $_POST['dni'];
	$apeynomnuevo = $_POST['apeynom'];
	$cargador = $_POST['cargador'];
	
	#Conexion con la bd
	
	#Actualizamos en la BD
	
	$querymodi="UPDATE PRESTAMOS SET TIPO_COM_PRE = '$tipo_comodatario' , DNI = '$dninuevo', APEYNOM = '$apeynomnuevo', CARGADOR = '$cargador' WHERE ID_MAQUINA_FK = '$id_maquina' AND VIGENTE=1 " ;
	$Resultado = $conexion->query($querymodi);
	
	#Cerramos la conexion
	mysqli_close($conexion);
	header("Location: nets_prestadas.php");	
?>
