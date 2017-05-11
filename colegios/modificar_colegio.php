<?php
	
	$id_escuela = intval($_GET['id']);
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	$querycolegios="SELECT * FROM COLEGIOS WHERE ID_COLEGIO = '".$id_escuela."'";
	$resultadocolegio=$conexion->query($querycolegios);

?>


<html>

<head>
	<title>Modificar Colegio</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<section id="contenedor">
			<?php
				include('../includes/header.php');
			?>
			<div id="cuerpo">
				<h2>Modificar Colegio</h2>
				<br/>
				
				<form action='realizar_modicole.php' method ="POST">
					<?php while($row=$resultadocolegio->fetch_assoc()){?>
					<input type="hidden" name="id_colegio" value="<?php echo $row['ID_COLEGIO'];?>" />
					<label for= 'dire'>Directora</label>
					<input type="text" name="directora" id="dire" value="<?php echo $row['DIRECTOR'];?>" required> </input>
					<label for= 'dni_dire'>DNI</label>
					<input type="text" name="dni" id="dni_dire" value="<?php echo $row['DNI'];?>" required> </input>
					<label for= 'cole'>Establecimiento</label>
					<input type="text" name="colegio" id="cole" value="<?php echo $row['COLEGIO'];?>" required></input>
					<label for= 'domi'>Domicilio</label>
					<input type="text" name="domicilio" id="domi" <?php echo "value= '".$row['DOMICILIO']."'";?> required></input>
					<label for='ciudad'>Ciudad</label>
					<select name='ciudad' id='ciudad'>
						<option>Rio Grande</option>
						<option>Tolhuin</option>
						<option>Ushuaia</option>
					</select>
					<!--<input type="text" name="ciudad" id="ciudad" value='<?php #echo $row['CIUDAD'];?>' required></input> -->
					<?php } ?>
					<input class = 'button' type="submit" value="Modificar Colegio"></input>
					<a class='button button2' href="colegios_list.php">Cancelar</a>
					</form>
			</div>
		</div>
		<?php
				include('../includes/footer.php');
			?>
	</section>
</body>

</html>