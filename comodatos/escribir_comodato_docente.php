<?php

  $clausulas = "
SEGUNDA: EL COMODATARIO destinará la laptop que recibe en COMODATO a fines educativos en su carácter de estudiante y para el uso de su grupo familiar, en el marco del PROGRAMA CONECTAR IGUALDAD.COM.AR, procurando familiarizar a todo integrante de su hogar con las nuevas tecnologías. La entrega del equipamiento implica única y exclusivamente la facultad de uso sobre el mismo, el que deberá realizarse conforme a su destino.

TERCERA: El COMODATARIO reconoce en forma expresa que recibe el bien objeto del presente contrato de parte de EL COMODANTE gratuitamente, en concepto de préstamo de uso. También será gratuita su conectividad en los términos y condiciones establecidos por el Comité Ejecutivo del Programa Conectar Igualdad.

CUARTA: El presente contrato tendrá vigencia desde la firma del mismo y mientras dure su condición de alumno regular del Instituto Superior de Formación Docente.

QUINTA: El COMODATARIO podrá rescindir en cualquier momento el presente contrato previa notificación fehaciente a EL COMODANTE con TREINTA (30) días de anticipación, debiendo para ello restituir la laptop objeto del presente al COMODANTE en buen estado de conservación.

SEXTA: El COMODANTE podrá requerir en cualquier momento la devolución de la laptop objeto del presente contrato, y el COMODATARIO deberá efectuar la entrega de la misma dentro de los TREINTA (30) días posteriores a la notificación en tal sentido. En ningún supuesto y bajo ningún concepto podrá EL COMODATARIO retener el bien prestado, una vez que EL COMODANTE solicite su reintegro. En caso de no restitución del bien en el plazo acordado, EL COMODATARIO quedará constituido en mora de pleno derecho, quedando facultado EL COMODANTE a homologar el presente convenio y solicitar su reintegro con la sola presentación del mismo.

SEPTIMA: EL COMODATARIO se compromete expresamente a utilizar el bien recibido para el desarrollo de los objetivos y fines propios del Programa Conectar Igualdad; en el marco del proyecto educativo aprobado por la Autoridad Educativa de la Jurisdicción, compatible con los compromisos acordados en el seno del
Consejo Federal de Educación.

OCTAVA: EL COMODATARIO se compromete a mantener en buen estado de conservación y a utilizar el equipamiento recibido conforme su destino; así como a resguardar el equipamiento entregado y no comercializarlo. En caso de robo/hurto o extravío del mismo, EL COMODATARIO deberá efectuar ante dependencia policial o autoridad competente la pertinente denuncia, dentro de las 72 horas de acontecido el hecho. Además, deberá comunicar dicha denuncia en www.conectarigualdad.gob.ar (Portal de Conectar Igualdad). EL COMODANTE podrá, ante la falsa u ausencia de denuncia en tiempo y forma por parte del COMODATARIO, iniciar las acciones judiciales que pudieren corresponder.

NOVENA: El COMANDATARIO deberá inscribirse OBLIGATORIAMENTE en el aplicativo creado en www.conectarigualdad.gob.ar, (Portal Conectar Igualdad) para gozar de la garantía de reposición o de servicio técnico con que cuenta el equipamiento entregado en comodato.

DECIMA: EL COMODATARIO deberá solicitar oportunamente al COMODANTE, por cuenta de éste último, las reparaciones necesarias sobre el bien objeto del presente, con el fin de posibilitar una adecuada utilización del mismo.

DECIMOPRIMERA: EL COMODANTE y EL COMODATARIO constituyen domicilio especial en los señalados “ut supra”, donde tendrán validez todas las notificaciones judiciales y extrajudiciales.

DECIMOSEGUNDA: EL COMODATARIO autoriza a EL COMODANTE a la realización de investigaciones cuantitativas (encuestas) y/o investigaciones cualitativas (entrevistas en profundidad), con el consentimiento del usuario/a, a través de la entidad que designe con el fin de evaluar el funcionamiento y desempeño del programa.

