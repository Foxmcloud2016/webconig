<?php
  include('../includes/inicio_sesion.php');
  include('../mysql/conectar.php');
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sistema Administrativo</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../estilos/general.css">
		<link rel="stylesheet" type="text/css" href="../estilos/header.css">
    <link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	</head>
	<body>
		<section id="contenedor">
			<?php include('../includes/header.php'); ?>
			<div id="cuerpo">

				<h2>Listado de Backups </h2>
        <a style='margin-left:40px' class="button button2" href="generar_backup.php">Generar Backup nuevo.</a>
        <p style="margin-left:40px">Para saber la fecha del backup deben leer la siguiente parte del nombre del archivo <br> como referencia db-backup-b5_17605602_proyecto-<b>20170512</b>-202745.sql <br> Esto indica el AÑO MES Y DIA que se genero el backup <b>YYYYMMDD</b></p>
        <form>
          <table>
          <tr>
            <th>Nombre de archivo </th>
            <th>Descargar</th>
          </tr>
          <?php
          $directorio_backup = '../backups_generados/';
          $ficheros = array_diff(scandir($directorio_backup), array('..', '.'));
          foreach ($ficheros as $archivo) {
           echo "<tr>";
            echo "<td>" . $archivo . "</td>";
            echo "<td><a href='descarga_backup.php?arch=".$archivo."' target='_blank'>Descargar archivo</a></td>";
            echo "</tr>";
        }  ?>
        </table>
        </form>
			</div>
			<?php include('../includes/footer.php'); ?>
		</section>

	</body>
</html>
