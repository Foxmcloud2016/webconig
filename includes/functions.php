<?php



	function buscar_comodatario($q){

	include('../mysql/conectar.php');

	$query="SELECT * FROM COMODATARIOS INNER JOIN COLEGIOS WHERE DNI_COM= '".$q."'";

	$resultado= $conexion->query($query);

	$rowcount = mysqli_num_rows($resultado);

	if ($rowcount > 0){
		$row = $resultado->fetch_assoc();
		echo '<input type="hidden" type="text" name="id_com" id="id_com" value="'.$row['ID_COMODATARIO'].'">';
		echo '<input type="hidden" type="text" name="colegio_o" id="colegio_o" value="'.$row['ID_COLEGIO_FK'].'">';
		echo 'DNI: '.$row['DNI_COM'];
		echo '</br>';
		echo 'Apellidos y Nombres: '.$row['APEYNOM'];
		echo '</br>';
		echo 'DNI del Adulto: '.$row['DNI_ADULTO'];
		echo '</br>';
		echo 'Apellidos y Nombres del adulto: '.$row['APEYNOM_A'];
		echo '</br>';
		echo 'Serie: '.$row['SERIE'];
		echo '</br>';
		echo 'Marca: '.$row['MARCA'];
		echo '</br>';
		echo 'Modelo: '.$row['MODELO'];
		echo '</br>';

	} else {
		echo "No existe un comodatario con ese DNI";
	}


	}

 ?>
