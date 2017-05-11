<?php
	$id_maquina = intval($_GET['id']);
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');

	$query_prestada="SELECT ESTADO FROM PARQUE_ESCOLAR WHERE ID_MAQUINA='$id_maquina'";
	$result_prestada=$conexion->query($query_prestada);

	$maquina = $result_prestada->fetch_object();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Estado de Netbook</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {


			$("#button").click(function() {

				//Obtenemos el valor del campo nombre
				/*
				var dni = $("#dni").val();
				var nombre = $("#nombre").val();
				var apellido = $("#apellido").val();
				var cargador = $("#cargador").val();
				var prestamo_vigente = $("#prestamo_vigente").val();
				var id_maquina = $("#id_maquina").val();
				var comodatario = $("#comodatario").val();
				var motivo = $("#motivo1").val();
				var motivo = $("#motivo2").val();
				var motivo = $("#motivo3").val();
				var motivo = $("#motivo4").val();
				var motivo = $("#otro").val();
				var otro = $("#area_oculta").val();
*/

				 var cadena = $("#fo").serialize();
				 //alert(cadena);

				$.ajax({
					type: "POST",
					url: "prestar_net.php",
					data: $("#fo").serialize(),
					//dataType : 'json',
					//data: {'nombre': nombre, 'apellido': apellido, 'dni': dni, 'cargador': cargador, 'prestamo_vigente': prestamo_vigente, 'id_maquina': id_maquina, 'comodatario': comodatario, 'motivo1': motivo1,'motivo': motivo2,'motivo3': motivo3,'motivo4': motivo4,'otro': otro, 'area_oculta': area_oculta},
					success: function(response) {
						console.log(response);
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
				//return false;
			});
</script>
<!--script type="text/javascript">
 $(document).ready(function(){
 	$("#button").click(function(){
 var cadena = $("#fo").serialize();
 alert(cadena);
 return false;
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
			<?php if ($maquina->ESTADO == 'disponible') {
			 ?>
				<div id="formu">
					<h2>Prestamo de Nets</h2>	
						<form name='fo' id="fo" method ="POST">
							<label for= 'tipo_comodatario'>Tipo de Comodatario:</label>
							<select name="comodatario" id="comodatario" required>
								<option value="0">Alumno</option>
								<option value="1">Docente</option>
							</select>
							<label for= 'dni'>DNI</label>
							<input type="text" name="dni" id="dni" required> </input>
							<label for= 'apellido'>Apellido</label>
							<input type="text" name="apellido" id="apellido" required> </input>
							<label for= 'nombre'>Nombre</label>
							<input type="text" name="nombre" id="nombre" required></input>
							<label for= 'cargador'>Cargador</label>
							<select name="cargador" id="cargador" required>
								<option value="1">Si</option>
								<option value="0">No</option>
							</select>
							<input type="hidden" name="prestamo_vigente" id="prestamo_vigente" value="1" hidden="true">
							<input type="hidden" name="id_maquina" id="id_maquina" value="<?php echo $id_maquina; ?>" hidden="true">
							<label>Motivo del préstamo:</label>
								<input type="radio" name="motivo" value="1" id="motivo1" onchange="check()"/>Netbook del comodatario en Servicio Técnico<br />
								<input type="radio" name="motivo" value="2" id="motivo2" onchange="check()"/>Alumno en CUE de extraña jurisdicción<br />
								<input type="radio" name="motivo" value="3" id="motivo3" onchange="check()"/>Alumno cargado en otro CUE (dentro de TDF)<br />
								<input type="radio" name="motivo" value="4" id="motivo4" onchange="check()"/>Alumno solicita netbook luego del cierre<br />
								<input type="radio" name="motivo" value="5" id="otro" onchange="check()" />Otro<br />
							<label for="otro" id="label_area_oculta">Detalle a continuación el motivo del préstamo:</label>
								<textarea name="otro" id="area_oculta"></textarea>
							<input class = 'button' id='button' type="button" value="Prestar Net"></input>
							<a class='button button2' href="nets_disponibles.php">Cancelar</a>
						</form>
						<div id="mensaje_oculto">
						<span>El prestamo se cargo en la BBDD. Para realizar mas prestamos haga click en "Realizar mas prestamos" y para generar el PDF clickee en "Generar PDF".</span>
						</br>
						</br>
						<a class='button button2' href="nets_disponibles.php">Realizar mas prestamos</a>
						<a class='button button2' href="prestamo_pdf.php?id_m=<?php echo $id_maquina; ?>" target="_blank">Generar PDF</a>
						</div>
				</div>	
				<?php } else {?>
			<div id="mensaje_oculto">
				<span>El prestamo se cargo en la BBDD. Para seguir administrando prestamos haga click en "Administrar mas prestamos" y para generar el PDF clickee en "Generar PDF".</span>
				</br>
				</br>
				<a class='button button2' href="admin_prestamo.php">Administrar mas prestamos</a>
				<a class='button button2' href="prestamo_pdf.php?id_m=<?php echo $id_maquina; ?>" target="_blank">Generar PDF</a>
			</div>	
					<script type="text/javascript">$('#mensaje_oculto').show(); //muestro mediante id
					document.getElementById('mensaje_oculto').style.display = 'block';</script>
			<?php } ?>
				<script>
				/*El presente script sirve para hacer aparecer y desaparecer el texarea al seleccionar el motivo 'otro'*/
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