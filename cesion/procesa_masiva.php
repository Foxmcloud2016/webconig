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

			echo "<h2>Detalle de Egresados cargados a la base de datos:</h2>";
			echo "<div class='flex'>";
			
			$no_cargados = 0; //sirve para contar la cantidad de filas del excel NO cargados en la BBDD
			$cargados = 0; //sirve para contar la cantidad de filas del excel cargados en la BBDD
			
			while (($data = fgetcsv($csv_file, 1000, ",","\"")) !== FALSE)
			{

				
				if ($count >= 1) {/*para que empiece a importar datos desde la segunda linea, ya que la primera es el titulo de cada columna*/

					//Verifico que el alumno no se encuentre cargado en la tabla EGRESADOS, para no pisar el registro
					$verifico_duplicado = "SELECT DNI FROM `egresados` WHERE DNI= '$data[0]'";
					$resultado = mysqli_query($conexion, $verifico_duplicado) or die('Error: '.mysqli_error($conexion));
					$row=mysqli_fetch_array($resultado,MYSQLI_NUM);

					//Verifico que al egresado se encuentre cargado en a tabla COMODATARIOS, ya que de lo contrario no se podria egresar
					$verifico_comodatario = "SELECT DNI_COM FROM `comodatarios` WHERE DNI_COM= '$data[0]'";
					$resultado_comodatario = mysqli_query($conexion, $verifico_comodatario) or die('Error: '.mysqli_error($conexion));
					$row1=mysqli_fetch_array($resultado_comodatario,MYSQLI_NUM);
					
					if ($row1[0] == $data[0]) {
						if ($row[0] == $data[0]) {

						echo "<div class='insert_wrong'>El comodatario con DNI: ".$data[0]." ya se encuentra cargado en la base de datos como egresado. Por lo que no fue agregado nuevamente.</div>";
						$no_cargados++;
					}else{

						$sql = "INSERT INTO EGRESADOS (DNI, ANIO_EGRESO, CURSO, DIVISION, TURNO, ESTADO) VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]', 1)";
						mysqli_query($conexion, $sql) or die('Error: '.mysqli_error($conexion));

						$cargados++;
						}
					}else{
						echo "<div class='insert_wrong'>El comodatario con DNI: ".$data[0]." no se encuentra cargado en la base de datos como comodatario. Por lo que debe cargarlo primero en la seccion 'Alta comodatarios' y luego cargarlo como egresado.</div>";

						$no_cargados++;
					}
				}
   //Insertamos los datos con los valores...
				$count++;
			}
 //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
			fclose($csv_file);

			echo "</div>";

			$cant_registros_excel = $count - 1; //Indica la cantidad de filas que tiene el excel importado
			echo "<h2>Resumen:</h2>";

			echo "<div class='flex'>";
			echo "<p>El archivo de excel importado tenia ".$cant_registros_excel." egresados cargados. A continuacion se detallan la cantidad cargada en la base de datos.</p>";
			if ($no_cargados == 0) {
				//no hacer nada
			}else{
				echo "<div class='insert_wrong'>Hay ".$no_cargados." egresados que no se cargaron en la BBDD, porque ya se encontraban cargados como egresados o bien porque no fueron dados de alta como comodatarios.</div>";
			}
			if ($cargados == 0) {
				//no hacer nada
			}else{
				echo "<div class='insert_ok'>Se cargaron ".$cargados." egresados en la BBDD.</div>";
			}
			
			echo "</div>";
			
 //echo "Importación exitosa!";

			?>
			<a class="button button2" href="cesion_masiva.php">Volver</a>
		</div>
		<?php
		include('../includes/footer.php');
		?>
	</section>
</body>
</html>