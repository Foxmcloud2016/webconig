	<?php
	$titulo = 'ACTA DE MIGRACION PARA ALUMNOS DEL PROGRAMA CONECTAR  IGUALDAD';
	$contenido = "                          .";

	$firma1 = 'FIRMA DEL PADRE/MADRE/TUTOR';
	$firma2 = 'FIRMA DEL DIRECTOR CEDENTE';
	$firma3 = 'FIRMA DEL DIRECTOR RECEPCIONISTA';


?>


<?php

$titulo = iconv('UTF-8', 'windows-1252', $titulo);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$contenido = iconv('UTF-8', 'windows-1252', $contenido);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$firma1 = iconv('UTF-8', 'windows-1252', $firma1);
$firma2 = iconv('UTF-8', 'windows-1252', $firma2);
$firma3 = iconv('UTF-8', 'windows-1252', $firma3);
ob_start();
require('../fpdf/flowing_block.php');
$pdf = new PDF_FlowingBlock();
$pdf->AddPage('P','Legal');
$pdf->SetFont('Arial','B',11);
$pdf->SetX(26);
$pdf->Write(5,$titulo);
$pdf->Ln(7);
$pdf->SetFont('Arial','',11);

$pdf->newFlowingBlock( 190, 4.5, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Entre la Autoridad Educativa Provincial representada en este acto por el Sr/a.: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de Director/a del ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' CUE: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $cue_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de la Provincia de Tierra del Fuego con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en adelante “EL CEDENTE” y por la otra parte la/el Sr/a: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de Director/a del ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', CUE: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $cue_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de la Ciudad de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' Provincia de TIERRA DEL FUEGO, con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en adelante “EL RECEPCIONISTA”, convienen por la presente acta la migración del alumno/a ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', comodatario de la netbook marca ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', serie Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', del establecimiento con director/a CEDENTE al establecimiento con director/a RECEPCIONISTA a fin de ser incorporado en la planta de alumnos comodatarios del establecimiento con director “RECEPCIONISTA” y la registración en el servidor del mismo establecimiento para  otorgar los correspondientes certificados de seguridad, dejando de estar vinculada en el establecimiento con director “CEDENTE”.') );
$pdf->finishFlowingBlock();

$pdf->newFlowingBlock( 190, 4.5, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En prueba de conformidad se firman TRES (3) ejemplares de un mismo tenor y a un solo efecto, por EL CEDENTE y por EL RECEPCIONISTA en la ciudad ') );
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
$pdf->newFlowingBlock( 190, 4.5, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Entre la Autoridad Educativa Provincial representada en este acto por el Sr/a.: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de Director/a del ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' CUE: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $cue_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de la Provincia de Tierra del Fuego con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en adelante “EL CEDENTE” y por la otra parte la/el Sr/a: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de Director/a del ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', CUE: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $cue_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de la Ciudad de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' Provincia de TIERRA DEL FUEGO, con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en adelante “EL RECEPCIONISTA”, convienen por la presente acta la migración del alumno/a ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', comodatario de la netbook marca ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', serie Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', del establecimiento con director/a CEDENTE al establecimiento con director/a RECEPCIONISTA a fin de ser incorporado en la planta de alumnos comodatarios del establecimiento con director “RECEPCIONISTA” y la registración en el servidor del mismo establecimiento para  otorgar los correspondientes certificados de seguridad, dejando de estar vinculada en el establecimiento con director “CEDENTE”.') );
$pdf->finishFlowingBlock();

$pdf->newFlowingBlock( 190, 4.5, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En prueba de conformidad se firman TRES (3) ejemplares de un mismo tenor y a un solo efecto, por EL CEDENTE y por EL RECEPCIONISTA en la ciudad ') );
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
$pdf->newFlowingBlock( 190, 4.5, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Entre la Autoridad Educativa Provincial representada en este acto por el Sr/a.: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de Director/a del ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' CUE: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $cue_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de la Provincia de Tierra del Fuego con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en adelante “EL CEDENTE” y por la otra parte la/el Sr/a: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de Director/a del ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', CUE: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $cue_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de la Ciudad de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' Provincia de TIERRA DEL FUEGO, con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en adelante “EL RECEPCIONISTA”, convienen por la presente acta la migración del alumno/a ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', comodatario de la netbook marca ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', serie Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', del establecimiento con director/a CEDENTE al establecimiento con director/a RECEPCIONISTA a fin de ser incorporado en la planta de alumnos comodatarios del establecimiento con director “RECEPCIONISTA” y la registración en el servidor del mismo establecimiento para  otorgar los correspondientes certificados de seguridad, dejando de estar vinculada en el establecimiento con director “CEDENTE”.') );
$pdf->finishFlowingBlock();

$pdf->newFlowingBlock( 190, 4.5, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En prueba de conformidad se firman TRES (3) ejemplares de un mismo tenor y a un solo efecto, por EL CEDENTE y por EL RECEPCIONISTA en la ciudad ') );
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
$pdf->newFlowingBlock( 190, 4.5, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Entre la Autoridad Educativa Provincial representada en este acto por el Sr/a.: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de Director/a del ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' CUE: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $cue_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'de la Provincia de Tierra del Fuego con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en adelante “EL CEDENTE” y por la otra parte la/el Sr/a: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de Director/a del ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', CUE: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $cue_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de la Ciudad de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' Provincia de TIERRA DEL FUEGO, con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_d) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en adelante “EL RECEPCIONISTA”, convienen por la presente acta la migración del alumno/a ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I. Nº: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', comodatario de la netbook marca ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', modelo: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', serie Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', del establecimiento con director/a CEDENTE al establecimiento con director/a RECEPCIONISTA a fin de ser incorporado en la planta de alumnos comodatarios del establecimiento con director “RECEPCIONISTA” y la registración en el servidor del mismo establecimiento para  otorgar los correspondientes certificados de seguridad, dejando de estar vinculada en el establecimiento con director “CEDENTE”.') );
$pdf->finishFlowingBlock();

$pdf->newFlowingBlock( 190, 4.5, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En prueba de conformidad se firman TRES (3) ejemplares de un mismo tenor y a un solo efecto, por EL CEDENTE y por EL RECEPCIONISTA en la ciudad ') );
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
