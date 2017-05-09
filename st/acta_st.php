<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
</head>
<body>
<?php
	include('../mysql/conectar.php');
	$id_colegio = $_POST['id_colegio'];
	$id_comodatario = $_POST['id_com'];

	$queryescuelas="SELECT ID_COLEGIO,COLEGIO, CIUDAD from COLEGIOS WHERE ID_COLEGIO = $id_colegio";
	$resultadoescuelas=$conexion->query($queryescuelas);
	$row=$resultadoescuelas->fetch_assoc();		


	$alumno="SELECT DNI_COM, APEYNOM, DNI_ADULTO, APEYNOM_A, SERIE, MARCA, MODELO from COMODATARIOS WHERE ID_COMODATARIO = $id_comodatario";
	$resul_alumno=$conexion->query($alumno);
	$fila=$resul_alumno->fetch_assoc();	
			             

	$escuela_o = $row['COLEGIO'];
	$ciudad_o = $row['CIUDAD'];
	$retira = $_POST['retira'];
	$adulto = $fila['APEYNOM_A'];
	$dni_adulto = $fila['DNI_ADULTO'];
	$alumno = $fila['APEYNOM'];
	$dni_alumno = $fila['DNI_COM'];
	$curso = $_POST['curso'];
	$division = $_POST['division'];
	$turno = $_POST['turno'];
	$marca = $fila['MARCA'];
	$modelo = $fila['MODELO'];
	$serie = $fila['SERIE'];
	$serie = strtoupper($serie);
	$dias = strftime("%d");
	$mes = strftime("%B");
	$anio = strftime("%Y");
	
	$teclado = $_POST['teclado'];

	if (isset($_POST['motherboard'])) {
		$motherboard = $_POST['motherboard'];
	}
	
	if (isset($_POST['pantalla'])) {
		$pantalla = $_POST['pantalla'];
	}

	if (isset($_POST['tpm'])) {
		$tpm = $_POST['tpm'];
	}
	
	
	if (isset($_POST['disco'])) {
		$disco = $_POST['disco'];
		$disco = 'disco rigido';
	}

	if (isset($_POST['wifi'])) {
		$wifi = $_POST['wifi'];
	}

	if (isset($_POST['varias'])) {
		$varias = $_POST['varias'];
	}
	
	

	include('../includes/mes.php');
	

	include('acta_st_pdf.php');	
	
?>
</body>
</html>