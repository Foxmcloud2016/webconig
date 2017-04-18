<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$escuela_o = $_POST['escuela_o'];
	$comodatario = $_POST['comodatario'];
	if ($comodatario=='alumno') {
		$comodatario = 'alumno/a';
	}else{
		$comodatario = $comodatario;
	}
	$nombre = $_POST['nombre'];
	$dni_nombre = $_POST['dni_nombre'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$serie = $_POST['serie'];
	$cargador = $_POST['cargador'];
	if ($cargador=='si') {
		$cargador = ', con su respectivo cargador,';
	}elseif ($cargador=='no') {
		$cargador = ',';
	}
	$serie = strtoupper($serie);
	$dias = strftime("%d");
	$mes = strftime("%B");
	$anio = strftime("%Y");

	include('mes.php');
	include('escuela_origen.php');
	
	include('prestamo_pdf.php');	
	
?>
</body>
</html>