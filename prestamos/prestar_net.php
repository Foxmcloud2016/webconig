<?php
	
	
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');


	

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



	$dni = $_POST['dni'];
	$apellido = $_POST['apellido'];
	$nombre = $_POST['nombre'];
	$apeynom = "$apellido $nombre";
	$comodatario = $_POST['comodatario'];
	$cargador = $_POST['cargador'];
	$id_maquina = $_POST['id_maquina'];
	$id_colegio = $_SESSION['colegio'];
	$prestamo_vigente = $_POST['prestamo_vigente'];
	/*
	if (isset($_POST['motivo1'])) {
		$motivo = $_POST['motivo1'];	
	}
	*/
	/*
	if (isset($_POST['motivo1'])) {
			$motivo = $_POST['motivo1'];
	}
	if ($motivo == 1) {
		$motivo = "net_st";
	}

	if (isset($_POST['motivo2'])) {
		$motivo = $_POST['motivo2'];	
	}
	if (isset($_POST['motivo3'])) {
		$motivo = $_POST['motivo3'];	
	}
	if (isset($_POST['motivo4'])) {
		$motivo = $_POST['motivo4'];	
	}
	*/
	/*
	if (isset($_POST['otro'])) {
		$motivo = trim($_POST['otro']);	
	}
*/
	if (empty($_POST["motivo"])) {
    $error = "motivo is required";
  } else {
    $motivo = test_input($_POST["motivo"]);

    if ($motivo == 1) {
				$motivo = "net_st";
			}
			if ($motivo == 2) {
				$motivo = "cue_ext_jur";
			}
			if ($motivo == 3) {
				$motivo = "otro_cue";
			}
			if ($motivo == 4) {
				$motivo = "fuera_cierre";
			}
			if ($motivo == 5) {
				$motivo = test_input($_POST["otro"]);
			}
  }

	
			



	//$motivo = $_POST['motivo'];


/*
	if ($motivo == 5) {
		$motivo = $_POST['area_oculta'];
	}
*/
	//Revisar insert into que no esta funcionando

	$query_prestamos="INSERT INTO PRESTAMOS (ID_PRESTAMO, DNI, APEYNOM, ID_MAQUINA_FK, CARGADOR, VIGENTE, TIPO_COM_PRE, MOTIVO_PRESTAMO) VALUES (0, $dni, '$apeynom', $id_maquina, $cargador, $prestamo_vigente, $comodatario, '$motivo')";
	$resultado_prestamos=$conexion->query($query_prestamos);
/*
	if ($conexion->query($query_prestamos) === TRUE) {
    echo "Hizo el insert bien";
} else {
    echo "Error: " . $query_prestamos . "<br>" . $conexion->error;
}
*/

	$query_parque_escolar="UPDATE PARQUE_ESCOLAR SET ESTADO = 'prestada' WHERE ID_MAQUINA = '$id_maquina'";
	$resultado_parque_escolar=$conexion->query($query_parque_escolar);

	$arrayName = array('success' => 'exito', );
	$output = json_encode($arrayName);
	//$output = $json->encode($arrayName);
	echo $output;
?>