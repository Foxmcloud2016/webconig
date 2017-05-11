<?php
include('../includes/inicio_sesion.php');
$id_colegio = $_SESSION['colegio'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Administrativo</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	<script type="text/javascript" src='../js/myscripts.js'></script>
	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
</head>
<body>
	<section id="contenedor">
		<?php
		include('../includes/header.php');
		?>
		<div id="cuerpo">
			<h2>Acta de Servicio Técnico:</h2>
			<form action="acta_st.php" method="POST" target="_blank">
				<input type="hidden" name="id_colegio" value=<?php echo '"'.$id_colegio.'"'; ?>></input>
				<label>DNI del comodatario:</label>
				<input class="en_linea" type="text" id='dni' name="dni_com"></input>
				<input class='button button2' id='btnbuscarcom' type='button' onclick='buscarcom()' value="Buscar comodatario"></input>
				<div id='respuestatxt'></div>
				<div id='oculto' >
					<label>Quien retira la netbook es:</label>
					<select name="retira">
						<option value="padre">Padre</option>
						<option value="madre">Madre</option>
						<option value="tutor">Tutor</option>
					</select>
					<label>Curso:</label>
					<input type="text" name="curso">
				</input>
				<label>División:</label>
				<input type="text" name="division">
			</input>
			<label>Turno:</label>
			<select name="turno">
				<option value="mañana">Mañana</option>
				<option value="tarde">Tarde</option>
				<option value="vespertino">Vespertino</option>
			</select>
			<label>A continuación marque los componentes dañados o con fallas por los que la netbook requirio ST:</label>
			<br>
			<input type="checkbox" name="teclado" value="teclado" />Teclado<br />
			<input type="checkbox" name="motherboard" value="motherboard" />Motherboard<br />
			<input type="checkbox" name="pantalla" value="pantalla"/>Pantalla<br />
			<input type="checkbox" name="tpm" value="TPM"/>TPM<br />
			<input type="checkbox" name="disco" value="disco_rigido"/>Disco Rígido<br />
			<input type="checkbox" name="wifi" value="placa-wi-fi"/>Placa wi-fi<br />
			<input type="checkbox" name="varias" value="fallas varias"/>Fallas Varias<br />
		</div>
		<input class="button button2" id="mySubmit" type="submit" value="Generar Acta"></input>
	</form>
	<script>document.getElementById("mySubmit").disabled = true;</script>	
</div>
<?php
include('../includes/footer.php');
?>
</section>
</body>
</html>
