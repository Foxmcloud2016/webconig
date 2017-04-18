<?php
  include('../mysql/conectar.php');
  include('../includes/inicio_sesion.php');


  $id_migracion = $_POST['id_m'];
  $id_comodatario = $_POST['id_com'];
  $id_usuario = $_SESSION['id']['ID_USUARIO'];
  $query = "DELETE FROM `migraciones` WHERE ID_MIGRACION = '".$id_migracion."'";
  $resultadobaja = $conexion->query($query);
  $query_baja_comodatario = "DELETE FROM `comodatarios` WHERE ID_COMODATARIO = '".$id_comodatario."'";

  include('../includes/movimientos.php');
  cargarMov($id_usuario,"Baja de Migracion",$id_comodatario);

  mysqli_close($conexion);

  header("Location: listar_migraciones.php");	

 ?>
