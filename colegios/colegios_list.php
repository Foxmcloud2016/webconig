<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$querycolegios="SELECT ID_COLEGIO,DIRECTOR,DNI,DOMICILIO,COLEGIO,CUE,CIUDAD,DISTRITO FROM COLEGIOS";
	$resultadocolegios=$conexion->query($querycolegios);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Listado de colegios</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../estilos/general.css">
		<link rel="stylesheet" type="text/css" href="../estilos/header.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<section id="contenedor">
			<?php
				include('../includes/header.php');
			?>
			<div id="cuerpo">
					<div>
						<table>
							<!--   Header de tablas con nombres de columnas  !-->
								<tr>
									<th>CUE</th>
									<th>Nombre de establecimiento</th>
									<th>Director/a</th>
									<th>DNI</th>
									<th>Domicilio</th>
									<th>Ciudad</th>
									<th>Distrito</th>
									<th>Acciones</th>
								</tr>
								<!--   Bucle while para completar tabla con todos los registros de colegios   !-->
								<?php while($row=$resultadocolegios->fetch_assoc()){?>
	              					<tr>	
										<td><?php echo $row['CUE'];?> </td>
										<td><?php echo $row['COLEGIO'];?> </td>
	              						<td><?php echo $row['DIRECTOR'];?> </td>
	              						<td><?php echo $row['DNI'];?> </td>
	              						<td><?php echo $row['DOMICILIO'];?> </td>
	              						<td><?php echo $row['CIUDAD'];?> </td>
	              						<td><?php echo $row['DISTRITO'];?> </td>
	              						<td> <a class="button button2" href='modificar_colegio.php?id=<?php echo $row['ID_COLEGIO'] ?>'  >Modificar</a></td>
	     							<tr> 
	              				<?php } ?>
	              				<!--   Fin de bucle   !-->
						</table>
					</div>
					<a class="button button1" href="nuevo_colegio.php">Agregar nuevo colegio</a>
			</div>
			<?php
				include('../includes/footer.php');
			?>
		</section>
	</body>
</html>