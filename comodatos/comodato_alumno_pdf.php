<?php
	if ($tipo_colegio == 'Especial') {//aca van escuelas especiales

		$titulo = 'CONTRATO DE COMODATO ESCUELA ESPECIAL';
		include('comodato_alumno_secundaria.php');
	}elseif ($tipo_colegio == 'ISFD') {//aca van institutos de formacion superior

		$titulo = 'CONTRATO DE COMODATO INSTITUTOS SUPERIORES DE FORMACIÓN
		DOCENTE';
		include('comodato_alumno_IFD.php');


	}else{//aca es para escuelas secundarias
		$titulo = 'CONTRATO DE COMODATO ESCUELA SECUNDARIA';
		include('comodato_alumno_secundaria.php');
	}

?>
