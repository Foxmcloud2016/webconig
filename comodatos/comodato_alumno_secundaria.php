<?php

$clausulas = "
SEGUNDA: EL COMODATARIO destinará la laptop que recibe en COMODATO a fines educativos en su carácter de estudiante y para el uso de	su   grupo   familiar,   en   el   marco   del   PROGRAMA   CONECTAR IGUALDAD.COM.AR, procurando  familiarizar a todo integrante de su hogar con las nuevas tecnologías. La entrega del equipamiento implica única y exclusivamente la facultad de uso sobre el mismo, el que deberá realizarse conforme a su destino.

TERCERA: El COMODATARIO reconoce en forma expresa que recibe el bien objeto del presente contrato de parte de EL COMODANTE gratuitamente, en concepto de préstamo de uso. También será gratuita su conectividad en los términos y condiciones establecidos por el Comité Ejecutivo del Programa Conectar Igualdad.

CUARTA: El presente contrato tendrá vigencia desde la firma del mismo y (i) hasta el momento en que el estudiante de por acreditado con titulo la finalización del ciclo educativo correspondiente en cualquiera de sus modalidades o, (ii) en el supuesto que hubiere recibido la laptop educativa dentro de los noventa (90) días corridos previos al final del cursado del ciclo y habiendo egresado del mismo, hasta la aprobación del curso de introducción al uso de las TIC (Tecnologías de la Información) en el sistema educativo realizada dentro de los seis (6) meses posteriores a dicho egreso, en los términos dispuesto por el COMITÉ EJECUTIVO DEL PROGRAMA CONECTAR IGUALDAD.COM.AR. Una vez cumplimentada una u otra condición, conforme el momento del ciclo lectivo en que el estudiante haya recibido la laptop educativa, la misma pasará a ser de propiedad del estudiante.

QUINTA: El COMODATARIO podrá rescindir en cualquier momento el presente contrato previa notificación fehaciente a EL COMODANTE con TREINTA (30) días de anticipación, debiendo para ello restituir la laptop objeto del presente al COMODANTE en buen estado de conservación.

SEXTA:   El   COMODANTE   podrá   requerir   en   cualquier   momento   la devolución de la laptop objeto del presente contrato, y el COMODATARIO deberá efectuar la entrega de la misma dentro de los TREINTA (30) días posteriores a lanotificación en  tal sentido. En ningún supuesto y bajo ningún concepto podrá EL COMODATARIO retener el bien prestado, una vez que EL COMODANTE solicite su reintegro. En caso de no restitución del bien en el plazo acordado, EL COMODATARIO quedará   constituido en mora de pleno derecho, quedando facultado EL COMODANTE a homologar el presente  convenio  y  solicitar  su  reintegro  con  la  sola  presentación  del mismo.

SEPTIMA: EL COMODATARIO se compromete expresamente a utilizar el bien recibido para  el desarrollo de los objetivos y fines propios del Programa Conectar Igualdad; en  el marco  del proyecto  educativo  aprobado  por la Autoridad Educativa de la Jurisdicción, compatible con los compromisos acordados en el seno del Consejo Federal de Educación.

OCTAVA: EL COMODATARIO se compromete a mantener en buen estado de conservación y a utilizar el equipamiento recibido conforme su destino; así como a resguardar el equipamiento entregado y no comercializarlo.  En caso  de  robo/hurto  o  extravío  del  mismo,  EL  COMODATARIO  deberá efectuar ante dependencia policial o autoridad competente la pertinente denuncia, dentro de las 72 horas de acontecido el hecho. Además, deberá comunicar dicha denuncia en   www.conectarigualdad.gob.ar (Portal de Conectar Igualdad). EL COMODANTE podrá, ante la falsa u ausencia de denuncia en tiempo y forma por parte del COMODATARIO, iniciar las acciones judiciales que pudieren corresponder.

NOVENA: El ALUMNO deberá inscribirse OBLIGATORIAMENTE en el aplicativo creado en  www.conectarigualdad.gob.ar, (Portal Conectar Igualdad) para gozar de la garantía de reposición o de servicio técnico con que cuenta el equipamiento entregado en comodato.

