<?php
	
	if ($motivo == 'egresado_ext') {
		$contenido2 = "Dicha devolución se debe a que el alumno/a es egresado fuera de término, es decir, ha finalizado sus estudios fuera del período correspondiente al ciclo lectivo de su último año de cursada.
Con conformidad de ambas partes se firman 2 (dos) copias.";
	}

	if ($motivo == 'pase_no_pci') {
		$contenido2 = "Dicha devolución se debe a que el alumno/a ha gestionado el pase a un establecimiento educativo no alcanzado por el Programa Conectar Igualdad (CENS o escuela de gestión privada).
Con conformidad de ambas partes se firman 2 (dos) copias.";
	}

	if ($motivo == 'pase_otra_prov') {
		$contenido2 = "Dicha devolución se debe a que el alumno/a ha gestionado el pase a un establecimiento educativo fuera de la Provincia de Tierra del Fuego.
Con conformidad de ambas partes se firman 2 (dos) copias.";
	}

	if ($motivo == 'jubilacion') {
		$contenido2 = "Dicha devolución se debe a que el docente se ha jubilado.
Con conformidad de ambas partes se firman 2 (dos) copias.";
	}

	if ($motivo == 'otro') {
		$contenido2 = $otro_motivo.'
Con conformidad de ambas partes se firman 2 (dos) copias.';
	}


	$fecha = "$ciudad_o, $dias de $mes de $anio";
	$renglon1 = 'Constancia de Devolución';
	$renglon2 = "$escuela_nombre_o";
	$contenido = "El que suscribe deja constancia que en el día de la fecha, el $comodatario $apeynom, DNI: $dni_nombre, realiza la devolución de una netbook marca $marca, modelo $modelo y reglada bajo el siguiente número de serie: $serie$componentes";
	$comodatario_mayus = strtoupper($comodatario);
	$firma1 = "FIRMA DEL $comodatario_mayus";
	$firma2 = 'FIRMA DEL QUE SUSCRIBE';

?>
<?php
ob_start();
$fecha = iconv('UTF-8', 'windows-1252', $fecha);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$renglon1 = iconv('UTF-8', 'windows-1252', $renglon1);
$renglon2 = iconv('UTF-8', 'windows-1252', $renglon2);
$contenido2 = iconv('UTF-8', 'windows-1252', $contenido2);
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
$pdf->MultiCell(0,6,$contenido,0,'J',false);
$pdf->Write(5,$contenido2);
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