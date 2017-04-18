<?php
include('../includes/inicio_sesion.php');
include('../mysql/conectar.php');
$id_colegio = $_SESSION['colegio'];
$query_migraciones_salientes = "SELECT G.ID_MIGRACION,C3.ID_COMODATARIO,C3.APEYNOM,C3.SERIE, G.FECHA, C1.COLEGIO AS 'COLEGIO_ORIGEN', C2.COLEGIO AS 'COLEGIO_DESTINO', G.ESTADO, G.ID_COLEGIO_O, G.ID_COLEGIO_D FROM migraciones G INNER JOIN colegios C1 ON C1.ID_COLEGIO = G.ID_COLEGIO_O INNER JOIN colegios C2 ON C2.ID_COLEGIO = G.ID_COLEGIO_D INNER JOIN comodatarios C3 ON C3.ID_COMODATARIO = G.ID_COMODATARIO_FK WHERE G.ID_COLEGIO_O = $id_colegio";
$query_migraciones_entrantes = "SELECT G.ID_MIGRACION,C3.ID_COMODATARIO,C3.APEYNOM,C3.SERIE, G.FECHA, C1.COLEGIO AS 'COLEGIO_ORIGEN', C2.COLEGIO AS 'COLEGIO_DESTINO', G.ESTADO, G.ID_COLEGIO_O, G.ID_COLEGIO_D FROM migraciones G INNER JOIN colegios C1 ON C1.ID_COLEGIO = G.ID_COLEGIO_O INNER JOIN colegios C2 ON C2.ID_COLEGIO = G.ID_COLEGIO_D INNER JOIN comodatarios C3 ON C3.ID_COMODATARIO = G.ID_COMODATARIO_FK WHERE G.ID_COLEGIO_D = $id_colegio";

$migraciones_entrantes=$conexion->query($query_migraciones_entrantes);
$migraciones_salientes=$conexion->query($query_migraciones_salientes);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema generador de actas</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../estilos/general.css">
		<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	</head>
	<body>
		<section id="contenedor">
			<?php include('../includes/header.php'); ?>
			<div id="cuerpo">
				<h2>Listado de migraciones </h2>
				<a style='margin: 1.5em' href="migracion.php" class="button">Añadir solicitud de Migracion</a>

        <h2>Listado de migraciones entrantes</h2>
        <table>
              <thead>
                <tr>
                  <th>Comodatario</th>
                  <th>Numero de Serie</th>
                  <th>Fecha</th>
                  <th>Colegio Origen</th>
                  <th>Colegio Destino</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <!-- Header de tablas con nombres de columnas !-->
              <tbody>
                <?php while($row=$migraciones_entrantes->fetch_assoc()){?>
                  
                  <tr>
                        <td><?php echo $row['APEYNOM'];?> </td>
                        <td><?php echo $row['SERIE'];?> </td>
                        <td><?php echo $row['FECHA'];?> </td>
                        <td><?php echo $row['COLEGIO_ORIGEN'];?> </td>
                        <td><?php echo $row['COLEGIO_DESTINO'];?> </td>
                        <td>
                          <a class='button button2' href="baja_migracion.php?id_m=<?php echo $row['ID_MIGRACION'] ?>">Dar de baja</a>
                        </td>
                    </tr>
                  
              <?php  } ?>
            </tbody>
            </table>

            <h2>Listado de migraciones salientes</h2>
            <table>
              <thead>
                <tr>
                  <th>Comodatario</th>
                  <th>Numero de Serie</th>
                  <th>Fecha</th>
                  <th>Colegio Origen</th>
                  <th>Colegio Destino</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <!-- Header de tablas con nombres de columnas !-->
              <tbody>
                <?php while($row=$migraciones_salientes->fetch_assoc()){?>
                  <tr>
                        <td><?php echo $row['APEYNOM'];?> </td>
                        <td><?php echo $row['SERIE'];?> </td>
                        <td><?php echo $row['FECHA'];?> </td>
                        <td><?php echo $row['COLEGIO_ORIGEN'];?> </td>
                        <td><?php echo $row['COLEGIO_DESTINO'];?> </td>
                        <td>
                          <a class="button button2" href="acta_migracion.php?id_com=<?php echo $row['ID_COMODATARIO'].'&id_d='.$row['ID_COLEGIO_D'] ?>" target="_blank">Generar PDF</a>
                          <a class='button button2' href="baja_migracion.php?id_m=<?php echo $row['ID_MIGRACION'] ?>">Dar de baja</a>
                        </td>
                    </tr>
              <?php  } ?>
            </tbody>
            </table>
					</div>
			<?php include('../includes/footer.php'); ?>
		</section>
	</body>
</html>
