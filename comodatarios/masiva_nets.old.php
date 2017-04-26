<?php
include('../includes/inicio_sesion.php');
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

 while (($data = fgetcsv($csv_file, 1000, ",","\"")) !== FALSE)
 {


    if ($count >= 1) {/*para que empiece a importar datos desde la segunda linea, ya que la primera es el titulo de cada columna*/
         $sql = "UPDATE COMODATARIOS SET MARCA='$data[1]', MODELO='$data[2]', SERIE='$data[3]' WHERE DNI_COM='$data[0]'";
                mysqli_query($conexion, $sql) or die('Error: '.mysqli_error($conexion));
    mysqli_query($conexion, $sql) or die('Error: '.mysqli_error($conexion));

    }
   //Insertamos los datos con los valores...
    $count++;
 }
 //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
 fclose($csv_file);
 echo "Importación exitosa!";

?>