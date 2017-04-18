<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$escuela_o = $_POST['escuela_o'];
	$pmt = $_POST['pmt'];
	$adulto = $_POST['adulto'];
	$dni_adulto = $_POST['dni_adulto'];
	$alumno = $_POST['alumno'];
	$dni_alumno = $_POST['dni_alumno'];
	$curso = $_POST['curso'];
	$division = $_POST['division'];
	$turno = $_POST['turno'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$serie = $_POST['serie'];
	$serie = strtoupper($serie);
	$dias = strftime("%d");
	$mes = strftime("%B");
	$anio = strftime("%Y");
	
	$teclado = $_POST['teclado'];
	$motherboard = $_POST['motherboard'];
	$pantalla = $_POST['pantalla'];
	$tpm = $_POST['tpm'];
	$disco = $_POST['disco'];
	if (isset($disco)) {
		$disco = 'disco rígido';
	}
	$wifi = $_POST['wifi'];
	$varias = $_POST['varias'];


	include('mes.php');
	include('escuela_origen.php');
	

	include('acta_st_pdf.php');	
	
?>
</body>
</html>