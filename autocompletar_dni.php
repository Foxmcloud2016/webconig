<?php
include('mysql/conectar.php');
include('includes/inicio_sesion.php');


$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $conexion->query("SELECT * FROM COMODATARIOS WHERE DNI_COM LIKE '".$searchTerm."%' ORDER BY DNI_COM ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['DNI_COM'];
}
//return json data
echo json_encode($data);


?>