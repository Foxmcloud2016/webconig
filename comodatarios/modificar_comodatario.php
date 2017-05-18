<?php

	$id_comodatario = $_GET['id'];
	//$id_comodatario = intval($_GET['id']);
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	$querycomodatario="SELECT * FROM COMODATARIOS WHERE ID_COMODATARIO = '".$id_comodatario."'";
	$resultadocomodatario=$conexion->query($querycomodatario);

?>


<html>

<head>
	<title>Modificar Comodatario</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<section id="contenedor">
			<?php include('../includes/header.php'); ?>
			<div id="cuerpo">
				<h2>Modificar Comodatario</h2>
				<br/>
				<form action='realizar_modi_comodatario.php' method ="POST">
					<?php while($row=$resultadocomodatario->fetch_assoc()){?>
					<input type="hidden" name="id_comodatario" value="<?php echo $row['ID_COMODATARIO'];?>" />
					<label for= 'cuil'>CUIL</label>
					<input type="text" name="cuil" id="dni" value="<?php echo $row['CUIL'];?>" required> </input>

					<label for= 'dni'>DNI</label>
					<input type="text" name="dni" id="dni" value="<?php echo $row['DNI_COM'];?>" required> </input>

					<label for= 'apeynom'>Apellido y Nombre</label>
					<input type="text" name="apeynom" id="apeynom" value="<?php echo $row['APEYNOM'];?>" required> </input>

					<label for= 'dni_adulto'>DNI Adulto</label>
					<input type="text" name="dni_adulto" id="dni_adulto" value="<?php echo $row['DNI_ADULTO'];?>" required></input>

					<label for= 'apeynom_a'>Apellido y Nombre Adulto</label>
					<input type="text" name="apeynom_a" id="apeynom_a" <?php echo "value= '".$row['APEYNOM_A']."'";?> required></input>

					<label for= 'marca'>Marca</label>
					<input type="text" name="marca" id="marca" <?php echo "value= '".$row['MARCA']."'";?> required></input>

					<label for= 'modelo'>Modelo</label>
					<input type="text" name="modelo" id="modelo" <?php echo "value= '".$row['MODELO']."'";?> required></input>

					<label for= 'serie'>Serie</label>
					<input type="text" name="serie" id="serie" <?php echo "value= '".$row['SERIE']."'";?> required></input>

					<br/>
					<?php } ?>
					<input class = 'button' type="submit" value="Modificar Comodatario"></input>
					<a class='boton button2' href="listar_comodatarios.php">Cancelar</a>
					</form>
			</div>
		</div>
		<?php include('../includes/footer.php'); ?>
	</section>
</body>

</html>
