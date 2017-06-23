<?php

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
  $pdf->MultiCell(0,6,iconv('UTF-8', 'windows-1252', ', Provincia de Tierra del Fuego en su carácter de docente en adelante “EL COMODATARIO”,  ambos mayores de edad y hábiles para este acto, convienen en celebrar el presente contrato de  COMODATO, sujeto a las siguientes cláusulas y condiciones:'),0,'J',false);

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
