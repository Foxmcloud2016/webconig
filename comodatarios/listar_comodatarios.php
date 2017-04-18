<?php
include('../includes/inicio_sesion.php');
include('../mysql/conectar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema generador de actas</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
</head>
<body>
	<section id="contenedor">
		<?php include('../includes/header.php'); ?>
		<div id="cuerpo">
			<h2>Buscar Comodatario</h2>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<span>DNI:</span>
				<!--	En el siguiente input, el atributo onkeypress sólo permite ingresar números, ya que es un campo para DNI´s	-->
				<input class="en_linea" type="text" name="dni" id='dni' required onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
				<input type="submit" name="submit" value="Buscar comodatario"></input>
				<br/>
			</form>
			<?php
			if(isset($_POST['submit'])){
				$dni = $_POST['dni'];
				$result = mysqli_query($conexion, "SELECT * FROM COMODATARIOS WHERE DNI_COM=$dni") or die("Error " .mysqli_error($conexion));
						//Var_dump($row);
				$contador = mysqli_num_rows($result);
						//echo $contador;
				?>
				<?php
				if ($contador == 0) {
					echo "<span>El DNI ingresado no se encuentra cargado en la base de datos aún, haga click <a href=".'alta_alumno.php'.">aquí</a> para cargar un alumno o <a href=".'alta_docente.php'.">aquí</a> para un docente.</span>";
				}else if ($contador >= 1) {?>
				<div>
					<table>
						<!-- Header de tablas con nombres de columnas !-->
						<tr>
							<th>DNI</th>
							<th>Apellido y nombre</th>
							<th>DNI Adulto</th>
							<th>Apellido y nombre Adulto</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Serie</th>
							<!--th>ID_COMODAT</th-->
							<th>Acciones</th>
						</tr>
						<!-- Bucle while para completar tabla con todos los registros de comodatarios !-->
						<?php while($row=$result->fetch_assoc()){?>
						<tr>
							<td><?php echo $row['DNI_COM'];?> </td>
							<td><?php echo $row['APEYNOM'];?> </td>
							<td><?php echo $row['DNI_ADULTO'];?> </td>
							<td><?php echo $row['APEYNOM_A'];?> </td>
							<td><?php echo $row['MARCA'];?> </td>
							<td><?php echo $row['MODELO'];?> </td>
							<td><?php echo $row['SERIE'];?> </td>
							<!--td><?php echo $row['ID_COMODATARIO'];?> </td-->
							<td> <a class="button button2" href='modificar_comodatario.php?id=<?php echo $row['ID_COMODATARIO'] ?>'>Modificar</a></td>
						</tr>
						<?php } ?>
						<?php } ?>
					</table>
				</div>
				<?php } ?>
			</div>
			<?php include('../includes/footer.php'); ?>
		</section>
	</body>
	</html>