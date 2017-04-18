<?php
	include('../mysql/conectar.php');
	include('../includes/inicio_sesion.php');

	//Insert Comodatario 

	$dni = $_POST['dni'];
	$apellido = $_POST['apellido'];
	$nombre = $_POST['nombre'];
	$apeynom = "$apellido $nombre";
	$tipo_comodatario = $_POST['tipo_comodatario'];

	if ($_POST['tipo_comodatario'] == 'alumno') {
		$dni_adulto = $_POST['dni_adulto'];
		$apellido_adulto = $_POST['apellido_adulto'];
		$nombre_adulto = $_POST['nombre_adulto'];
		$apeynom_adulto = "$apellido_adulto $nombre_adulto";
	}

	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$serie = $_POST['serie'];
	$serie = strtoupper($serie);

	$id_colegio = intval($_SESSION['colegio']);


	if ($tipo_comodatario == 'alumno') {

			$result = mysqli_query($conexion, "SELECT * FROM COMODATARIOS WHERE DNI_COM=$dni") or die("Error " .mysqli_error($conexion));
			$contador = mysqli_num_rows($result);

			if ($contador >= 1) {

				echo "el DNI ya existe";

			}elseif ($contador==0) {

				$query_alta_comodat = "INSERT INTO COMODATARIOS (DNI_COM, TIPO_COM, APEYNOM, DNI_ADULTO, APEYNOM_A, SERIE, MARCA, MODELO, ID_COLEGIO_FK) VALUES ('$dni', '$tipo_comodatario', '$apeynom', '$dni_adulto', '$apeynom_adulto', '$serie', '$marca', '$modelo', '$id_colegio');";
				$resultado_alta_comodat = $conexion->query($query_alta_comodat);
			}


	}elseif ($tipo_comodatario == 'docente') {
		$result = mysqli_query($conexion, "SELECT * FROM COMODATARIOS WHERE DNI_COM=$dni") or die("Error " .mysqli_error($conexion));
		$contador = mysqli_num_rows($result);

			if ($contador >= 1) {

				echo "el DNI ya existe";

			}elseif ($contador==0) {

				$query_alta_comodat = "INSERT INTO COMODATARIOS (DNI_COM, TIPO_COM, APEYNOM, DNI_ADULTO, APEYNOM_A, SERIE, MARCA, MODELO, ID_COLEGIO_FK) VALUES ('$dni', '$tipo_comodatario', '$apeynom', NULL, NULL, '$serie', '$marca', '$modelo', '$id_colegio');";
				$resultado_alta_comodat = $conexion->query($query_alta_comodat);
			}


	}

	//Insert  Migracion Entrante

	$id_colegio_o = intval($_POST['colegio_d']);
	$id_colegio_d = $id_colegio;
	
	$resultselect = mysqli_query($conexion, "SELECT * FROM COMODATARIOS WHERE DNI_COM = $dni") or die("Error " .mysqli_error($conexion));
	$row = $resultselect->fetch_object();
	$id_com = $row->ID_COMODATARIO;
	#$id_colegio_o = 1;
	#$id_colegio_d = 2;
	#$dni = 123456789;
	#echo $id_usuario;
	#$id_com = 1;
	$fecha = strftime("%Y").'-'.strftime("%m").'-'.strftime("%d");
	$id_usuario = $_SESSION['id']['ID_USUARIO'];
#Insercion en tabla Migraciones

	$queryinsert = "INSERT INTO `migraciones`(`ID_MIGRACION`, `ID_COMODATARIO_FK`, `ID_COLEGIO_O`, `ID_COLEGIO_D`, `ESTADO`, `FECHA`) VALUES (NULL,$id_com,$id_colegio_o,$id_colegio_d,3,'$fecha')";
	$resultadoinsert = $conexion->query($queryinsert);

include('../includes/movimientos.php');
cargarMov($id_usuario,"Alta de Migracion",$id_com);

$data = '<span>La migracion se cargo en la BBDD. Para seguir administrando migraciones haga click en "Administrar mas migraciones".</span>
</br>
</br>
<a class="button button2" href="listar_migraciones.php">Administrar mas migraciones</a>';

$arrayName = array('success' => 'exito', 'data' => $data);
//$output = $json->encode($arrayName);
$output = json_encode($arrayName);
echo $output;
 ?>
