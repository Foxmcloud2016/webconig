<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$id_com = intval($_POST['id_com']);
	$querycomodatario="SELECT * FROM COMODATARIOS INNER JOIN COLEGIOS WHERE ID_COMODATARIO= '".$id_com."'";
	$resultado= $conexion->query($querycomodatario);
	$datos = $resultado->fetch_object();

	$director_o = $datos->DIRECTOR;
	$dni_dir_o = $datos->DNI;
	$escuela_nombre_o = $datos->COLEGIO;
	$distrito_o = $datos->DISTRITO;
	$ciudad_o = $datos->CIUDAD;
	$domicilio_o = $datos->DOMICILIO;
	$mayor = $_POST['mayor'];
	$alumno = $datos->APEYNOM;
	$dni_alumno = $datos->DNI_COM;
	$calle = $_POST['calle'];
	$numero = $_POST['numero'];
	$piso = $_POST['piso'];
	$depto = $_POST['depto'];
	$curso = $_POST['curso'];
	$division = $_POST['division'];
	$turno = $_POST['turno'];
	$marca = $datos->MARCA;
	$modelo = $datos->MODELO;
	$serie = strtoupper($datos->SERIE);
	$dias = strftime("%d");
	$mes = strftime("%B");
	$anio = strftime("%Y");
	$adulto = $datos->APEYNOM_A;
	$dni_adulto = $datos->DNI_ADULTO;
	include('../includes/mes.php');
	#include('escuela_origen.php');


	if (empty($piso)) {
		$piso = '-----';
	}

	if (empty($depto)) {
		$depto = '-----';
	}

	if ($mayor=='si') {
		$responsable = $alumno;
		$dni_responsable = $dni_alumno;
		$alumno = '-----';
		$dni_alumno = '-----';
		$curso_mayor = '-----';
		$division_mayor = '-----';
	}elseif ($mayor=='no') {
		$mismo = $_POST['mismo'];
		if ($mismo=='si') {
			$responsable = $adulto;
			$dni_responsable = $dni_adulto;
			$curso_mayor = $curso;
			$division_mayor = $division;
		} else {
			$responsable = $_POST['apeynom_adulto'];
			$dni_responsable = $_POST['dni_adulto'];
			$motivo = $_POST['motivo'];
			$curso_mayor = $curso;
			$division_mayor = $division;
		}

	}

	include('cesion_pdf.php');

	?>
</body>
</html>
