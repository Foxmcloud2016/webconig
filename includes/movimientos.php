<?php

		function cargarMov($id_usuario, $motivo,$id_ca = null){
			include('../mysql/conectar.php');

			if (is_null($id_ca)){
				$id_ca = 'NULL';
			}

			$fecha = strftime("%Y").'-'.strftime("%m").'-'.strftime("%d");

			$query = "INSERT INTO `movimientos`(`ID_MOVIMIENTO`, `ID_USUARIO_FK`, `ID_COMODATARIO_FK`, `MOTIVO`, `FECHA`) VALUES (NULL,$id_usuario,$id_ca,'$motivo','$fecha')";


			if ($conexion->query($query) === TRUE) {
			} else {
			    echo "Error: " . $query . "<br>" . $conexion->error;
			}


			mysqli_close($conexion);

		}



?>
