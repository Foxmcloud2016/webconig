<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	$id_colegio = $_SESSION['colegio'];
	$id_maquina = $_GET['id_m'];
	$id_prestamo = $_GET['id_p'];

	$query_colegio="SELECT COLEGIO, CIUDAD FROM COLEGIOS WHERE ID_COLEGIO='$id_colegio'";
	$resultado_colegio=$conexion->query($query_colegio);

	//$query_disponible="SELECT SERIE, MARCA, MODELO FROM PARQUE_ESCOLAR WHERE ID_MAQUINA='$id_maquina'";
	//$result_disponible=$conexion->query($query_disponible);
/*
	$query_prestamo="SELECT DNI, APEYNOM, CARGADOR, TIPO_COM_PRE FROM PRESTAMOS WHERE ID_MAQUINA_FK='$id_maquina' AND VIGENTE=0";
	$result_prestamo=$conexion->query($query_prestamo);
*/

	////////////////////
	$query_prestada = "SELECT PARQUE.ID_MAQUINA, PARQUE.SERIE, PARQUE.MARCA, PARQUE.MODELO, PRESTAMOS.DNI , PRESTAMOS.APEYNOM, PRESTAMOS.VIGENTE, PRESTAMOS.TIPO_COM_PRE, PRESTAMOS.ADEUDA_BATERIA, PRESTAMOS.ADEUDA_CARGADOR, PRESTAMOS.ADEUDA_ANTENA, PRESTAMOS.ID_PRESTAMO
						FROM parque_escolar AS PARQUE
						JOIN PRESTAMOS
						ON PARQUE.ID_MAQUINA = PRESTAMOS.ID_MAQUINA_FK
						WHERE PARQUE.ESTADO = 'disponible'
						AND PRESTAMOS.ID_PRESTAMO = $id_prestamo
						AND PARQUE.ID_COLEGIO_FK=$id_colegio
						AND PRESTAMOS.VIGENTE = 0";
	$result_prestada=$conexion->query($query_prestada);

	//Datos para generar acta de prestamo
	while($row=$resultado_colegio->fetch_assoc()){
		$ciudad_o=$row['CIUDAD'];
		$escuela_nombre_o=$row['COLEGIO'];
	}

	while($row=$result_prestada->fetch_assoc()){
		$comodatario=$row['TIPO_COM_PRE'];
		$apeynom=$row['APEYNOM'];
		$dni_nombre=$row['DNI'];
		$marca=$row['MARCA'];
		$modelo=$row['MODELO'];
		$serie=$row['SERIE'];
		$adeuda_bateria = $row['ADEUDA_BATERIA'];
		$adeuda_cargador = $row['ADEUDA_CARGADOR'];
		$adeuda_antena = $row['ADEUDA_ANTENA'];
	}

//	$comodatario = $_POST['comodatario'];
	if ($comodatario==0) {
		$comodatario = 'alumno/a';
	}else{
		$comodatario = 'docente';
	}

	//$nombre=$apeynom;

	$serie = strtoupper($serie);
	$dias = strftime("%d");
	$mes = strftime("%B");
	$anio = strftime("%Y");

	/*En el siguiente condicional van los modelos de net que no tienen antena TDA*/

