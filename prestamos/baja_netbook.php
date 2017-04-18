<?php
	
	
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$id_maquina = intval($_GET['id_m']);
	$id_colegio = $_SESSION['colegio'];

	$query_baja="SELECT ID_MAQUINA, SERIE, MARCA, MODELO, ESTADO FROM PARQUE_ESCOLAR WHERE (ESTADO='disponible'OR ESTADO='baja') AND ID_COLEGIO_FK='$id_colegio' AND ID_MAQUINA='$id_maquina'";
	$result_baja=$conexion->query($query_baja);
	$baja = $result_baja->fetch_object();

	$marca = $baja->MARCA;
	$modelo = $baja->MODELO;
	$serie = $baja->SERIE;
	$estado = $baja->ESTADO;

?>


<html>

<head>
	<title>Baja Parque Escolar</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
		<script type="text/javascript">


$(document).ready(function() {


	$("#button").click(function() {


		var id_maquina = $("#id_maquina").val();

		$.ajax({
			type: "POST",
			url: "realizar_baja.php",
			dataType : 'json',
			data: {'id_maquina': id_maquina},
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
			<?php if ($estado == 'disponible') {
			 ?>
			<div id="formu">
				<h2>Dar de baja netbook de prestamo:</h2>
				<br/>
				
				<form name='fo' id="fo" method ="POST">
							<?php
							echo "<p>Esta seguro que quiere dar de baja la netbook marca: $marca, modelo:$modelo y numero de serie: $serie</p>";
							?>
							<input type="text" name="id_maquina" id="id_maquina" value="<?php echo $id_maquina; ?>" hidden="true">
							<input class = 'button' id='button' type="button" value="Dar de baja"></input>
							<a class='button button2' href="admin_prestamo.php">Cancelar</a>
				</form>
				<div id="mensaje_oculto">
						<span>La baja del equipo se registro en la BBDD.</span>
						</br>
						</br>
						<a class='button button2' href="admin_prestamo.php">Administrar mas prestamos</a>
				</div>
				</div>
				<?php } else {?>
				<div id="mensaje_oculto">
						<span>La baja del equipo se registro en la BBDD.</span>
						</br>
						</br>
						<a class='button button2' href="admin_prestamo.php">Administrar mas prestamos</a>
				</div>
				<script type="text/javascript">$('#mensaje_oculto').show(); //muestro mediante id
					document.getElementById('mensaje_oculto').style.display = 'block';</script>
			<?php } ?>
				</div>	
				<?php
					include('../includes/footer.php');
				?>
			</div>

		</div>
	</section>
</body>

</html>