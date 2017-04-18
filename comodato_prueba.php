<?php 
$fp = fopen ( "alumnos.csv" , "r" ); 
while (( $data = fgetcsv ( $fp , 1000 , "," )) !== FALSE ) { // Mientras hay líneas que leer...

$i = 0; 
foreach($data as $row) {

//echo "Campo ".$i.": .".$row; // Muestra todos los campos de la fila actual 
$i++ ;

$alumno = explode(';', $row);
//print_r($alumno);
	
	echo $alumno[0];
   // echo $alumno[1];
   // echo $alumno[2];
}
foreach($alumno as $mi_array){
    //echo $mi_array.'<br>'; 
    /*echo $mi_array[0];
    echo $mi_array[1];
    echo $mi_array[2];*/
}
echo "<br>";

} 

fclose ( $fp ); 
?>

<!--Original recorre .csv-->
<!--?php 
$fp = fopen ( "archivo.csv" , "r" ); 
while (( $data = fgetcsv ( $fp , 1000 , "," )) !== FALSE ) { // Mientras hay líneas que leer...

$i = 0; 
foreach($data as $row) {

echo "Campo $i: $row<br>n"; // Muestra todos los campos de la fila actual 
$i++ ;

}

echo "<br><br>nn";

} 
fclose ( $fp ); 
?-->