<?php
	if ($tipo_colegio == 'Especial') {//aca van escuelas especiales

		$titulo = 'CONTRATO DE COMODATO ESCUELA ESPECIAL';

	}elseif ($tipo_colegio == 'ISFD') {//aca van institutos de formacion superior

		$titulo = 'CONTRATO DE COMODATO INSTITUTOS SUPERIORES DE FORMACIÓN
		DOCENTE';

		$hoja1 = "Entre la Autoridad Educativa Provincial representada en este acto por el Sr./a: $director_o,
DNI Nº $dni_dir_o, en su carácter de Director/Rector/a del Instituto Superior de Formación Docente $escuela_nombre_o Nº _____ de la Ciudad de $ciudad_o Provincia de Tierra del Fuego con domicilio en $domicilio_o, en adelante “EL COMODANTE”  y por la otra y el/la Señor/Señora $alumno DNI $dni_comodatario, con domicilio en la calle $calle N° $numero piso $piso Dpto $depto, de la ciudad $ciudad_o Provincia de Tierra del Fuego en su carácter de docente en adelante “EL COMODATARIO”,  ambos mayores de edad y hábiles para este acto, convienen en celebrar el presente CONTRATO DE COMODATO, sujeto a las siguientes cláusulas y condiciones:

PRIMERA: EL COMODANTE da en COMODATO al COMODATARIO, y éste acepta, una laptop educativa  Marca $marca Modelo $modelo Número de Serie $serie la cual deberá ser asociada, a fin de cumplir con el protocolo de seguridad antirrobo, al servidor del Instituto Superior de Formación Profesional $escuela_nombre_o, C.U.E. $cue, sito en la calle $domicilio_o, de la ciudad de $ciudad_o provincia de Tierra del Fuego; a tal fin la autoridad escolar del instituto, donde se securitizará la netbook, cargará los datos pertinentes en el aplicativo correspondiente del sitio www.conectarigualdad.gob.ar.

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

En prueba de conformidad se firman DOS (2) ejemplares de un mismo tenor y a un solo efecto, por EL COMODANTE y por “EL COMODATARIO” en la ciudad $ciudad_o Provincia de Tierra del Fuego, a los $dias días del mes de  $mes de $anio.
";
	}else{//aca es para escuelas secundarias
		include('comodato_alumno_secundaria.php');
	}

?>
