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
	$comodatario_mayus = strtoupper($comodatario);
	$firma1 = "FIRMA DEL $comodatario_mayus";
	$firma2 = 'FIRMA DEL QUE SUSCRIBE';


?>
<?php

$fecha = iconv('UTF-8', 'windows-1252', $fecha);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$renglon1 = iconv('UTF-8', 'windows-1252', $renglon1);
$renglon2 = iconv('UTF-8', 'windows-1252', $renglon2);
$contenido2 = iconv('UTF-8', 'windows-1252', $contenido2);
$contenido = iconv('UTF-8', 'windows-1252', $contenido);
$firma1 = iconv('UTF-8', 'windows-1252', $firma1);
$firma2 = iconv('UTF-8', 'windows-1252', $firma2);
ob_start();
require('../fpdf/flowing_block.php');
$pdf = new PDF_FlowingBlock();
$pdf->AddPage('P','Legal');
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
$pdf->newFlowingBlock( 190, 6, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'El que suscribe deja constancia que en el día de la fecha, el ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $comodatario." ".$apeynom ) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_nombre) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', realiza la devolución de una netbook marca ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' y reglada bajo el siguiente número de serie: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie." ") );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $componentes) );
$pdf->finishFlowingBlock();
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
$pdf->newFlowingBlock( 190, 6, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'El que suscribe deja constancia que en el día de la fecha, el ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $comodatario." ".$apeynom ) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_nombre) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', realiza la devolución de una netbook marca ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' y reglada bajo el siguiente número de serie: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie." ") );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $componentes) );
$pdf->finishFlowingBlock();
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
