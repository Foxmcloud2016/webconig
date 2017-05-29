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
    $id_com = $_POST['id_com'];


	//Consulta los datos del comodatario en la BD en base al DNI ingresado anteriormente
	$query_dni="SELECT DNI_COM, TIPO_COM, APEYNOM, DNI_ADULTO, APEYNOM_A, MARCA, MODELO, SERIE from COMODATARIOS WHERE ID_COMODATARIO='".$id_com."'";

	$resultado_dni=$conexion->query($query_dni);
	//Guarda los datos de la BD e un array
	$result_array = mysqli_fetch_assoc($resultado_dni);

	
	// COnsulta datos del colegio en la BBDD
	$query_colegio = "SELECT * FROM COLEGIOS WHERE ID_COLEGIO='".$escuela_o."'";

	$resultado_colegio = $conexion->query($query_colegio);

	$resul_array_col = mysqli_fetch_assoc($resultado_colegio);

	$comodatario = $result_array['TIPO_COM'];
	if ($comodatario=='alumno') {
		$comodatario = 'alumno/a';
	}else{
		$comodatario = $comodatario;
	}
	$escuela_nombre_o = $resul_array_col['COLEGIO'];
	$ciudad_o = $resul_array_col['CIUDAD'];
	$apeynom = $result_array['APEYNOM'];
	$dni_nombre = $result_array['DNI_COM'];
	$marca = $result_array['MARCA'];
	$modelo = $result_array['MODELO'];
	$serie = $result_array['SERIE'];
	$serie = strtoupper($serie);
	$dias = strftime("%d");
	$mes = strftime("%B");
	$anio = strftime("%Y");
	$adeuda_bateria = $_POST['adeuda_bateria'];
	$adeuda_cargador = $_POST['adeuda_cargador'];
	$adeuda_antena = $_POST['adeuda_antena'];
	$motivo = $_POST['motivo'];
	$otro_motivo = $_POST['otro'];

	include('../includes/mes.php');

/*En el siguiente condicional van los modelos de net que no tienen antena TDA*/
	if ($modelo=='E10IS' || $modelo=='E11IS2' || $modelo=='Schoolmate11' || $modelo=='X352' || $modelo=='X355' || $modelo=='Schoolmate') {
		$adeuda_antena = 'antena';

		if (empty($adeuda_bateria) && empty($adeuda_cargador)) {

			$adeuda_bateria = 'bateria';
			$adeuda_cargador = 'cargador';

			$componentes = ', con todos sus componentes, a saber: batería y cargador, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.';

	}elseif ($adeuda_bateria=='adeuda_bateria' || $adeuda_cargador=='adeuda_cargador') {

		if ($adeuda_bateria=='adeuda_bateria' && empty($adeuda_cargador)) {
			$componentes = ", con su cargador correspondiente. Se aclara que el $comodatario adeuda la batería, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
		}

	elseif ($adeuda_cargador=='adeuda_cargador' && empty($adeuda_bateria)) {
		$componentes = ", con su batería correspondiente. Se aclara que el $comodatario adeuda el cargador, el cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_cargador=='adeuda_cargador' && $adeuda_bateria=='adeuda_bateria') {
		$componentes = ". Se aclara que el $comodatario adeuda la batería y el cargador, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
}
}

/*En el siguiente condicional van las nets que vienen con antena TDA*/
}elseif ($modelo=='NP100NZC' || $modelo=='100NZC' || $modelo=='C5' || $modelo=='NT1015E' || $modelo=='CXEdu') {
	if (empty($adeuda_bateria) && empty($adeuda_cargador) && empty($adeuda_antena)){
		$componentes = ', con todos sus componentes, a saber: batería, cargador y antena TDA, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.';
	}elseif ($adeuda_bateria=='adeuda_bateria' && empty($adeuda_cargador) && empty($adeuda_antena)) {
		$componentes = ", con su cargador y antena TDA correspondientes. Se aclara que el $comodatario adeuda la batería, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif (empty($adeuda_bateria) && $adeuda_cargador=='adeuda_cargador' && empty($adeuda_antena)) {
		$componentes = ", con su batería y antena TDA correspondientes. Se aclara que el $comodatario adeuda el cargador, el cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif (empty($adeuda_bateria) && empty($adeuda_cargador) && $adeuda_antena=='adeuda_antena') {
		$componentes = ", con su batería y cargador correspondientes. Se aclara que el $comodatario adeuda la antena TDA, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria=='adeuda_bateria' && $adeuda_cargador=='adeuda_cargador' && $adeuda_antena=='adeuda_antena') {
		$componentes = ". Se aclara que el $comodatario adeuda batería, cargador y antena TDA, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria=='adeuda_bateria' && $adeuda_cargador=='adeuda_cargador' && empty($adeuda_antena)) {
		$componentes = ", con su antena TDA correspondiente. Se aclara que el $comodatario adeuda batería y cargador, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria=='adeuda_bateria' && empty($adeuda_cargador) && $adeuda_antena=='adeuda_antena') {
		$componentes = ", con su cargador correspondiente. Se aclara que el $comodatario adeuda batería y antena TDA, las cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif (empty($adeuda_bateria) && $adeuda_cargador=='adeuda_cargador' && $adeuda_antena=='adeuda_antena') {
		$componentes = ", con su batería correspondiente. Se aclara que el $comodatario adeuda cargador y antena TDA, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}
}else{//Si el modelo de la net cargado en la BBDD no coincide con los anteriormente citados
	if (empty($adeuda_bateria) && empty($adeuda_cargador) && empty($adeuda_antena)){
		$componentes = ', con todos sus componentes, a saber: batería, cargador y antena TDA (si corresponde por modelo de netbook), la cual forma parte del Programa Nacional de Educación Conectar Igualdad.';
	}elseif ($adeuda_bateria=='adeuda_bateria' && empty($adeuda_cargador) && empty($adeuda_antena)) {
		$componentes = ", con su cargador y antena TDA correspondientes (si corresponde por modelo de netbook). Se aclara que el $comodatario adeuda la batería, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif (empty($adeuda_bateria) && $adeuda_cargador=='adeuda_cargador' && empty($adeuda_antena)) {
		$componentes = ", con su batería y antena TDA correspondientes (si corresponde por modelo de netbook). Se aclara que el $comodatario adeuda el cargador, el cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif (empty($adeuda_bateria) && empty($adeuda_cargador) && $adeuda_antena=='adeuda_antena') {
		$componentes = ", con su batería y cargador correspondientes. Se aclara que el $comodatario adeuda la antena TDA, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria=='adeuda_bateria' && $adeuda_cargador=='adeuda_cargador' && $adeuda_antena=='adeuda_antena') {
		$componentes = ". Se aclara que el $comodatario adeuda batería, cargador y antena TDA, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria=='adeuda_bateria' && $adeuda_cargador=='adeuda_cargador' && empty($adeuda_antena)) {
		$componentes = ", con su antena TDA correspondiente (si corresponde por modelo de netbook). Se aclara que el $comodatario adeuda batería y cargador, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria=='adeuda_bateria' && empty($adeuda_cargador) && $adeuda_antena=='adeuda_antena') {
		$componentes = ", con su cargador correspondiente. Se aclara que el $comodatario adeuda batería y antena TDA, las cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif (empty($adeuda_bateria) && $adeuda_cargador=='adeuda_cargador' && $adeuda_antena=='adeuda_antena') {
		$componentes = ", con su batería correspondiente. Se aclara que el $comodatario adeuda cargador y antena TDA, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
}
}

	include('devolucion_comodato_pdf.php');

?>
</body>
</html>
