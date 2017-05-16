	<?php
	$titulo = 'ACTA DE MIGRACION PARA ALUMNOS DEL PROGRAMA CONECTAR  IGUALDAD';
	$contenido = "Entre la Autoridad Educativa Provincial representada en este acto por el Sr/a.: $director_o, DNI Nº $dni_dir_o, en su carácter de Director/a del $escuela_nombre_o CUE: $cue_o Distrito Escolar: $distrito_o de la Provincia de Tierra del Fuego con domicilio en $domicilio_o, en adelante “EL CEDENTE” y por la otra parte la/el Sr/a: $director_d  DNI Nº $dni_dir_d, en su carácter de Director/a del $escuela_nombre_d, CUE: $cue_d Distrito Escolar: $distrito_d de la Ciudad de $ciudad_d Provincia de TIERRA DEL FUEGO, con domicilio en $domicilio_d, en adelante “EL RECEPCIONISTA”, convienen por la presente acta la migración del alumno/a $alumno, D.N.I. Nº: $dni_alumno, comodatario de la netbook marca $marca, modelo: $modelo, serie Nº $serie, del establecimiento con director/a CEDENTE al establecimiento con director/a RECEPCIONISTA a fin de ser incorporado en la planta de alumnos comodatarios del establecimiento con director “RECEPCIONISTA” y la registración en el servidor del mismo establecimiento para  otorgar los correspondientes certificados de seguridad, dejando de estar vinculada en el establecimiento con director “CEDENTE”.
		En prueba de conformidad se firman TRES (3) ejemplares de un mismo tenor y a un solo efecto, por EL CEDENTE y por EL RECEPCIONISTA en la ciudad de $ciudad_o, Provincia de Tierra del Fuego, a los $dias días del mes de $mes de $anio.";
	$firma1 = 'FIRMA DEL PADRE/MADRE/TUTOR';
	$firma2 = 'FIRMA DEL DIRECTOR CEDENTE';
	$firma3 = 'FIRMA DEL DIRECTOR RECEPCIONISTA';
?>
<?php
ob_start();
$titulo = iconv('UTF-8', 'windows-1252', $titulo);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$contenido = iconv('UTF-8', 'windows-1252', $contenido);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$firma1 = iconv('UTF-8', 'windows-1252', $firma1);
$firma2 = iconv('UTF-8', 'windows-1252', $firma2);
$firma3 = iconv('UTF-8', 'windows-1252', $firma3);
require('../fpdf/fpdf.php');
$pdf = new FPDF('P','mm','Legal');
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
$pdf->SetX(26);
$pdf->Write(5,$titulo);
$pdf->Ln(7);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,4.5,$contenido,0,'J',false);
$pdf->Ln(10);
$pdf->Write(5,'_________________________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(10);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(75);
$pdf->Write(0,$firma2);
$pdf->SetX(142);
$pdf->Write(0,$firma3);
//Repite 2da vez
$pdf->Ln(12);
$pdf->SetFont('Arial','B',11);
$pdf->SetX(26);
$pdf->Write(5,$titulo);
$pdf->Ln(7);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,4.5,$contenido,0,'J',false);
$pdf->Ln(10);
$pdf->Write(5,'_________________________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(10);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(75);
$pdf->Write(0,$firma2);
$pdf->SetX(142);
$pdf->Write(0,$firma3);
//Repite 3ra vez
$pdf->Ln(12);
$pdf->SetFont('Arial','B',11);
$pdf->SetX(26);
$pdf->Write(5,$titulo);
$pdf->Ln(7);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,4.5,$contenido,0,'J',false);
$pdf->Ln(10);
$pdf->Write(5,'_________________________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(10);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(75);
$pdf->Write(0,$firma2);
$pdf->SetX(142);
$pdf->Write(0,$firma3);

//salto de pagina
$pdf->AddPage('P','Legal');

//Repite 4ta vez
$pdf->Ln(12);
$pdf->SetFont('Arial','B',11);
$pdf->SetX(26);
$pdf->Write(5,$titulo);
$pdf->Ln(7);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,4.5,$contenido,0,'J',false);
$pdf->Ln(10);
$pdf->Write(5,'_________________________________________________________________________________________');
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->SetX(10);//posiciono firma1
$pdf->Write(0,$firma1);
$pdf->SetX(75);
$pdf->Write(0,$firma2);
$pdf->SetX(142);
$pdf->Write(0,$firma3);

$pdf->SetTitle("Acta de Migración - $alumno", true);
$pdf->Output('I',"Acta de Migración - $alumno.pdf",true);
?>