if ($modelo=='E10IS' || $modelo=='E11IS2' || $modelo=='Schoolmate11' || $modelo=='X352' || $modelo=='X355' || $modelo=='Schoolmate') {
		$adeuda_antena = 'antena';

		if ($adeuda_bateria == 0 && $adeuda_cargador == 0) {

			$adeuda_bateria = 'bateria';
			$adeuda_cargador = 'cargador';

			$componentes = ', con todos sus componentes, a saber: batería y cargador, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.';

	}elseif ($adeuda_bateria == 1 || $adeuda_cargador == 1) {

		if ($adeuda_bateria == 1 && $adeuda_cargador == 0) {
			$componentes = ", con su cargador correspondiente. Se aclara que el $comodatario adeuda la batería, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
		}

	elseif ($adeuda_cargador == 1 && $adeuda_bateria == 0) {
		$componentes = ", con su batería correspondiente. Se aclara que el $comodatario adeuda el cargador, el cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_cargador == 1 && $adeuda_bateria == 1) {
		$componentes = ". Se aclara que el $comodatario adeuda la batería y el cargador, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
}
}

/*En el siguiente condicional van las nets que vienen con antena TDA*/
}elseif ($modelo=='NP100NZC' || $modelo=='100NZC' || $modelo=='C5' || $modelo=='NT1015E' || $modelo=='CXEdu') {
	if ($adeuda_bateria==0 && $adeuda_cargador==0 && $adeuda_antena == 0){
		$componentes = ', con todos sus componentes, a saber: batería, cargador y antena TDA, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.';
	}elseif ($adeuda_bateria == 1 && $adeuda_cargador==0 && $adeuda_antena == 0) {
		$componentes = ", con su cargador y antena TDA correspondientes. Se aclara que el $comodatario adeuda la batería, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria==0 && $adeuda_cargador==1 && $adeuda_antena == 0) {
		$componentes = ", con su batería y antena TDA correspondientes. Se aclara que el $comodatario adeuda el cargador, el cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria==0 && $adeuda_cargador==0 && $adeuda_antena==1) {
		$componentes = ", con su batería y cargador correspondientes. Se aclara que el $comodatario adeuda la antena TDA, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria == 1 && $adeuda_cargador==1 && $adeuda_antena==1) {
		$componentes = ". Se aclara que el $comodatario adeuda batería, cargador y antena TDA, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria == 1 && $adeuda_cargador==1 && $adeuda_antena == 0) {
		$componentes = ", con su antena TDA correspondiente. Se aclara que el $comodatario adeuda batería y cargador, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria == 1 && $adeuda_cargador==0 && $adeuda_antena==1) {
		$componentes = ", con su cargador correspondiente. Se aclara que el $comodatario adeuda batería y antena TDA, las cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria==0 && $adeuda_cargador==1 && $adeuda_antena==1) {
		$componentes = ", con su batería correspondiente. Se aclara que el $comodatario adeuda cargador y antena TDA, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}
}else{//Si el modelo de la net cargado en la BBDD no coincide con los anteriormente citados
	if ($adeuda_bateria==0 && $adeuda_cargador==0 && $adeuda_antena == 0){
		$componentes = ', con todos sus componentes, a saber: batería, cargador y antena TDA (si corresponde por modelo de netbook), la cual forma parte del Programa Nacional de Educación Conectar Igualdad.';
	}elseif ($adeuda_bateria == 1 && $adeuda_cargador==0 && $adeuda_antena == 0) {
		$componentes = ", con su cargador y antena TDA correspondientes (si corresponde por modelo de netbook). Se aclara que el $comodatario adeuda la batería, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria==0 && $adeuda_cargador==1 && $adeuda_antena == 0) {
		$componentes = ", con su batería y antena TDA correspondientes (si corresponde por modelo de netbook). Se aclara que el $comodatario adeuda el cargador, el cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria==0 && $adeuda_cargador==0 && $adeuda_antena==1) {
		$componentes = ", con su batería y cargador correspondientes. Se aclara que el $comodatario adeuda la antena TDA, la cual forma parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria == 1 && $adeuda_cargador==1 && $adeuda_antena==1) {
		$componentes = ". Se aclara que el $comodatario adeuda batería, cargador y antena TDA, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria == 1 && $adeuda_cargador==1 && $adeuda_antena == 0) {
		$componentes = ", con su antena TDA correspondiente (si corresponde por modelo de netbook). Se aclara que el $comodatario adeuda batería y cargador, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria == 1 && $adeuda_cargador==0 && $adeuda_antena==1) {
		$componentes = ", con su cargador correspondiente. Se aclara que el $comodatario adeuda batería y antena TDA, las cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
	}elseif ($adeuda_bateria==0 && $adeuda_cargador==1 && $adeuda_antena==1) {
		$componentes = ", con su batería correspondiente. Se aclara que el $comodatario adeuda cargador y antena TDA, los cuales forman parte del Programa Nacional de Educación Conectar Igualdad.";
}
}


	include('../includes/mes.php');

////////////////////////////////////////////////////////////Original de acá hacia abajo

	$fecha = "$ciudad_o, $dias de $mes de $anio";
	$renglon1 = 'Constancia de Devolución';
	$renglon2 = "$escuela_nombre_o";
	$contenido = "El que suscribe deja constancia que en el día de la fecha, el $comodatario $apeynom, DNI: $dni_nombre, realiza la devolución de una netbook marca $marca, modelo $modelo y reglada bajo el siguiente número de serie: $serie$componentes
Con conformidad de ambas partes se firman 2 (dos) copias.";
	$comodatario_mayus = strtoupper($comodatario);
	$firma1 = "FIRMA DEL $comodatario_mayus";
	$firma2 = 'FIRMA DEL QUE SUSCRIBE';

?>
<?php
ob_start();
$fecha = iconv('UTF-8', 'windows-1252', $fecha);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$renglon1 = iconv('UTF-8', 'windows-1252', $renglon1);
$renglon2 = iconv('UTF-8', 'windows-1252', $renglon2);
$contenido = iconv('UTF-8', 'windows-1252', $contenido);
$firma1 = iconv('UTF-8', 'windows-1252', $firma1);
$firma2 = iconv('UTF-8', 'windows-1252', $firma2);
require('../fpdf/fpdf.php');
$pdf = new FPDF('P','mm','Legal');
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->SetX(130);
$pdf->Write(5,$fecha);
$pdf->Ln(15);
$pdf->SetFont('Arial','B',11);/*negrita para el renglon1 y renglon2*/
$pdf->Write(5,$renglon1);
$pdf->Ln();
$pdf->Write(5,$renglon2);
$pdf->Ln();
$pdf->Ln(8);
$pdf->SetFont('Arial','',11);/*Quito la negrita*/
$pdf->MultiCell(0,6,$contenido,0,'J',false);
$pdf->Ln(16);
$pdf->Write(5,'_________________________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(20);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(148);//posiciono firma2
$pdf->Write(0,$firma2);

//Repite 2da vez
$pdf->Ln(30);
$pdf->SetFont('Arial','',11);
$pdf->SetX(130);
$pdf->Write(5,$fecha);
$pdf->Ln(15);
$pdf->SetFont('Arial','B',11);/*negrita para el renglon1 y renglon2*/
$pdf->Write(5,$renglon1);
$pdf->Ln();
$pdf->Write(5,$renglon2);
$pdf->Ln();
$pdf->Ln(8);
$pdf->SetFont('Arial','',11);/*Quito la negrita*/
$pdf->MultiCell(0,6,$contenido,0,'J',false);
$pdf->Ln(16);
$pdf->Write(5,'_________________________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(20);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(148);//posiciono firma2
$pdf->Write(0,$firma2);
$pdf->SetTitle("Constancia de Devolución - $apeynom", true);
$pdf->Output('I',"Constancia de Devolución - $apeynom.pdf",true);
?>
