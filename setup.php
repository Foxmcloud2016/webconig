
<?php
$hostname = 'localhost';
$usuario = 'root';
$contrasenia = '';
$conexion = mysqli_connect ($hostname , $usuario , $contrasenia) or die("Error: ".mysqli_error($conexion));

if (!$conexion) {
die('No conecta : ' . mysql_error());
}
$db_selected = mysql_select_db('base', $conexion);
if (!$db_selected) {
echo 'No esta seleccionada la bd',$db_selected,'<br/>';
die (mysql_error());
}
else {
$texto = file_get_contents("b5_17605602_proyecto.sql");
$sentencia = explode(";", $texto);
for($i = 0; $i < (count($sentencia)-1); $i++){
$db_selected = mysql_query ("$sentencia[$i];") or die(mysql_error());
}
}

?>
