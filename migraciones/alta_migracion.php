<?php
include('../mysql/conectar.php');
include('../includes/inicio_sesion.php');
$id_colegio_o = $_POST['colegio_o'];
$id_colegio_d = $_POST['colegio_d'];
$dni = $_POST['dni'];
$id_usuario = $_SESSION['id']['ID_USUARIO'];
$id_com = $_POST['id_com'];
#$id_colegio_o = 1;
#$id_colegio_d = 2;
#$dni = 123456789;
#echo $id_usuario;
#$id_com = 1;
$fecha = strftime("%Y").'-'.strftime("%m").'-'.strftime("%d");

#Insercion en tabla Migraciones
$queryinsert = "INSERT INTO `migraciones`(`ID_MIGRACION`, `ID_COMODATARIO_FK`, `ID_COLEGIO_O`, `ID_COLEGIO_D`, `ESTADO`, `FECHA`) VALUES (NULL,$id_com,$id_colegio_o,$id_colegio_d,1,'$fecha')";
$resultadoinsert = $conexion->query($queryinsert);

//include('../includes/movimientos.php');
//cargarMov($id_usuario,"Alta de Migracion",$id_com);

$data = '<span>La migracion se cargo en la BBDD. Para seguir administrando migraciones haga click en "Administrar mas migraciones" y para generar el PDF clickee en "Generar PDF".</span>
</br>
</br>
<a class="button button2" href="listar_migraciones.php">Administrar mas migraciones</a>
<a class="button button2" href="acta_migracion.php?id_com='.$id_com.'&id_d='.$id_colegio_d.'" target="_blank">Generar PDF</a>';

$arrayName = array('success' => 'exito', 'data' => $data);
//$output = $json->encode($arrayName);
$output = json_encode($arrayName);
echo $output;
 ?>
