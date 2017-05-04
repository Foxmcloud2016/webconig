	<?php
	$titulo = 'CONTRATO DE CESIÓN PARA ALUMNOS';
	$contenido = "Entre la Autoridad Educativa Provincial representada en este acto por el Sr./a: $director_o, DNI Nº $dni_dir_o, en su carácter de Director/a/Rector/a de la Escuela/Instituto $escuela_nombre_o, Nº______, Distrito Escolar: $distrito_o de la Ciudad de $ciudad_o Provincia de Tierra del Fuego, con domicilio en $domicilio_o, en adelante “EL CEDENTE”  y por la otra parte la/el Señora/Señor: $responsable DNI Nº $dni_responsable, con domicilio en la calle $calle N° $numero, piso $piso, depto. $depto, de la ciudad $ciudad_o, Provincia de Tierra del Fuego; en su carácter de alumna/o del curso $curso, división $division, turno $turno, (o en su carácter de padre, madre, tutor o representante legal del alumna/o $alumno DNI Nº $dni_alumno del curso $curso_mayor, división $division_mayor, turno $turno) del establecimiento educativo mencionado, en adelante “EL CESIONARIO”, ambos mayores de edad y hábiles para este acto, convienen en celebrar el presente CONTRATO DE CESION EN PROPIEDAD, sujeto a las siguientes cláusulas y condiciones:

PRIMERA: LA AUTORIDAD EDUCATIVA da en forma gratuita y definitiva en PROPIEDAD al CESIONARIO y éste acepta, una laptop educativa marca $marca, modelo $modelo, número de serie $serie, con cargo de destinarla a fines formativos y de compartirla con su grupo familiar primario, comprometiéndose a no enajenarla de ninguna forma y bajo ninguna circunstancia o concepto.

En prueba de conformidad se firman DOS (2) ejemplares de un mismo tenor y a un solo efecto, por EL CEDENTE y por EL CESIONARIO en la ciudad $ciudad_o, Provincia de Tierra del Fuego, a los $dias días del mes de  $mes de $anio.";
	
	$firma1 = "FIRMA DEL CESIONARIO";
	$firma2 = 'FIRMA DEL CEDENTE';

?>
<?php
ob_start();
$titulo = iconv('UTF-8', 'windows-1252', $titulo);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$contenido = iconv('UTF-8', 'windows-1252', $contenido);
$firma1 = iconv('UTF-8', 'windows-1252', $firma1);
$firma2 = iconv('UTF-8', 'windows-1252', $firma2);
if (isset($motivo))  {
	$motivo = iconv('UTF-8', 'windows-1252', $motivo);		
}


require('../fpdf/fpdf.php');
$pdf = new FPDF('P','mm','Legal');
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
$pdf->SetX(70);
$pdf->Write(5,$titulo);
$pdf->Ln(15);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,5,$contenido,0,'J',false);
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
$pdf->Ln(30);
$pdf->SetFont('Arial','B',11);
$pdf->SetX(70);
$pdf->Write(5,$titulo);
$pdf->Ln(15);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,5,$contenido,0,'J',false);
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

