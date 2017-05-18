<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	include('../includes/inicio_sesion.php');
    include('../mysql/conectar.php');

    /*Trae el DNI ingresado en el formulario de comodato de Alumno y el ID de escuela del inicio de sesion*/
    $dni_comodatario = $_POST['dni_comodatario'];
    $escuela_o = $_SESSION['colegio'];
	//Consulta los datos del comodatario en la BD en base al DNI ingresado anteriormente
	$query_dni="SELECT DNI_COM, APEYNOM, DNI_ADULTO, APEYNOM_A, MARCA, MODELO, SERIE from COMODATARIOS WHERE DNI_COM='".$dni_comodatario."'";

	$resultado_dni=$conexion->query($query_dni);
	//Guarda los datos de la BD e un array
	$result_array = mysqli_fetch_assoc($resultado_dni);

	/*Consulta a la BD los datos del colegio*/
	$query_colegio = "SELECT * FROM COLEGIOS WHERE ID_COLEGIO='".$escuela_o."'";

	$resultado_colegio = $conexion->query($query_colegio);

	$resul_array_col = mysqli_fetch_assoc($resultado_colegio);

	//Se guardan datos de la BD de la tabla comodatarios

	$adulto = $result_array['APEYNOM_A'];
	$dni_adulto = $result_array['DNI_ADULTO'];
	$alumno = $result_array['APEYNOM'];
	$marca = $result_array['MARCA'];
	$modelo = $result_array['MODELO'];
	$serie = $result_array['SERIE'];
	$serie = strtoupper($serie);

	//Se guardan datos de la BD de la tabla colegios
	
	$tipo_colegio = $resul_array_col['TIPO_COLEGIO'];
	$director_o = $resul_array_col['DIRECTOR'];
	$dni_dir_o = $resul_array_col['DNI'];
	$escuela_nombre_o = $resul_array_col['COLEGIO'];
	$distrito_o = $resul_array_col['DISTRITO'];
	$ciudad_o = $resul_array_col['CIUDAD'];
	$domicilio_o = $resul_array_col['DOMICILIO'];
	$cue = $resul_array_col['CUE'];


	//Se guardan datos del form

	$calle = $_POST['calle'];
	$numero = $_POST['numero'];
	$piso = $_POST['piso'];
	$depto = $_POST['depto'];
	$curso = $_POST['curso'];
	$division = $_POST['division'];
	$turno = $_POST['turno'];

	//Se guardan en variables datos de fecha actual

	$dias = strftime("%d");
	$mes = strftime("%B");
	$anio = strftime("%Y");

	include('../includes/mes.php');
	//include('escuela_origen.php');


	if (empty($piso)) {
		$piso = '-----';
	}

	if (empty($depto)) {
		$depto = '-----';
	}

	include('comodato_alumno_pdf.php');

?>
</body>
</html>
