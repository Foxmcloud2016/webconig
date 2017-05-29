	<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	$id_colegio = $_SESSION['colegio'];
	$id_maquina = $_GET['id_m'];

	$query_colegio="SELECT COLEGIO, CIUDAD FROM COLEGIOS WHERE ID_COLEGIO='$id_colegio'";
	$resultado_colegio=$conexion->query($query_colegio);

	$query_disponible="SELECT SERIE, MARCA, MODELO FROM PARQUE_ESCOLAR WHERE ID_MAQUINA='$id_maquina'";
	$result_disponible=$conexion->query($query_disponible);

	$query_prestamo="SELECT DNI, APEYNOM, CARGADOR, TIPO_COM_PRE, MOTIVO_PRESTAMO FROM PRESTAMOS WHERE ID_MAQUINA_FK='$id_maquina' AND VIGENTE=1";
	$result_prestamo=$conexion->query($query_prestamo);

	//Datos para generar acta de prestamo
	while($row=$resultado_colegio->fetch_assoc()){
		$ciudad_o=$row['CIUDAD'];
		$escuela_nombre_o=$row['COLEGIO'];
	}
	
	while($row=$result_disponible->fetch_assoc()){
		$marca = $row['MARCA'];
		$modelo = $row['MODELO'];
		$serie = $row['SERIE'];	
	}
	
	while($row=$result_prestamo->fetch_assoc()){
		$cargador = $row['CARGADOR'];
		$comodatario = $row['TIPO_COM_PRE'];
		$apeynom = $row['APEYNOM'];
		$dni = $row['DNI'];
		$motivo = $row['MOTIVO_PRESTAMO'];
	}

	$escuela_o = $escuela_nombre_o;
	if ($comodatario==0) {
		$comodatario = 'alumno/padre/madre/tutor';
	}else{
		$comodatario = 'docente';
	}
	
	if ($cargador==1) {
		$cargador = ', con su respectivo cargador,';
	}elseif ($cargador==0) {
		$cargador = ',';
	}
	$serie = strtoupper($serie);
	$dias = strftime("%d");
	$mes = strftime("%B");
	$anio = strftime("%Y");

	include('../includes/mes.php');
	
	//include('prestamo_pdf.php');

	$fecha = "$ciudad_o, $dias de $mes de $anio";
	$renglon1 = 'Constancia de Préstamo';
	$renglon2 = "$escuela_nombre_o"; 
	$contenido = "El que suscribe deja constancia que en el día de la fecha se realiza el préstamo  de una netbook marca $marca, modelo $modelo y reglada bajo el siguiente número de serie: $serie$cargador la cual forma parte del Programa Nacional de Educación Conectar Igualdad, al $comodatario $apeynom D.N.I.: $dni.";

	if ($motivo == "net_st") {
		$contenido2 = "El motivo de dicho préstamo es que el $comodatario tiene su equipo a la espera de ser reparado por el proveedor de servicio técnico.
Con conformidad de ambas partes se firman 2 (dos) copias.";
	}else if ($motivo == "cue_ext_jur") {
		$contenido2 = "El motivo de dicho préstamo es que el $comodatario se encuentra cargado en un CUE de una escuela de otra provincia.
Con conformidad de ambas partes se firman 2 (dos) copias.";
	}else if ($motivo == "otro_cue") {
		$contenido2 = "El motivo de dicho préstamo es que el $comodatario se encuentra asociado a un CUE de otra escuela dentro de la Provincia de Tierra del Fuego.
Con conformidad de ambas partes se firman 2 (dos) copias.";
	}else if ($motivo == "fuera_cierre") {
		$contenido2 = "El motivo de dicho préstamo es que el $comodatario ha solicitado equipo luego del cierre correspondiente a este período.
Con conformidad de ambas partes se firman 2 (dos) copias.";
	} else {
		$contenido2 = "$motivo
Con conformidad de ambas partes se firman 2 (dos) copias.";
	}
	

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
$contenido2 = iconv('UTF-8', 'windows-1252', $contenido2);
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
$pdf->MultiCell(0,5,$contenido,0,'J',false);
$pdf->Write(5,$contenido2);
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
$pdf->MultiCell(0,5,$contenido,0,'J',false);
$pdf->Write(5,$contenido2);
$pdf->Ln(16);
$pdf->Write(5,'_________________________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(20);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(148);//posiciono firma2
$pdf->Write(0,$firma2);
$pdf->SetTitle("Constancia de Préstamo - $apeynom", true);
$pdf->Output('I',"Constancia de Préstamo - $apeynom.pdf",true);

?>