DECIMOTERCERA: Para cualquier cuestión judicial, de común acuerdo las partes quedan sometidas a la competencia de los Juzgados Ordinarios de Primera Instancia con competencia en lo Contencioso Administrativo.
  ";

  ob_start();
  require('../fpdf/flowing_block.php');

  $pdf = new PDF_FlowingBlock();
  $titulo =  iconv('UTF-8', 'windows-1252', $titulo);
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
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_1) );
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
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $comodatario) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', DNI N° ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_comodatario) );
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
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', Provincia de Tierra del Fuego en su carácter de docente en adelante “EL COMODATARIO”,  ambos mayores de edad y hábiles para este acto, convienen en celebrar el presente CONTRATO DE COMODATO, sujeto a las siguientes cláusulas y condiciones:') );
  $pdf->SetFont('Arial','B',11);

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
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_2) );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $escuela_nombre_o) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', C.U.E. ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $cue_o) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', sito en la calle ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $domicilio_o) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', de la ciudad de ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' provincia de Tierra del Fuego; a tal fin la autoridad escolar del instituto, donde se securitizará la netbook,
 cargará los datos pertinentes en el aplicativo correspondiente del sitio www.conectarigualdad.gob.ar.'));
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

  //Empieza DDJJ

  $tituloDDJJ = "DECLARACIÓN JURADA";

	$firma = "FIRMA:
	ACLARACIÓN:
	D.N.I.:";

  $tituloDDJJ = iconv('UTF-8', 'windows-1252', $tituloDDJJ);
  $firma = iconv('UTF-8', 'windows-1252', $firma);
  $pdf->AddPage('P','Legal');
  $pdf->SetFont('Arial','B',11);
  $pdf->SetX(85);
  $pdf->Write(5,$tituloDDJJ);
  $pdf->Ln(10);

  $pdf->newFlowingBlock( 160, 6, '', 'J' );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En la ciudad de ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , Provincia de Tierra del Fuego, a los  ') );
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
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', el Sr./Sra. ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $comodatario.'.') );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I.: ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_comodatario) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', con domicilio en la calle ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $calle) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' N° ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $numero) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , DECLARA BAJO JURAMENTO NO HABER RECIBIDO NETBOOK del Plan “Conectar Igualdad” en ningún otro Establecimiento Educativo de la Provincia, para que conste a los efectos oportunos.
  Se firma la presente declaración en 2 (dos) ejemplares del mismo tenor y a los mismos efectos. ') );
  $pdf->finishFlowingBlock();

  $pdf->Ln(10);
  $pdf->MultiCell(0,9,$firma,0,'',false);

  //Repite DDJJ por 2da vez
  $pdf->Ln(25);
  $pdf->SetFont('Arial','B',11);
  $pdf->SetX(85);
  $pdf->Write(5,$tituloDDJJ);
  $pdf->Ln(10);
  $pdf->newFlowingBlock( 160, 6, '', 'J' );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', 'En la ciudad de ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $ciudad_o) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , Provincia de Tierra del Fuego, a los  ') );
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
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', el Sr./Sra. ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $comodatario.'.') );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', D.N.I.: ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $dni_comodatario) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ', con domicilio en la calle ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $calle) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' N° ') );
  $pdf->SetFont('Arial','B',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', $numero) );
  $pdf->SetFont('Arial','',11);
  $pdf->WriteFlowingBlock( iconv('UTF-8', 'windows-1252', ' , DECLARA BAJO JURAMENTO NO HABER RECIBIDO NETBOOK del Plan “Conectar Igualdad” en ningún otro Establecimiento Educativo de la Provincia, para que conste a los efectos oportunos.
  Se firma la presente declaración en 2 (dos) ejemplares del mismo tenor y a los mismos efectos. ') );
  $pdf->finishFlowingBlock();
  $pdf->Ln(10);
  $pdf->MultiCell(0,9,$firma,0,'',false);

  $pdf->SetTitle("Contrato de Comodato - $comodatario", true);
  $pdf->Output('I',"Contrato de Comodato - $comodatario.pdf", true);

 ?>
