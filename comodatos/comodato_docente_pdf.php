	<?php
	$titulo = 'CONTRATO DE COMODATO EQUIPO DOCENTE';
	$hoja1 = "Entre la Autoridad Educativa Provincial representada en este acto por el Sr./a: $director_o, DNI Nº $dni_dir_o, en su carácter de Director/a de la Escuela $escuela_nombre_o, Nº_____, Distrito Escolar: $distrito_o de la Ciudad de $ciudad_o Provincia de Tierra del Fuego con domicilio en $domicilio_o, en adelante “EL COMODANTE”  y por la otra y el/la Señor/Señora $comodatario, DNI N° $dni_comodatario, con domicilio en la calle $calle N° $numero piso $piso dpto. $depto, de la ciudad $ciudad_o Provincia de Tierra del Fuego en su carácter de DOCENTE en adelante “EL COMODATARIO”, ambos mayores de edad y hábiles para este acto, convienen en celebrar el presente CONTRATO DE COMODATO, sujeto a las siguientes cláusulas y condiciones:

PRIMERA: EL COMODANTE da en COMODATO al COMODATARIO, y éste acepta, una laptop educativa  Marca $marca Modelo $modelo Número de Serie $serie la cual deberá ser asociada, a fin de cumplir con el protocolo de seguridad antirrobo,  al servidor del establecimiento educativo $escuela_nombre_o, C.U.E. $cue_o, sito en la calle $domicilio_o de la ciudad de $ciudad_o provincia de Tierra del Fuego; a tal fin la autoridad escolar del establecimiento educativo, donde se securitizará la netbook, cargará los datos pertinentes en el aplicativo correspondiente del sitio www.conectarigualdad.gob.ar.

SEGUNDA: EL COMODATARIO destinará la laptop que recibe en COMODATO, a fines educativos para el desempeño de las funciones estipuladas en su carácter de DOCENTE en el marco del PROGRAMA CONECTAR IGUALDAD. La entrega del equipamiento implica única y exclusivamente la facultad de uso sobre el mismo, el que deberá realizarse conforme a su destino.

TERCERA: El COMODATARIO reconoce en forma expresa que recibe el bien objeto del presente contrato de parte de EL COMODANTE gratuitamente, en concepto de préstamo de uso.

CUARTA: El presente contrato tendrá vigencia desde la firma del mismo y hasta el momento en que EL COMANDATARIO no desempeñe más sus funciones en el establecimiento educativo, contemplando los casos de licencias por más de TREINTA (30) días, renuncia o jubilación.

QUINTA:  El COMODATARIO podrá rescindir en cualquier momento el presente contrato previa notificación fehaciente a EL COMODANTE con TREINTA (30) días de anticipación, debiendo para ello restituir la laptop objeto del presente al COMODANTE en buen estado de conservación.

SEXTA:  El  COMODANTE  podrá  requerir  en  cualquier  momento  la devolución de la laptop objeto del presente contrato, y el COMODATARIO deberá efectuar la entrega de la misma dentro de los TREINTA (30) días posteriores a la notificación en  tal sentido. En ningún supuesto y bajo ningún concepto podrá EL COMODATARIO retener el bien prestado, una vez que EL COMODANTE solicite su reintegro. En caso de no restitución del bien en el plazo acordado, EL COMODATARIO quedará  constituido en mora de pleno derecho, quedando facultado EL COMODANTE a homologar el presente convenio y solicitar su reintegro con la sola presentación del mismo.

SEPTIMA: EL COMODATARIO se compromete expresamente a utilizar el bien recibido para  el desarrollo de los objetivos y fines propios del Programa  Conectar  Igualdad;  en  el  marco  del  proyecto  educativo aprobado por la Autoridad Educativa de la Jurisdicción, compatible con los compromisos acordados en el seno del Consejo Federal de Educación.

OCTAVA: EL COMODATARIO se compromete a mantener en buen estado de conservación y a utilizar el equipamiento recibido conforme su destino; así como a resguardar el equipamiento entregado y no comercializarlo. En caso de robo/hurto o extravío del mismo, EL COMODATARIO deberá efectuar ante dependencia policial o autoridad competente la pertinente denuncia, dentro de las 72 horas de acontecido el hecho. Además, deberá comunicar dicha denuncia en   www.conectarigualdad.gob.ar (Portal de Conectar Igualdad). EL COMODANTE podrá, ante la falsa u ausencia de denuncia en tiempo y forma por parte del COMODATARIO, iniciar las acciones judiciales que pudieren corresponder.

