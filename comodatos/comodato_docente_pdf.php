	<?php
	$titulo = 'CONTRATO DE COMODATO EQUIPO DOCENTE';
	
	if ($tipo_colegio == 'ISFD') {
		$escuela_1 = ' en su carácter de Director/a del Instituto Superior de Formación Docente ';
		$escuela_2 = ' la cual deberá ser asociada, a fin de cumplir con el protocolo de seguridad antirrobo, al servidor del Instituto Superior de Formación Profesional ';
		include('escribir_comodato_docente.php');
	} else {
		$escuela_1 = ' en su carácter de Director/a de la Escuela ';
		$escuela_2 = ' la cual deberá ser asociada, a fin de cumplir con el protocolo de seguridad antirrobo, al servidor del establecimiento educativo ';
		include('escribir_comodato_docente.php');
	}

	?>
