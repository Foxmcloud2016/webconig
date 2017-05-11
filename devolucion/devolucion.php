<?php
include('../includes/inicio_sesion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Administrativo</title>
	<meta charset="utf-8" />
	<!--Estilo para el desplegable de los DNI-->
	<!--link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"-->
	<!--Fin estilo desplegable DNI-->
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	<!--JQuery para desplegable de DNI-->
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/myscripts.js"></script>
		<!--script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script-->
		<!--script>
		  $(function() {
		    $( "#dni_comodatario" ).autocomplete({
		      source: 'autocompletar_dni.php'
		    });
		  });
		</script-->
	</head>
	<body>
		<section id="contenedor">
			<?php
			include('../includes/header.php');
			?>
			<div id="cuerpo">
				<h2>Devolucion de netbook en comodato:</h2>
				<form action="acta_devolucion_comodato.php" method="POST" target="_blank">
					<label>DNI del comodatario:</label>
					<input class="en_linea" type="text" name="dni_comodatario" id="dni"></input>
					<input class='button button2' id='btnbuscarcom' type='button' onclick='buscarcom()' value="Buscar comodatario"></input>
					<div id='respuestatxt'></div>
					<div id='oculto'>
						<label>A continuacion marque los componentes que adeuda el alumno:</label>
						<input type="checkbox" name="adeuda_bateria" value="adeuda_bateria" />Adeuda bateria <br />
						<input type="checkbox" name="adeuda_cargador" value="adeuda_cargador" />Adeuda cargador <br />
						<input type="checkbox" name="adeuda_antena" value="adeuda_antena"/>Adeuda antena <br />
						
						<label>Motivo de la devolución:</label>
						<input type="radio" name="motivo" value="egresado_ext" onchange="check()"/>Egresado fuera de término <br />
						<input type="radio" name="motivo" value="pase_no_pci" onchange="check()"/>Pase a cens o escuela privada <br />
						<input type="radio" name="motivo" value="pase_otra_prov" onchange="check()"/>Pase a otra provincia<br />
						<input type="radio" name="motivo" value="jubilacion" onchange="check()"/>Jubilacion<br />
						<input type="radio" name="motivo" id="otro" value="otro" onchange="check()" />Otro
						<label for="otro" id="label_area_oculta">Detalle a continuación el motivo de la devolución:</label>
						<textarea name="otro" id="area_oculta"></textarea>
					</div>
					<input class="button button2" type="submit" id="mySubmit" value="Generar Constancia"></input>	
				</form>	
				<script>document.getElementById("mySubmit").disabled = true;</script>
				<script>
				/*El presente scrip sirve para hacer aparecer y desaparecer el texarea al seleccionar el motivo 'otro'*/
					var textarea = document.getElementById('area_oculta').style.display = 'none';
					var label =  document.getElementById('label_area_oculta').style.display = 'none';	

					function check(){
						var motivo = document.getElementById("otro");
						var textarea = document.getElementById('area_oculta');
						var label =  document.getElementById('label_area_oculta');
							if (motivo.checked == true) {
								textarea.style.display = "block";
								label.style.display = "block";
								label.style.padding = "0px 0px 10px 0px";
							}
							if (motivo.checked == false) {
								textarea.style.display = "none";
								label.style.display = "none";
							}
						}
				</script>	
			</div>
			<?php
			include('../includes/footer.php');
			?>
		</section>
	</body>
	</html>