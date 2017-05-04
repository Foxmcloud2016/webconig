<?php
	$id_egresado = intval($_GET['id']);
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
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
				<h2>Modificar Estado</h2>
				<br/>
				<form action='modifica_estado.php' method ="POST">
					<p>Por favor seleccione el estado</p>

					<input type="hidden" name="id_egresado" value="<?php echo $id_egresado ?>">
					<label for="estado">Estado</label>
					<select name="estado">
						<option value="1">Pendiente</option>
						<option value="2">Pendiente de Retiro</option>
						<option value="3">Retirado</option>
						<option value="4">No Corresponde Equipo</option>
					</select>
					<br />
					<input type="submit" value="Modificar Estado"></input>
					<a class='button' href="lista_egresados.php">Cancelar</a>
					</form>
			</div>
		</div>
		<script type="text/javascript">
			
		</script>
		<?php
				include('../includes/footer.php');
			?>
	</section>
</body>

</html>