DECIMA: EL COMODATARIO deberá solicitar oportunamente al COMODANTE, por cuenta de éste último, las reparaciones necesarias sobre el bien objeto del presente, con el fin de posibilitar una adecuada utilización del mismo.

DECIMOPRIMERA: EL COMODANTE y EL COMODATARIO constituyen domicilio especial en los señalados “ut supra”, donde tendrán validez todas las notificaciones judiciales y extrajudiciales.

DECIMOSEGUNDA: EL COMODATARIO autoriza a EL COMODANTE a la realización de investigaciones cuantitativas (encuestas) y/o investigaciones cualitativas (entrevistas en profundidad), con el consentimiento del usuario/a, a través de la entidad que designe con el fin de evaluar el funcionamiento y desempeño del programa.

DECIMOTERCERA: Para cualquier cuestión judicial, de común acuerdo las partes quedan sometidas a la competencia de los Juzgados Ordinarios de Primera Instancia con competencia en lo Contencioso Administrativo.
";
ob_start();
require('../fpdf/flowing_block.php');

$pdf = new PDF_FlowingBlock();
$clausulas = iconv('UTF-8', 'windows-1252', $clausulas);
$pdf->AddPage('P','Legal');
$pdf->SetFont('Arial','B',11);
$pdf->Image('../img/LogoPie-bn.jpg',15,20,75);
$pdf->Image('../img/logo_presidencia-bn.jpg',155,10,50);
$pdf->SetY(40);
$pdf->MultiCell(0,6,$titulo,0,'C',false);
$pdf->Ln(10);
$pdf->SetLeftMargin(25);
$pdf->SetRightMargin(25);

$pdf->newFlowingBlock( 160, 6, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'Entre la Autoridad Educativa Provincial representada en este acto por el Sr./a: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $director_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI Nº ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_dir_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en su carácter de Director/a de la Escuela ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', Nº _____, Distrito Escolar: ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $distrito_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' de la Ciudad de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', Provincia de Tierra del Fuego con domicilio en ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', en adelante “EL COMODANTE” y por la otra la/el Señora/Señor ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $adulto) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI N° ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_adulto) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' con domicilio en la calle ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $calle.' '.$numero) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', piso ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $piso) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', dpto. ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $depto) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', de la ciudad ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', Provincia de Tierra del Fuego;  por sí, como mayor de edad o menor emancipado, o	en su carácter de madre/padre/tutora/tutor/representante legal de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $alumno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' DNI N° ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock(iconv('UTF-8', 'windows-1252', $dni_comodatario) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', alumna/o del curso ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $curso) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', división ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $division) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' turno ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $turno) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', del establecimiento educativo ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', sito en la calle ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock(iconv('UTF-8', 'windows-1252', $domicilio_o)  );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', de la ciudad de ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', provincia de Tierra del Fuego, en adelante “EL COMODATARIO”, ambos mayores de edad y hábiles para este acto, convienen en celebrar el presente CONTRATO DE COMODATO, sujeto a las siguientes cláusulas y condiciones:') );
$pdf->finishFlowingBlock();

$pdf->Ln(10);
$pdf->newFlowingBlock( 160, 6, '', 'J' );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'PRIMERA: EL COMODANTE da en COMODATO al COMODATARIO, y éste acepta, una laptop educativa Marca ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $marca) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', Modelo ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $modelo) );
$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', Número de Serie ') );
$pdf->SetFont('Arial','B',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $serie.'.') );
$pdf->finishFlowingBlock();

$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,$clausulas,0,'J',false);

$pdf->Ln(10);
$pdf->newFlowingBlock( 160, 6, '', 'J' );

$pdf->SetFont('Arial','',11);
$pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En prueba de conformidad se firman DOS (2) ejemplares de un mismo tenor y a un solo efecto, por EL COMODANTE y por “EL COMODATARIO” en la ciudad ') );
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

$pdf->SetTitle("Contrato de Comodato - $alumno", true);
$pdf->Output('I',"Contrato de Comodato - $alumno.pdf", true);

 ?>