NOVENA: El COMANDATARIO deberá inscribirse OBLIGATORIAMENTE en el  aplicativo  creado  en  www.conectarigualdad.gob.ar,  (Portal  Conectar Igualdad) para gozar de la garantía de reposición o de servicio técnico con que cuenta el equipamiento entregado en comodato.

DECIMA: EL COMODATARIO deberá solicitar oportunamente al COMODANTE,  por  cuenta  de  éste  último,  las  reparaciones  necesarias sobre el bien objeto del presente, con el fin de posibilitar una adecuada utilización del mismo.

DECIMOPRIMERA: EL COMODANTE y EL COMODATARIO constituyen domicilio especial en los señalados “ut supra”, donde tendrán validez todas las notificaciones judiciales y extrajudiciales.

DECIMOSEGUNDA: Para cualquier cuestión judicial, de común acuerdo las partes quedan sometidas a la competencia de los Juzgados Ordinarios de Primera Instancia con competencia en lo Contencioso Administrativo.
 
En prueba de conformidad se firman DOS (2) ejemplares de un mismo tenor y a un solo efecto, por EL COMODANTE y por “EL COMODATARIO” en la ciudad $ciudad_o Provincia de Tierra del Fuego, a los $dias días del mes de $mes de $anio.
";

$tituloDDJJ = "DECLARACIÓN JURADA";
$DDJJ = "En la ciudad de $ciudad_o, Provincia de Tierra del Fuego, a los $dias días del mes de $mes de $anio, el Sr./Sra. $comodatario, D.N.I.: $dni_comodatario, con domicilio en la calle $calle N° $numero, DECLARA BAJO JURAMENTO NO HABER RECIBIDO NETBOOK del Plan “Conectar Igualdad” en ningún otro Establecimiento Educativo de la Provincia, para que conste a los efectos oportunos.
Se firma la presente declaración en 2 (dos) ejemplares del mismo tenor y a los mismos efectos.";
$firma = "FIRMA:
ACLARACIÓN:
D.N.I.:";

?>
<?php
ob_start();
$titulo = iconv('UTF-8', 'windows-1252', $titulo);/*Esta función cambia la codificación de caracteres para que no salgan signo raros*/
$hoja1 = iconv('UTF-8', 'windows-1252', $hoja1);
require('../fpdf/fpdf.php');
$pdf = new FPDF('P','mm','Legal');
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);


//Agrega las imagenes ok en primera pagina
$pdf->Image('../img/LogoPie-bn.jpg',15,20,75);
$pdf->Image('../img/logo_presidencia-bn.jpg',155,10,50);
$pdf->SetY(40);


$pdf->SetX(65);
$pdf->Write(5,$titulo);
$pdf->Ln(15);
$pdf->SetFont('Arial','',11);
$pdf->SetLeftMargin(25);
$pdf->SetRightMargin(25);
$pdf->MultiCell(0,6,$hoja1,0,'J',false);

//Empieza DDJJ

$tituloDDJJ = iconv('UTF-8', 'windows-1252', $tituloDDJJ);
$DDJJ = iconv('UTF-8', 'windows-1252', $DDJJ);
$firma = iconv('UTF-8', 'windows-1252', $firma);
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
$pdf->SetX(85);
$pdf->Write(5,$tituloDDJJ);
$pdf->Ln(10);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,$DDJJ,0,'J',false);
$pdf->Ln(10);
$pdf->MultiCell(0,9,$firma,0,'',false);

//Repite DDJJ por 2da vez
$pdf->Ln(25);
$pdf->SetFont('Arial','B',11);
$pdf->SetX(85);
$pdf->Write(5,$tituloDDJJ);
$pdf->Ln(10);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,6,$DDJJ,0,'J',false);
$pdf->Ln(10);
$pdf->MultiCell(0,9,$firma,0,'',false);


$pdf->SetTitle("Contrato de Comodato Docente - $comodatario", true);
$pdf->Output('I',"Contrato de Comodato Docente - $comodatario.pdf", true);



?>

