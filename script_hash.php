<?php
  // Script para convertir las contraseñas a hash
  include('mysql/conectar.php');

  $queryusuarios="SELECT * FROM usuarios";
	$resultadousuarios=$conexion->query($queryusuarios) or die("Error " .mysqli_error($conexion));

  while($row=$resultadousuarios->fetch_assoc()){
    $id_usuario = $row['ID_USUARIO'];
    $contraseña = password_hash($row['PASS'], PASSWORD_DEFAULT);
    $query_update = "UPDATE usuarios SET PASS = '$contraseña' WHERE ID_USUARIO = $id_usuario";
    $resultado =$conexion->query($query_update) or die("Error " .mysqli_error($conexion));
  }
 ?>
