	<?php
	$titulo = 'ACTA DE SERVICIO TÉCNICO';
	$hoja1 = "En la ciudad de $ciudad_o, a los $dias días del mes de $mes del año $anio, se deja constancia que la/el Sra./Sr.: $adulto, D.N.I. Nº $dni_adulto, en su carácter de $retira del alumno $alumno, D.N.I. N° $dni_alumno de $curso $division, turno $turno del Establecimiento Educativo: $escuela_o, se le hace devolución de la Netbook marca $marca, modelo $modelo y Nº de Serie $serie que fue retenida en concepto de Servicio Técnico, por problemas con:";

	$hoja2 = "Se solicita cuidado y responsabilidad en el uso de la misma.";
	$mayus_retira = strtoupper($retira);
	$firma1 = "FIRMA $mayus_retira";
	$firma2 = 'FIRMA DE AUTORIDAD ESCOLAR';


?>
<?php
ob_start();
$titulo = iconv('UTF-8', 'windows-1252', $titulo);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$hoja1 = iconv('UTF-8', 'windows-1252', $hoja1);
$hoja2 = iconv('UTF-8', 'windows-1252', $hoja2);
if (isset($disco)) {
	$disco = iconv('UTF-8', 'windows-1252', $disco);
}
$firma1 = iconv('UTF-8', 'windows-1252', $firma1);
$firma2 = iconv('UTF-8', 'windows-1252', $firma2);
require('../fpdf/fpdf.php');
$pdf = new FPDF('P','mm','Legal');
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
$pdf->SetX(75);
$pdf->Write(5,$titulo);
$pdf->Ln(15);
$pdf->SetFont('Arial','',11);
$pdf->SetLeftMargin(25);
$pdf->SetRightMargin(25);
$pdf->MultiCell(0,6,$hoja1,0,'J',false);
$pdf->Ln(2);

if (isset($teclado)) {
	$pdf->Write(5,$teclado);
	$pdf->Ln();
}
if (isset($motherboard)) {
	$pdf->Write(5,$motherboard);
	$pdf->Ln();
}
if (isset($pantalla)) {
	$pdf->Write(5,$pantalla);
	$pdf->Ln();
}
if (isset($tpm)) {
	$pdf->Write(5,$tpm);
	$pdf->Ln();
}

if (isset($wifi)) {
	$pdf->Write(5,$wifi);
	$pdf->Ln();
}
if (isset($varias)) {
	$pdf->Write(5,$varias);
	$pdf->Ln();
}
if (isset($disco)) {
	$pdf->Write(5,$disco);
	$pdf->Ln();
}

$pdf->MultiCell(0,6,$hoja2,0,'J',false);

$pdf->Ln(16);
$pdf->Write(5,'___________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(25);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(135);//posiciono firma2
$pdf->Write(0,$firma2);
$pdf->SetX(25);//posiciono 'ACLARACIÓN'
$pdf->Write(7,iconv('UTF-8', 'windows-1252', 'ACLARACIÓN:'));

$pdf->Ln(4);
$pdf->SetX(135);//posiciono 'ACLARACIÓN'
$pdf->Write(0,iconv('UTF-8', 'windows-1252', 'ACLARACIÓN:'));

//Repite por 2da vez
$pdf->Ln(40);
$pdf->SetFont('Arial','B',11);
$pdf->SetX(75);
$pdf->Write(5,$titulo);
$pdf->Ln(15);
$pdf->SetFont('Arial','',11);
$pdf->SetLeftMargin(25);
$pdf->SetRightMargin(25);
$pdf->MultiCell(0,6,$hoja1,0,'J',false);
$pdf->Ln(2);

if (isset($teclado)) {
	$pdf->Write(5,$teclado);
	$pdf->Ln();
}
if (isset($motherboard)) {
	$pdf->Write(5,$motherboard);
	$pdf->Ln();
}
if (isset($pantalla)) {
	$pdf->Write(5,$pantalla);
	$pdf->Ln();
}
if (isset($tpm)) {
	$pdf->Write(5,$tpm);
	$pdf->Ln();
}

if (isset($wifi)) {
	$pdf->Write(5,$wifi);
	$pdf->Ln();
}
if (isset($varias)) {
	$pdf->Write(5,$varias);
	$pdf->Ln();
}
if (isset($disco)) {
	$pdf->Write(5,$disco);
	$pdf->Ln();
}

$pdf->MultiCell(0,6,$hoja2,0,'J',false);

$pdf->Ln(16);
$pdf->Write(5,'___________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(25);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(135);//posiciono firma2
$pdf->Write(0,$firma2);
$pdf->SetX(25);//posiciono 'ACLARACIÓN'
$pdf->Write(7,iconv('UTF-8', 'windows-1252', 'ACLARACIÓN:'));

$pdf->Ln(4);
$pdf->SetX(135);//posiciono 'ACLARACIÓN'
$pdf->Write(0,iconv('UTF-8', 'windows-1252', 'ACLARACIÓN:'));

$pdf->SetTitle("Acta de ST - $alumno", true);
$pdf->Output('I',"Acta de ST - $alumno.pdf", true);
?>

