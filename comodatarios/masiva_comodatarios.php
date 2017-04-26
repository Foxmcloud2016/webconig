<?php
			include('../includes/inicio_sesion.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema generador de actas</title>
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

			echo "<div class='flex'>";
			
			echo "<h2>Detalle de carga de datos a la base de datos:</h2>";
				
			
			while (($data = fgetcsv($csv_file, 1000, ",","\"")) !== FALSE){

				if ($count >= 1) {/*para que empiece a importar datos desde la segunda linea, ya que la primera es el titulo de cada columna*/

				  		$verifico_duplicado = "SELECT DNI_COM FROM `comodatarios` WHERE DNI_COM= '$data[0]'";
				  		$resultado = mysqli_query($conexion, $verifico_duplicado) or die('Error: '.mysqli_error($conexion));
				  		$row=mysqli_fetch_array($resultado,MYSQLI_NUM);

				  		if ($row[0] == $data[0]) {

				  			echo "<div class='insert_wrong'>El comodatario ".$data[2].", con DNI: "."$data[0]"." ya se encuentra cargado en la base de datos. Por lo que no fue agregado nuevamente.</div></br>";

				  		}else{

				  			$sql = "INSERT INTO COMODATARIOS (DNI_COM, TIPO_COM, APEYNOM, DNI_ADULTO, APEYNOM_A, ID_COLEGIO_FK) VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$id_colegio')";
				  			mysqli_query($conexion, $sql) or die('Error: '.mysqli_error($conexion));

				  			echo "<div class='insert_ok'>El comodatario ".$data[2].", con DNI: "."$data[0]"." fue cargado en la base de datos.</div></br>";
				  		}
				  	}
   			//Insertamos los datos con los valores...
				  	$count++;
				  }
 				//cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
				  fclose($csv_file);
				  //echo "<div class='insert_ok'>"."Los comodatarios se cargaron correctamente en la BBDD"."</div>";
				  echo "</div>";
				  ?>
				  <a class="button button2" href="alta_masiva.php">Volver</a>
		</div>
		<?php
			include('../includes/footer.php');
		?>
	</section>
</body>
</html>