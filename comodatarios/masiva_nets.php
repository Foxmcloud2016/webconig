<?php
	include('../includes/inicio_sesion.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema Administrativo</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
</head>
<body>
	<section id="contenedor">
		<?php
		include('../includes/header.php');
		?>
		<div id="cuerpo">
			<?php
			include('../mysql/conectar.php');
			echo "<meta http-equiv='Content-type' content='text/html; charset=utf-8' />";
			require_once('../PHPExcel-1.8/Classes/PHPExcel.php');
			include('../includes/convertEXCELtoCSV.php');

			$id_colegio = $_SESSION['colegio'];

			//Guarda en memoria el archivo excel seleccionado desde la pagina de alta masiva
			$fname = $_FILES['sel_file']['name'];
			$filename = $_FILES['sel_file']['tmp_name'];

			//Llama a la función que convierte el archivo  excel en csv y lo llama "output.csv"

			convertXLStoCSV($filename,'output.csv');


			//Abro el archivo CSV creado y lo guardo en una variable
			$csv_file = fopen('output.csv', "r");
			$count = 0;

			echo "<h2>Detalle de carga de datos a la base de datos:</h2>";
			echo "<div class='flex'>";
			
			$no_cargados = 0; //sirve para contar la cantidad de filas del excel NO cargados en la BBDD
			$cargados = 0; //sirve para contar la cantidad de filas del excel cargados en la BBDD

			$null="SELECT DNI_COM FROM `comodatarios` WHERE MARCA IS NULL OR MODELO IS NULL OR SERIE IS NULL";
				  		//$verifico_duplicado = "SELECT DNI_COM FROM `comodatarios` WHERE DNI_COM= '$data[0]'";
	  		$resultado = mysqli_query($conexion, $null) or die('Error: '.mysqli_error($conexion));
	  		
	  		if (isset($resultado)) {
	  			while ($fila=mysqli_fetch_object($resultado)) {
	  			$dni[]= $fila->DNI_COM; 
	  		}
	  		}

	  		
	  		if (isset($dni)) {
	  			$dni_sin_net = count($dni);
	  		}
	  		
			
			
			//echo var_dump($row);
			// echo "<br>";
			// //echo $dni[0];
			// echo "<br>";
			// //echo $dni[1];
			// echo "<br>";
			//echo $dni_sin_net;
			while (($data = fgetcsv($csv_file, 1000, ",","\"")) !== FALSE){

				if ($count >= 1) {/*para que empiece a importar datos desde la segunda linea, ya que la primera es el titulo de cada columna*/
						

						if (isset($dni)) {
							if (in_array($data[0], $dni)) {
							$sql = "UPDATE COMODATARIOS SET MARCA='$data[1]', MODELO='$data[2]', SERIE='$data[3]' WHERE DNI_COM='$data[0]'";
                			mysqli_query($conexion, $sql) or die('Error: '.mysqli_error($conexion));

				  			$cargados++;
						}else{
							echo "<div class='insert_wrong'>El comodatario con DNI: ".$data[0]." no se encuentra cargado en la base de datos o ya tiene asignada una netbook en la misma.</div>";

							$no_cargados++;
							}
						}
				  	}
   			//Insertamos los datos con los valores...
				  	$count++;
				  }
				  if (!isset($dni)) {
				  		echo "<div class='insert_wrong'>Todos los comodatarios cargados en la base de datos ya tienen una netbook asignada.</div>";
				  	}else{
				  		echo "</div>";
				  		echo "<h2>Resumen:</h2>";
				  		echo "<div class='flex'>";
				  		echo "<div class='insert_ok'>Se asignó netbook a ".$cargados." comodatarios.</div>";
						echo "<div class='insert_wrong'>Hay ".$no_cargados." comodatarios que ya tienen netbook asignada o no estan cargados en la base de datos.</div>";
				  	}
 				//cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
				  fclose($csv_file);
				  //echo "<div class='insert_ok'>"."Los comodatarios se cargaron correctamente en la BBDD"."</div>";
				  echo "</div>";

				  $cant_registros_excel = $count - 1; //Indica la cantidad de filas que tiene el excel importado
					/*
						echo "<h2>Resumen:</h2>";

						echo "<div class='flex'>";
						echo "<p>El archivo de excel importado tenia ".$cant_registros_excel." comodatarios cargados. A continuacion se detallan la cantidad cargada en la base de datos.</p>";
						echo "<div class='insert_wrong'>Hay ".$no_cargados." comodatarios que no se cargaron en la BBDD.</div>";
						echo "<div class='insert_ok'>Se cargaron ".$cargados." comodatarios en la BBDD.</div>";
						echo "</div>";
					*/
				  ?>
				  <a class="button button2" href="alta_masiva.php">Volver</a>
		</div>
		<?php
			include('../includes/footer.php');
		?>
	</section>
</body>
</html>