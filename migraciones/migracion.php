<?php
include('../includes/inicio_sesion.php');
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
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#mySubmit").click(function() {
				var dni = $("#dni").val();
				var id_com = $("#id_com").val();
				var id_colegio_o = $("#colegio_o").val();
				var id_colegio_d = $("#colegio_d").val();
				$.ajax({
					type: "POST",
					url: "alta_migracion.php",
					dataType : 'json',
					data: {'dni': dni,'colegio_o': id_colegio_o, 'id_com' : id_com, 'colegio_d': id_colegio_d},
					success: function(json) {
						console.log('correcto');
						console.log(json);
				$('#fo').hide(); //oculto mediante id
				document.getElementById("mensaje_oculto").innerHTML = json['data'];
				$('#mensaje_oculto').show(); //muestro mediante id
				document.getElementById('mensaje_oculto').style.display = 'block';
			}
		});
			});
		});
	</script>
</head>
<body>
	<section id="contenedor">
		<?php
		include('../includes/header.php');
		?>
		<div id="cuerpo">
			<h2>Acta de Migración:</h2>
			<form id='fo' method="POST" >
				<label>DNI del comodatario:</label>
				<input class="en_linea" type="text" id='dni' name="dni_com"></input>
				<input class='button button2' id='btnbuscarcom' type='button' onclick='buscarcom_m()' value="Buscar comodatario"></input>
				<div id='respuestatxt'>
				</div>
				<input class="button button2" type="button" id='mySubmit' value="Generar Acta"></input>
			</form>
			<script>document.getElementById("mySubmit").disabled = true;</script>
			<div id="mensaje_oculto">
			</div>
		</div>
		<?php
		include('../includes/footer.php');
		?>
	</section>
</body>
</html>
