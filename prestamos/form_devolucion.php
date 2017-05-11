<?php
	
	$id_maquina = intval($_GET['id']);
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$id_colegio = $_SESSION['colegio'];

	$query_devolucion="SELECT PARQUE.ID_MAQUINA, PARQUE.SERIE, PARQUE.MARCA, PARQUE.MODELO, PARQUE.ESTADO, PRESTAMOS.APEYNOM, PRESTAMOS.DNI, PRESTAMOS.TIPO_COM_PRE, PRESTAMOS.VIGENTE, PRESTAMOS.ID_PRESTAMO
						FROM parque_escolar AS PARQUE
						JOIN PRESTAMOS 
						ON PARQUE.ID_MAQUINA = PRESTAMOS.ID_MAQUINA_FK
						WHERE PRESTAMOS.ID_MAQUINA_FK = '$id_maquina'
						AND PARQUE.ID_COLEGIO_FK='$id_colegio'
						AND PRESTAMOS.VIGENTE = 1";
	$result_devolucion=$conexion->query($query_devolucion);

	if (mysqli_num_rows($result_devolucion) == 1) {
		while($row=$result_devolucion->fetch_assoc()){
		$apeynom=$row['APEYNOM'];
		$dni=$row['DNI'];
		$comodatario=$row['TIPO_COM_PRE'];
		$marca=$row['MARCA'];
		$modelo=$row['MODELO'];
		$serie=$row['SERIE'];
		$id_prestamo=$row['ID_PRESTAMO'];
		$estado=$row['ESTADO'];
	}
	}else{
		$estado='baja';// solo defino y asigno valor a esta variable para que no se genere un error
	}
	
	
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Devolucion Netbook de Prestamo</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../estilos/header.css">
		<link rel="stylesheet" type="text/css" href="../estilos/general.css">
		<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
		<script type="text/javascript">


			$(document).ready(function() {


				$("#button").click(function() {

					//Obtenemos el valor del campo nombre
					
					if($("#adeuda_bateria").is(':checked')) {  
			             var adeuda_bateria = 1;

			        } else {  
			            var adeuda_bateria = 0; 
			        }  

			        if($("#adeuda_cargador").is(':checked')) {  
			             var adeuda_cargador = 1;

			        } else {  
			            var adeuda_cargador = 0; 
			        }

			        if($("#adeuda_antena").is(':checked')) {  
			             var adeuda_antena = 1;

			        } else {  
			            var adeuda_antena = 0; 
			        }


					var dni = $("#dni").val();
					var apeynom = $("#apeynom").val();
					var marca = $("#marca").val();
					var modelo = $("#modelo").val();
					var serie = $("#serie").val();
					var id_prestamo = $("#id_prestamo").val();
					var prestamo_vigente = $("#prestamo_vigente").val();
					var id_maquina = $("#id_maquina").val();
					var comodatario = $("#comodatario").val();
					var estado_equipo = $("#estado_equipo").val();



					$.ajax({
						type: "POST",
						url: "devolver_net.php",
						dataType : 'json',
						data: {'apeynom': apeynom, 'dni': dni, 'marca': marca, 'modelo': modelo, 'serie': serie, 'id_prestamo': id_prestamo, 'prestamo_vigente': prestamo_vigente, 'id_maquina': id_maquina, 'comodatario': comodatario, 'estado_equipo': estado_equipo, 'adeuda_bateria': adeuda_bateria, 'adeuda_cargador': adeuda_cargador, 'adeuda_antena': adeuda_antena},
						success: function(json) {
							console.log('correcto');
							$('#mensaje_oculto').show(); //muestro mediante id
						$('#fo').hide(); //oculto mediante id
						$('#texto').hide(); //oculta el texto donde indica datos del alumno
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
					        }, //fin success
					        error: function (xhr) {
			        console.log('algo anda mal');
			    }//fin error
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
				<?php if ($estado == 'prestada') {
			 ?>
			 	<div id="formu">
					<h2>Devolucion Netbook de Prestamo:</h2>
					<br/>
					<?php echo "<p id='texto'>El alumno/docente <strong>$apeynom</strong>, devolvera la netbook marca <strong>$marca</strong>, modelo <strong>$modelo</strong> y numero de serie <strong>$serie</strong>.</p>";?>
						<form name="fo" id="fo" method ="POST">
							<input type="hidden" name="comodatario" id="comodatario" value="<?php echo $comodatario; ?>">
							<span>A continuacion marque los componentes que adeuda el alumno:</span>
							<br>
							<input type="checkbox" name="adeuda_bateria" id="adeuda_bateria" value="adeuda_bateria" />Adeuda bateria<br>
							<input type="checkbox" name="adeuda_cargador" id="adeuda_cargador" value="adeuda_cargador" />Adeuda cargador <br />
							<input type="checkbox" name="adeuda_antena" id="adeuda_antena" value="adeuda_antena"/>Adeuda antena<br>
							<label for= 'estado_equipo'>A continuacion detalle en que condiciones devuelve el equipo (sea breve):</label><br />
							<textarea name="estado_equipo" id="estado_equipo" required> </textarea>
							<br />
							<input type="hidden" name="prestamo_vigente" id="prestamo_vigente" value="0">
							<input type="hidden" name="apeynom" id="apeynom" value="<?php echo $apeynom; ?>" >
							<input type="hidden" name="dni" id="dni" value="<?php echo $dni; ?>">
							<input type="hidden" name="marca" id="marca" value="<?php echo $marca; ?>">
							<input type="hidden" name="modelo" id="modelo" value="<?php echo $modelo; ?>">
							<input type="hidden" name="serie" id="serie" value="<?php echo $serie; ?>">
							<input type="hidden" name="id_prestamo" id="id_prestamo" value="<?php echo $id_prestamo; ?>">
							<input class = 'button' id="button" type="button" value="Devuelve Net"></input>
							<input type="hidden" name="id_maquina" id="id_maquina" value="<?php echo $id_maquina; ?>" hidden="true">
							<a class='button button2' href="nets_prestadas.php">Cancelar</a>
						</form>
						<div id="mensaje_oculto">
						<span>La devolucion del equipo se registro en la BBDD. Para seguir administrando prestamos haga click en "Administrar mas prestamos" y para generar el PDF clickee en "Generar PDF".</span>
						</br>
						</br>
						<a class='button button2' href="nets_parque_escolar.php">Nets del Parque Escolar</a>
						<a class='button button2' href="devolucion_pdf.php?id_m=<?php echo $id_maquina.'&id_p='.$id_prestamo; ?>" target="_blank">Generar PDF</a>
						</div>
				</div>
				<?php } else {?>
			<div id="mensaje_oculto">
				<span>La devolucion del equipo se registro en la BBDD. Para seguir administrando prestamos haga click en "Administrar mas prestamos".</span>
				</br>
				</br>
				<a class='button button2' href="nets_parque_escolar.php">Administrar mas prestamos</a>
			</div>	
					<script type="text/javascript">$('#mensaje_oculto').show(); //muestro mediante id
					document.getElementById('mensaje_oculto').style.display = 'block';</script>
			<?php } ?>
				</div>	
				<?php
					include('../includes/footer.php');
				?>
		</section>
	</body>
</html>