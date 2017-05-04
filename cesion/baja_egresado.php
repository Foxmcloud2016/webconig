<?php
	
	
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$id_egresado = intval($_GET['id_e']);
	$id_colegio = $_SESSION['colegio'];

	$query_baja="SELECT ID_EGRESADO,DNI,comodatarios.APEYNOM,ANIO_EGRESO,CURSO,DIVISION,TURNO,ESTADO FROM comodatarios INNER JOIN egresados WHERE ID_EGRESADO = '$id_egresado'";
	$result_baja=$conexion->query($query_baja);
	$baja = $result_baja->fetch_object();

	$dni = $baja->DNI;
	$apeynom = $baja->APEYNOM;
	$anio_egreso = $baja->ANIO_EGRESO;
	$curso = $baja->CURSO;
	$division = $baja->DIVISION;
	$turno = $baja->TURNO;

?>


<html>

<head>
	<title>Baja Egresado</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<script type="text/javascript">


$(document).ready(function() {


	$("#button").click(function() {


		var id_egresado = $("#id_egresado").val();

		$.ajax({
			type: "POST",
			url: "realizar_baja.php",
			dataType : 'json',
			data: {'id_egresado': id_egresado},
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
			<?php  include('../includes/header.php');  ?>
			<div id="cuerpo">
				<div id="formu">
					<h2>Dar de baja netbook de prestamo:</h2>
					<br/>
					<form name='fo' id="fo" method ="POST">
						<?php
						echo "<p>¿Esta seguro que quiere dar de baja al egresado con DNI <strong>$dni</strong> , apellidos y nombres <strong>$apeynom</strong>, Año de egreso <strong>$anio_egreso</strong>, curso <strong>$curso</strong> , division <strong>$division</strong>? </p>";
						?>
						<input type="text" name="id_egresado" id="id_egresado" value="<?php echo $id_egresado; ?>" hidden="true">
						<input class = 'button' id='button' type="button" value="Dar de baja"></input>
						<a class='button button2' href="lista_egresados.php">Cancelar</a>
					</form>
					<div id="mensaje_oculto">
						<span>La baja del egresado se realizo con exito</span>
						</br>
						</br>
						<a class='button button2' href="lista_egresados.php">Volver al listado de egresados</a>
					</div>
				</div>
			</div>	
				<?php
					include('../includes/footer.php');
				?>
			</div>

		</div>
	</section>
</body>

</html>