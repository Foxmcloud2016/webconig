<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	$q = intval($_GET['q']);

	$query="SELECT * FROM COMODATARIOS INNER JOIN COLEGIOS WHERE DNI_COM= '".$q."' ";
	$resultado= $conexion->query($query);

	$rowcount = mysqli_num_rows($resultado);

	if ($rowcount > 0){

		$row = $resultado->fetch_assoc();
		#Query para saber si existe una migracion para este alumno pendiente.
		$query_migracion = "SELECT * FROM `migraciones` WHERE ID_COMODATARIO_FK = '".$row['ID_COMODATARIO']."'";
		$resultado_migracion= $conexion->query($query_migracion);

		$rowcount_migracion = mysqli_num_rows($resultado_migracion);
		if ($rowcount_migracion == 0){
			//Aclaracion: en los 2 primeros echos borre los inputs 'hidden=true' y cambie 'type=text' por 'type=hidden' porque si no se veian los inputs con los valores en la pagina-aparantemente es un error de jquery - vi la solucion en: 'http://stackoverflow.com/questions/996644/jquery-selector-cant-read-from-hidden-field'
			echo '<input type="hidden" name="id_com" id="id_com" value="'.$row['ID_COMODATARIO'].'">';
			echo '<input type="hidden" name="colegio_o" id="colegio_o" value="'.$row['ID_COLEGIO_FK'].'">';
			echo 'DNI: '.$row['DNI_COM'];
			echo '</br>';
			echo 'Apellidos y Nombres:'.$row['APEYNOM'];
			echo '</br>';
			echo 'DNI del Adulto:'.$row['DNI_ADULTO'];
			echo '</br>';
			echo 'Apellidos y Nombres del adulto:'.$row['APEYNOM_A'];
			echo '</br>';
			echo 'Serie:'.$row['SERIE'];
			echo '</br>';
			echo 'Marca:'.$row['MARCA'];
			echo '</br>';
			echo 'Modelo:'.$row['MODELO'];
			echo '</div> </br> <div>';

			echo "<span>Seleccione Colegio Destino:</span>
						<select id='colegio_d' name='colegio_d'>
							<option value=''>Seleccione Colegio Destino... </option>";

			$id_colegio_fk = intval($row['ID_COLEGIO_FK']);

			$querycol = "SELECT ID_COLEGIO,COLEGIO FROM COLEGIOS WHERE ID_COLEGIO != '".$id_colegio_fk."'";

			$resultadocolegios = $conexion->query($querycol);

			while($rowc = $resultadocolegios->fetch_assoc()){
				$id_col = $rowc["ID_COLEGIO"];
				$colegio = $rowc["COLEGIO"];
				$option = "<option value='".$id_col."' > $colegio </option>";
				echo $option;
			}
			echo "				</select>
					</div>	<br/>";

		} else {
			echo "<p>El DNI Ingresado corresponde a un comodatario que tiene pendiente una migracion </p>";
		}

	} else {
		echo "No existe un comodatario con ese DNI";
	}
?>
