##Descarga del archivo backup del servidor

<?php
	session_start();
	if (isset($_SESSION['usuario'])){

	$arch = $_GET['arch']; #Obtengo nombre de archivo
	$directorio_backup = '../backups_generados'; #Directorio donde se alojan los backups
	$enlace = $directorio_backup."/".$arch;  #Uno ambos
	header ("Content-Disposition: attachment; filename=".$arch." ");
	header ("Content-Type: application/octet-stream");
	header ("Content-Length: ".filesize($enlace));
	readfile($enlace);

	echo "Por favor acepte la descarga del archivo...";


} else {
  header("location:listar_backups.php");
}
?>
