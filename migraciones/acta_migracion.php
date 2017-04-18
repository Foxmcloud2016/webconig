<!DOCTYPE html>
<html>
	<title></title>
	<head>
</head>
<body>
	<?php
	include('../mysql/conectar.php');
	include('../includes/inicio_sesion.php');
	$id_colegio_d = $_GET['id_d'];
	$id_com = $_GET['id_com'];
	$id_usuario = $_SESSION['id']['ID_USUARIO'];


	$query="SELECT * FROM COMODATARIOS INNER JOIN COLEGIOS ON COMODATARIOS.ID_COLEGIO_FK = COLEGIOS.ID_COLEGIO WHERE COMODATARIOS.ID_COMODATARIO ='".$id_com."'";
	$resultadoalumno=$conexion->query($query);
	$row = $resultadoalumno->fetch_assoc();

	# Datos Comodatario
	$alumno = $row['APEYNOM'];
	$dni_alumno = $row['DNI_COM'];
	$marca = $row['MARCA'];
	$modelo = $row['MODELO'];
	$serie = $row['SERIE'];
	$serie = strtoupper($serie);
	$id_com = $row['ID_COMODATARIO'];
	# Datos colegio	Origen
	$id_colegio_o = $row['ID_COLEGIO'];
	$director_o = $row['DIRECTOR'];
	$dni_dir_o = $row['DNI'];
	$domicilio_o = $row['DOMICILIO'];
	$escuela_nombre_o = $row['COLEGIO'];
	$cue_o = $row['CUE'];
	$ciudad_o = $row['CIUDAD'];
	$distrito_o = $row['DISTRITO'];

	# Datos colegio Destino
	$query2 = "SELECT * FROM COLEGIOS WHERE ID_COLEGIO = '".$id_colegio_d."'";
	$resultadocol=$conexion->query($query2);
	$row = $resultadocol->fetch_assoc();

	$director_d = $row['DIRECTOR'];
	$dni_dir_d = $row['DNI'];
	$domicilio_d = $row['DOMICILIO'];
	$escuela_nombre_d = $row['COLEGIO'];
	$cue_d = $row['CUE'];
	$ciudad_d = $row['CIUDAD'];
	$distrito_d = $row['DISTRITO'];


	#$escuela_o = $_POST['escuela_o'];

	#$query="SELECT * FROM  WHERE DNI= '".$dni."'";

	#$escuela_d = $_POST['escuela_d'];

	$dias = strftime("%d");
	$mes = strftime("%B");
	$anio = strftime("%Y");

	$fecha = strftime("%Y").'-'.strftime("%m").'-'.strftime("%d");

	include('../includes/mes.php');

	include('migracion_pdf.php');

	mysqli_close($conexion);
?>
</body>
</html>
