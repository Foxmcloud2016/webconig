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
	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {

			$("#button").click(function() {

		//Obtenemos el valor del campo nombre
		
		var marca = $("#marca").val();
		var modelo = $("#modelo").val();
		var serie = $("#serie").val();
		var estado_equipo = $("#estado_equipo").val();
		var estado = $("#estado").val();

		$.ajax({
			type: "POST",
			url: "modificar_parque_escolar.php",
			dataType : 'json',
			data: {'marca': marca, 'modelo': modelo, 'serie': serie, 'estado_equipo': estado_equipo, 'estado': estado},
			success: function(json) {
				console.log('correcto');
				$('#mensaje_oculto').show(); //muestro mediante id
			$('#fo').hide(); //oculto mediante id
			document.getElementById('mensaje_oculto').style.display = 'block';
			//Con el siguiente codigo se evita un F5 o Ctrl. + R pero no se evita el refresh desde el navegador.
			document.onkeydown = function() {    
				switch (event.keyCode) { 
		        case 116 : //F5 button
		        event.returnValue = false;
		        event.keyCode = 0;
		        return false; 
		        case 82 : //R button
		        if (event.ctrlKey) { 
		        	event.returnValue = false; 
		        	event.keyCode = 0;  
		        	return false; 
		        } 
		    }
		}
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
			<div id="formu">
				<h2>Constancia de Préstamo:</h2>
				<form name='fo' id="fo" method="POST">
					<label for="marca">Marca netbook:</label>
					<select name="marca" id="marca">
						<option value="EXO">EXO</option>
						<option value="BGH">Positivo BGH</option>
						<option value="Samsung">Samsung</option>
						<option value="CX">CX</option>
						<option value="PC-BOX">PC-BOX</option>
						<option value="Noblex">Noblex</option>
						<option value="Coradir">Coradir</option>
					</select>
					<label for="modelo">Modelo netbook:</label>
					<select name="modelo" id="modelo">
						<option value="E10IS">E10IS</option>
						<option value="E11IS2">E11IS2</option>
						<option value="100NZC">100NZC</option>
						<option value="NT1015E">NT1015E</option>
						<option value="C5">C5</option>
						<option value="Schoolmate11">Schoolmate 11</option>
					</select>
					<label for="serie">Número de serie:</label>
					<input type="text" name="serie" id="serie"></input>
					<span for= "estado_equipo">Condiciones en que se encuentra el equipo (maximo: 300 caracteres):</span>
					<textarea name="estado_equipo" id="estado_equipo" required> </textarea>
					<input class="oculto" type="text" name="id_colegio" value="id_colegio">
					<input class="oculto" type="text" name="estado" id="estado" value="disponible">
					<input class='button button2' type="button" id="button" type="button" value="Cargar al Parque Escolar"></input>
				</form>
				<div id="mensaje_oculto">
					<span class="br" >El equipo se cargo correctamente en la BBDD. Para seguir cargando netbooks haga click en "Cargar un nuevo equipo", y para administrar prestamos, en "Administrar prestamo".</span>
					<a class='button button2' href="admin_prestamo.php">Administrar prestamos</a>
					<a class='button button2' href="parque_escolar.php ?>">Cargar un nuevo equipo</a>
				</div>
			</div>
		</div>
		<?php
		include('../includes/footer.php');
		?>
	</section>
</body>
</html>