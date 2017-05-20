<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	$cuil = $_POST['cuil'];
	$dni = $_POST['dni'];
	$apellido = $_POST['apellido'];
	$nombre = $_POST['nombre'];
	$apeynom = "$apellido $nombre";
	$curso = $_POST['curso'];
	$division = $_POST['division'];
	$turno = $_POST['turno'];
	$tipo_comodatario = $_POST['tipo_comodatario'];

	if ($_POST['tipo_comodatario'] == 'alumno') {
		$dni_adulto = $_POST['dni_adulto'];
		$apellido_adulto = $_POST['apellido_adulto'];
		$nombre_adulto = $_POST['nombre_adulto'];
		$apeynom_adulto = "$apellido_adulto $nombre_adulto";
	}

	if ($cuil == '') {
		$cuil = '-----';
	}

	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$serie = $_POST['serie'];
	$serie = strtoupper($serie);

	$id_colegio = $_SESSION['colegio'];


	if ($tipo_comodatario == 'alumno') {

			$result = mysqli_query($conexion, "SELECT * FROM COMODATARIOS WHERE DNI_COM=$dni") or die("Error " .mysqli_error($conexion));
			$contador = mysqli_num_rows($result);

			if ($contador >= 1) {

				echo "El DNI ya existe";

			}elseif ($contador==0) {

				$query_alta_comodat = "INSERT INTO COMODATARIOS (CUIL, DNI_COM, TIPO_COM, APEYNOM, DNI_ADULTO, APEYNOM_A, SERIE, MARCA, MODELO, CURSO, DIVISION, TURNO, ID_COLEGIO_FK) VALUES ('$cuil',$dni, '$tipo_comodatario', '$apeynom', '$dni_adulto', '$apeynom_adulto', '$serie', '$marca', '$modelo', '$curso', '$division', '$turno', $id_colegio)";
				$resultado_alta_comodat = $conexion->query($query_alta_comodat);
			}


	}elseif ($tipo_comodatario == 'docente') {
		$result = mysqli_query($conexion, "SELECT * FROM COMODATARIOS WHERE DNI_COM=$dni") or die("Error " .mysqli_error($conexion));
		$contador = mysqli_num_rows($result);

			if ($contador >= 1) {

				echo "El DNI ya existe";

			}elseif ($contador==0) {

				$query_alta_comodat = "INSERT INTO COMODATARIOS (CUIL, DNI_COM, TIPO_COM, APEYNOM, DNI_ADULTO, APEYNOM_A, SERIE, MARCA, MODELO, ID_COLEGIO_FK) VALUES ('$cuil', '$dni', '$tipo_comodatario', '$apeynom', NULL, NULL, '$serie', '$marca', '$modelo', $id_colegio)";
				$resultado_alta_comodat = $conexion->query($query_alta_comodat);
			}


	}

	header("Location: listar_comodatarios.php");
?>
