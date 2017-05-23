	<?php
	$titulo = 'CONTRATO DE CESIÓN PARA ALUMNOS';
	$firma1 = "FIRMA DEL CESIONARIO";
	$firma2 = 'FIRMA DEL CEDENTE';

?>

<?php

	ob_start();
	require('../fpdf/flowing_block.php');

$titulo = iconv('UTF-8', 'windows-1252', $titulo);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$firma1 = iconv('UTF-8', 'windows-1252', $firma1);
$firma2 = iconv('UTF-8', 'windows-1252', $firma2);
if (isset($motivo))  {
	$motivo = iconv('UTF-8', 'windows-1252', $motivo);
}


$pdf = new PDF_FlowingBlock();
$pdf->AddPage('P','Legal');
$pdf->SetFont('Arial','B',11);
$pdf->SetX(70);
$pdf->Write(5,$titulo);
$pdf->Ln(15);
$pdf->SetFont('Arial','',11);

$pdf->newFlowingBlock( 190, 6, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Entre la Autoridad Educativa Provincial representada en este acto por el Sr./a: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , en su carácter de Director/a/Rector/a de la Escuela/Instituto ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , Nº______, Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de la Ciudad de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' Provincia de Tierra del Fuego, con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , en adelante “EL CEDENTE”  y por la otra parte la/el Señora/Señor: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $responsable) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_responsable) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , con domicilio en la calle ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $calle) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' N° ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $numero) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', piso ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $piso) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', depto. ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $depto) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', de la ciudad ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , Provincia de Tierra del Fuego; en su carácter de alumna/o del curso ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $curso) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , división ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $division) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', turno ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $turno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', (o en su carácter de padre, madre, tutor o representante legal del alumna/o ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del curso ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $curso_mayor) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', división ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $division_mayor) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , turno ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $turno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' ) del establecimiento educativo mencionado, en adelante “EL CESIONARIO”, ambos mayores de edad y hábiles para este acto, convienen en celebrar el presente CONTRATO DE CESION EN PROPIEDAD, sujeto a las siguientes cláusulas y condiciones: ') );
$pdf->finishFlowingBlock();
$pdf->Ln(7);
$pdf->newFlowingBlock( 190, 6, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'PRIMERA: LA AUTORIDAD EDUCATIVA da en forma gratuita y definitiva en PROPIEDAD al CESIONARIO y éste acepta, una laptop educativa marca ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', número de serie ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', con cargo de destinarla a fines formativos y de compartirla con su grupo familiar primario, comprometiéndose a no enajenarla de ninguna forma y bajo ninguna circunstancia o concepto.') );
$pdf->finishFlowingBlock();
$pdf->Ln(7);

$pdf->newFlowingBlock( 190, 6, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En prueba de conformidad se firman DOS (2) ejemplares de un mismo tenor y a un solo efecto, por EL CEDENTE y por EL CESIONARIO en la ciudad ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' Provincia de Tierra del Fuego, a los ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dias) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' días del mes de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $mes) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $anio.'.') );
$pdf->finishFlowingBlock();




$pdf->Ln(16);
$pdf->Write(5,'_________________________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(20);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(148);//posiciono firma2
$pdf->Write(0,$firma2);
if (isset($motivo)) {
	$pdf->Ln(7);
	$pdf->SetFont('Arial','',6);
	$pdf->SetX(20);
	$pdf->MultiCell(0,5,$motivo,0,'J',false);
}
//Repite 2da vez
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
$pdf->SetX(70);
$pdf->Write(5,$titulo);
$pdf->Ln(15);
$pdf->SetFont('Arial','',11);
$pdf->newFlowingBlock( 190, 6, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Entre la Autoridad Educativa Provincial representada en este acto por el Sr./a: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , en su carácter de Director/a/Rector/a de la Escuela/Instituto ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , Nº______, Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de la Ciudad de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' Provincia de Tierra del Fuego, con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , en adelante “EL CEDENTE”  y por la otra parte la/el Señora/Señor: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $responsable) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_responsable) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , con domicilio en la calle ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $calle) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' N° ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $numero) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', piso ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $piso) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', depto. ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $depto) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', de la ciudad ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , Provincia de Tierra del Fuego; en su carácter de alumna/o del curso ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $curso) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , división ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $division) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', turno ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $turno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', (o en su carácter de padre, madre, tutor o representante legal del alumna/o ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' del curso ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $curso_mayor) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', división ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $division_mayor) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , turno ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $turno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' ) del establecimiento educativo mencionado, en adelante “EL CESIONARIO”, ambos mayores de edad y hábiles para este acto, convienen en celebrar el presente CONTRATO DE CESION EN PROPIEDAD, sujeto a las siguientes cláusulas y condiciones: ') );
$pdf->finishFlowingBlock();
$pdf->Ln(7);
$pdf->newFlowingBlock( 190, 6, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'PRIMERA: LA AUTORIDAD EDUCATIVA da en forma gratuita y definitiva en PROPIEDAD al CESIONARIO y éste acepta, una laptop educativa marca ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', número de serie ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', con cargo de destinarla a fines formativos y de compartirla con su grupo familiar primario, comprometiéndose a no enajenarla de ninguna forma y bajo ninguna circunstancia o concepto.') );
$pdf->finishFlowingBlock();
$pdf->Ln(7);

$pdf->newFlowingBlock( 190, 6, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En prueba de conformidad se firman DOS (2) ejemplares de un mismo tenor y a un solo efecto, por EL CEDENTE y por EL CESIONARIO en la ciudad ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' Provincia de Tierra del Fuego, a los ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dias) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' días del mes de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $mes) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $anio.'.') );
$pdf->finishFlowingBlock();


$pdf->Ln(16);
$pdf->Write(5,'_________________________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(20);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(148);//posiciono firma2
$pdf->Write(0,$firma2);

if (isset($motivo)) {
	$pdf->Ln(7);
	$pdf->SetFont('Arial','',6);
	$pdf->SetX(20);
	$pdf->MultiCell(0,5,$motivo,0,'J',false);
}


if ($mayor=='si') {
	$pdf->SetTitle("Contrato de Cesión - $responsable", true);
	$pdf->Output('I',"Contrato de Cesión - $responsable.pdf", true);
}elseif ($mayor=='no') {
	$pdf->SetTitle("Contrato de Cesión - $alumno", true);
	$pdf->Output('I',"Contrato de Cesión - $alumno.pdf", true);
}

?>
