	<?php
	$titulo = 'ACTA DE SERVICIO TÉCNICO';
	$hoja2 = "Se solicita cuidado y responsabilidad en el uso de la misma.";
	$mayus_retira = strtoupper($retira);
	$firma1 = "FIRMA $mayus_retira";
	$firma2 = 'FIRMA DE AUTORIDAD ESCOLAR';


?>
<?php
ob_start();
require('../fpdf/flowing_block.php');
$titulo = iconv('UTF-8', 'windows-1252', $titulo);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/

$hoja2 = iconv('UTF-8', 'windows-1252', $hoja2);
if (isset($disco)) {
	$disco = iconv('UTF-8', 'windows-1252', $disco);
}
$firma1 = iconv('UTF-8', 'windows-1252', $firma1);
$firma2 = iconv('UTF-8', 'windows-1252', $firma2);

$pdf = new PDF_FlowingBlock();
$pdf->AddPage('P','Legal');
$pdf->SetFont('Arial','B',11);
$pdf->SetX(75);
$pdf->Write(5,$titulo);
$pdf->Ln(15);
$pdf->SetFont('Arial','',11);
$pdf->SetLeftMargin(25);
$pdf->SetRightMargin(25);
if ($tipo_colegio == 'Secundaria' || $tipo_colegio == 'Especial') {
	if ($tipo_com == 'alumno') {//si es alumno de secundaria o especial
		$pdf->newFlowingBlock( 160, 6, '', 'J' );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En la ciudad de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', a los ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dias) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' días del mes de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $mes) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del año ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $anio) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'se deja constancia que la/el Sra./Sr.: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $adulto) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_adulto) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $retira) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'del alumno') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. N° ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $curso." ".$division) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', turno ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $turno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del Establecimiento Educativo: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', se le hace devolución de la Netbook marca ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' y Nº de Serie ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'que fue retenida en concepto de Servicio Técnico, por falla/rotura de:') );
		$pdf->SetFont('Arial','B',11);
		$pdf->finishFlowingBlock();
	}else{//si es docente de secundaria o especial
		$pdf->newFlowingBlock( 160, 6, '', 'J' );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En la ciudad de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', a los ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dias) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' días del mes de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $mes) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del año ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $anio) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'se deja constancia que la/el Sra./Sr.: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' en su carácter de docente del Establecimiento Educativo: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', se le hace devolución de la Netbook marca ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' y Nº de Serie ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'que fue retenida en concepto de Servicio Técnico, por falla/rotura de:') );
		$pdf->finishFlowingBlock();
	}
	}elseif ($tipo_colegio == 'ISFD') {
	if ($tipo_com == 'alumno') {//si es alumno de ISFD
		$pdf->newFlowingBlock( 160, 6, '', 'J' );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En la ciudad de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', a los ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dias) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' días del mes de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $mes) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del año ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $anio) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'se deja constancia que la/el Sra./Sr.: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $adulto) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_adulto) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $retira) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'del alumno') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. N° ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $curso." ".$division) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', turno ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $turno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del Establecimiento Educativo: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', se le hace devolución de la Netbook marca ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' y Nº de Serie ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'que fue retenida en concepto de Servicio Técnico, por falla/rotura de:') );
		$pdf->SetFont('Arial','B',11);
		$pdf->finishFlowingBlock();
	}else{//si es docente de ISFD
		$pdf->newFlowingBlock( 160, 6, '', 'J' );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En la ciudad de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', a los ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dias) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' días del mes de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $mes) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del año ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $anio) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'se deja constancia que la/el Sra./Sr.: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' en su carácter de docente del Establecimiento Educativo: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', se le hace devolución de la Netbook marca ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' y Nº de Serie ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'que fue retenida en concepto de Servicio Técnico, por falla/rotura de:') );
		$pdf->finishFlowingBlock();
	}
}

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
if ($tipo_colegio == 'Secundaria' || $tipo_colegio == 'Especial') {
	if ($tipo_com == 'alumno') {//si es alumno de secundaria o especial
		$pdf->newFlowingBlock( 160, 6, '', 'J' );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En la ciudad de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', a los ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dias) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' días del mes de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $mes) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del año ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $anio) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'se deja constancia que la/el Sra./Sr.: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $adulto) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_adulto) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $retira) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'del alumno') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. N° ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $curso." ".$division) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', turno ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $turno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del Establecimiento Educativo: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', se le hace devolución de la Netbook marca ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' y Nº de Serie ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'que fue retenida en concepto de Servicio Técnico, por falla/rotura de:') );
		$pdf->SetFont('Arial','B',11);
		$pdf->finishFlowingBlock();
	}else{//si es docente de secundaria o especial
		$pdf->newFlowingBlock( 160, 6, '', 'J' );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En la ciudad de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', a los ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dias) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' días del mes de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $mes) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del año ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $anio) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'se deja constancia que la/el Sra./Sr.: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' en su carácter de docente del Establecimiento Educativo: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', se le hace devolución de la Netbook marca ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' y Nº de Serie ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'que fue retenida en concepto de Servicio Técnico, por falla/rotura de:') );
		$pdf->finishFlowingBlock();
	}
	}elseif ($tipo_colegio == 'ISFD') {
	if ($tipo_com == 'alumno') {//si es alumno de ISFD
		$pdf->newFlowingBlock( 160, 6, '', 'J' );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En la ciudad de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', a los ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dias) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' días del mes de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $mes) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del año ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $anio) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'se deja constancia que la/el Sra./Sr.: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $adulto) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_adulto) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $retira) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'del alumno') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. N° ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $curso." ".$division) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', turno ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $turno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del Establecimiento Educativo: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', se le hace devolución de la Netbook marca ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' y Nº de Serie ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'que fue retenida en concepto de Servicio Técnico, por falla/rotura de:') );
		$pdf->SetFont('Arial','B',11);
		$pdf->finishFlowingBlock();
	}else{//si es docente de ISFD
		$pdf->newFlowingBlock( 160, 6, '', 'J' );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En la ciudad de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', a los ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dias) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' días del mes de ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $mes) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del año ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $anio) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'se deja constancia que la/el Sra./Sr.: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' en su carácter de docente del Establecimiento Educativo: ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_o) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', se le hace devolución de la Netbook marca ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' y Nº de Serie ') );
		$pdf->SetFont('Arial','B',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
		$pdf->SetFont('Arial','',11);
		$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'que fue retenida en concepto de Servicio Técnico, por falla/rotura de:') );
		$pdf->finishFlowingBlock();
	}
}

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
